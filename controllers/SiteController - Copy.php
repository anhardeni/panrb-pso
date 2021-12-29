<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use app\models\SignupForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
       $dataDB = Yii::$app->db;
        $sql_chart1 = "SELECT COUNT(rekap_pso1.id) AS cc_hn FROM rekap_pso1 WHERE 
        (          
        rekap_pso1.analisa = 'Proses Verifikasi'
    )";
    $chart1 = $dataDB->createCommand($sql_chart1)->queryAll();


        //2
    $sql_chart2 = "SELECT COUNT(rekap_pso1.id) AS cc_hn FROM rekap_pso1 WHERE 
    (          
    rekap_pso1.analisa = 'Belum Mengajukan'
)";
$chart2 = $dataDB->createCommand($sql_chart2)->queryAll();


        //3
$sql_chart3 = "SELECT COUNT(rekap_pso1.id) AS cc_hn FROM rekap_pso1 WHERE 
(          
    rekap_pso1.analisa = 'Menolak'
)";

$chart3 = $dataDB->createCommand($sql_chart3)->queryAll();

        //4
$sql_chart4 = "SELECT COUNT(rekap_pso1.id) AS cc_hn FROM rekap_pso1 WHERE 
(          
    rekap_pso1.analisa is Not null
)";
$chart4 = $dataDB->createCommand($sql_chart4)->queryAll();

//5
$sql_chart5 = "SELECT COUNT(rekap_pso1.id) AS cc_hn FROM rekap_pso1 WHERE 
(          
    rekap_pso1.analisa = 'Telah Selesai-PSO'
)";
$chart5 = $dataDB->createCommand($sql_chart5)->queryAll();

//6

$sql_chart6 = "SELECT DISTINCT(rekap_pso1.jenis_lembaga) AS cc_hn FROM rekap_pso1 WHERE asn = 'Pusat' ORDER BY rekap_pso1.jenis_lembaga ASC
";
$chart6 = $dataDB->createCommand($sql_chart6)->queryColumn();


$sql_chart7 = "SELECT analisa FROM rekap_pso1 GROUP BY rekap_pso1.analisa ASC";
//
$chart7 = $dataDB->createCommand($sql_chart7)->queryAll();

$sql_chart10 = "SELECT DISTINCT(rekap_pso1.jenis_lembaga) AS cc_hn FROM rekap_pso1 WHERE asn = 'Pusat' ORDER BY rekap_pso1.jenis_lembaga ASC
";
$chart10 = $dataDB->createCommand($sql_chart10)->queryColumn();


$frameworks = $dataDB->createCommand('SELECT jenis_lembaga
    from rekap_pso2  ORDER BY jenis_lembaga ASC') -> queryAll();

$series = [];
foreach ($frameworks as $framework) {
    $results = $dataDB->createCommand('
SELECT 
COUNT(flag1_analisa_usulan) as total_aju
FROM
    rekap_pso2
WHERE flag1_analisa_usulan ='.$framework['id'].'
GROUP BY
 jenis_lembaga,
 flag1_analisa_usulan
        ')->queryColumn();
    $data = array_map('intval', $results);
    $series[] = [
        'jenis_lembaga' => $frameworks['jenis_lembaga'],
        'data' => $data,
    ];

}

print_r($series);




// $sqlChart8 = "SELECT total from chart8 WHERE flag1_analis_usulan = ".$key['id']." ORDER BY jenis_lembaga ASC";

   //$sqlChart8i = Yii::$app->db->createCommand($sqlChart8)->queryColumn();

// foreach ($frameworks as $key)  {



      // var_dump($series); die();

return $this->render('index', compact( 
 'chart1',
 'chart2', 
 'chart3',
 'chart4',
 'chart5',
 'chart6',
 'chart7',
 'series',
 'frameworks',

// 'fr_kementerian' => $fr_kementerian,
)
//     [
//  'chart1' => $chart1,
//  'chart2' => $chart2, 
//  'chart3' => $chart3,
//  'chart4' => $chart4,
//  'chart5' => $chart5,
//  'chart6' => $chart6,
//  'series' => $series,
// // 'fr_kementerian' => $fr_kementerian,
// ]


);
}

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     *
     * @return mixed
     *
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}

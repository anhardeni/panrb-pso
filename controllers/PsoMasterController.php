<?php

namespace app\controllers;

use Yii;
use app\models\PsoMaster;
use app\models\PsoMasterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PsoMasterController implements the CRUD actions for PsoMaster model.
 */
class PsoMasterController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PsoMaster models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PsoMasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PsoMaster model.
     * @param integer $id
     * @return mixed
     */



    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

/*
    {
       //  $sql_chart1master = "SELECT persentase_pso_iii, persentase_pso_iv, persentase_pso_iii 
       // AS cc_hn FROM rekap_pso1 WHERE id = '.$id.' ";
       //  $chart1master = Yii::$app->db->createCommand($sql_chart1master)->queryAll();
        
       //  print_r($chart1master);



          $model = $this->findModel($id);
            $m3 = (int) $model ->eksisting_pso_iii / $model ->pso_akhir_iii ;
            $m4 = (int) $model ->eksisting_pso_iv / $model ->pso_akhir_iv ;
          //  if $model ->pso_akhir_v === 0 or $model ->pso_akhir_v is null, (int)$model ->eksisting_pso_v / $model ->pso_akhir_v ;
           $m5= (int)$model ->eksisting_pso_v / $model ->pso_akhir_v ;

         // var_dump($m1); die();

        return $this->render('view', [
         //   'model' => $this->findModel($id),
                'model' => $model,
                'm3' => $m3,
                'm4' => $m4,
                'm5' => $m5,        ]);
    }

    /**
     * Creates a new PsoMaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    
    public function actionCreate()
    {
        $model = new PsoMaster();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PsoMaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)

    {


   $model = $this->findModel($id);

   if ($model->load(Yii::$app->request->post()) && $model->save()) {
    return $this->redirect(['view', 'id' => $model->id]);
} else {
    return $this->render('update', [
        'model' => $model,
    ]);
}
}

    /**
     * Deletes an existing PsoMaster model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {

     try
     {
        $this->findModel($id)->delete();

    }
    catch(\yii\db\IntegrityException  $e)
    {
       Yii::$app->session->setFlash('error', "Data Tidak Dapat Dihapus Karena Dipakai Modul Lain");
   } 
   return $this->redirect(['index']);
}

public function actionDownloaddatasrt($id) 
{ 
        // $download = Uploadberkas::findOne($id); 
        // $path=Yii::getAlias('@web').'/'.$download->web_filename;

    $model = $this->findModel($id);
        //$path=Yii::getAlias('@web').'/uploads/'.$model->web_filename;
    Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/';
    $path = Yii::$app->params['uploadPath'] . $model->web_filename;

   // var_dump($path); die();

    if (file_exists($path)) {
      return Yii::$app->response->sendFile($path);
  } else {
           // throw new NotFoundHttpException("can't find {$download->web_filename} file");
      throw new NotFoundHttpException("can't find {$model->web_filename} file");
  }
}

    /**
     * Finds the PsoMaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PsoMaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PsoMaster::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

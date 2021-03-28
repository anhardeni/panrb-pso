<?php

namespace app\controllers;

use Yii;
use app\models\PsoMaster;
use app\models\PsoUserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PsoUserController implements the CRUD actions for PsoMaster model.
 */
class PsoUserController extends Controller
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
        $userId = Yii::$app->user->id;
        //$userInstansi = PsoMaster::find()->where(['instansi'] => $userId) ->all();
        $searchModel = new PsoUserSearch();
        $searchModel ->id_instansi = $userId;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
       //  $dataProvider = $searchModel->search(Yii::$app->user->id);

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

    /**
     * Creates a new PsoMaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
         $model = new PsoMaster();

        if ($model->load(Yii::$app->request->post())) {
        $image1b = UploadedFile::getInstance($model, 'image1b');
        

        if (!is_null($image1b)) {
         $model->src_filename = $image1b->name;

         $tmp = explode('.', $image1b->name);
         $ext = end($tmp);

        // $ext = end((explode(".", $image1b->name)));


              // generate a unique file name to prevent duplicate filenames
         $model->web_filename = Yii::$app->security->generateRandomString().".{$ext}";
    
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
         Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/';

         $path = Yii::$app->params['uploadPath'] . $model->web_filename;
       

         $image1b->saveAs($path);
      

       }
       if ($model->save()) {    
            //var_dump ($model->data_gambar_filename); die();         
        return $this->redirect(['view', 'id' => $model->id]);             
      }  else {
        var_dump ($model->getErrors()); die();
      }
    }
    return $this->render('create', [
      'model' => $model,
    ]);
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
          $old_file = $model->web_filename;

if ($model->load(Yii::$app->request->post())) {
        $image1b = UploadedFile::getInstance($model, 'image1b');
        

        if ((!is_null($image1b))) {
         $model->src_filename = $image1b->name;

         $ext = end((explode(".", $image1b->name)));
              // generate a unique file name to prevent duplicate filenames
         $model->web_filename = Yii::$app->security->generateRandomString().".{$ext}";
    
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
         Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/';

         $path = Yii::$app->params['uploadPath'] . $model->web_filename;
         $image1b->saveAs($path);

          if (empty($model->web_filename)){
           $model->web_filename = $old_file;
         }
      

       }
       if ($model->save()) {    
            //var_dump ($model->data_gambar_filename); die();         
        return $this->redirect(['view', 'id' => $model->id]);             
      }  else {
        var_dump ($model->getErrors()); die();
      }
    }
    return $this->render('update', [
      'model' => $model,
    ]);
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

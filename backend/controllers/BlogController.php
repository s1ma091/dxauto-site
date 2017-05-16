<?php

namespace backend\controllers;

use Yii;
use backend\models\Blog;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * BlogController implements the CRUD actions for Blog model.
 */
class BlogController extends Controller
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
                    
                ],
            ],
        ];
    }

    /**
     * Lists all Blog models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Blog::find()->where(['name'=>'answer']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
     public function actionAdvantages()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Blog::find()->where(['name'=>'advantages']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
     public function actionShortcomings()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Blog::find()->where(['name'=>'shortcomings']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
     public function actionCart()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Blog::find()->where(['name'=>'cart']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
     public function actionSms()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Blog::find()->where(['name'=>'sms']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
     public function actionWork()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Blog::find()->where(['name'=>'work']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Blog model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
         if(Blog::find()->where(['id'=>$id])->all()) {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    } else {
        return $this->render(['view']);
    }
    }

    /**
     * Creates a new Blog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Blog();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->date = date('Y-m-d');
            if($model->views_count == null) {
                $model->views_count = 1;
            }
             if( $model->image = UploadedFile::getInstance($model, 'image')){
            $model->image->saveAs('../../frontend/web/img/'.$model->image->baseName.'.'.$model->image->extension);
             $this->image = 'img/'.$model->image->baseName.'.'.$model->image->extension;  
        }
        $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

  
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->date = date('Y-m-d');
           if($model->views_count == null) {
                $model->views_count = 1;
            }
             if($model->customer == null) {
                $model->views_count = 'Користувач';
            }
             if(  $model->image = UploadedFile::getInstance($model, 'image')){
                
            $model->image->saveAs('../../frontend/web/img/'.$model->image->baseName.'.'.$model->image->extension);
             $model->image = 'img/'.$model->image->baseName.'.'.$model->image->extension;  

        }
   
         $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

 
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Blog::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

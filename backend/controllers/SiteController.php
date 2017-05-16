<?php

namespace backend\controllers;

use Yii;
use backend\models\Pages;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\LoginForm;
use yii\filters\AccessControl;
/**
 * SiteController implements the CRUD actions for Pages model.
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
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
            // 'verbs' => [
            //     'class' => VerbFilter::className(),
            //     'actions' => [
            //         'logout' => ['post'],
            //     ],
            // ],
        ];
    }

    /**
     * Lists all Pages models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'main']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);

        }
        
    }
public function actionMainpage()
    {
          if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'main']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    }
    public function actionAboutCompany()
    {
          if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'about']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    }
    public function actionQuestions()
    {
          if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'questions']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    }
    public function actionBase()
    {
          if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'base']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    }
    public function actionPremium()
    {
          if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'premium']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    }
    public function actionExtended()
    {
          if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'extended']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    }
    public function actionSystemDiscribe()
    {
          if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'discribe']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    }
    public function actionBlogList()
    {
          if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'blog']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    }
    public function actionOrderForm()
    {
          if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'form']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    }
    public function actionContacts()
    {
          if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'contacts']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    }
    public function actionAdvantages()
    {
          if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'advantages']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    }

    public function actionView($id)
    {
         if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
            
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    }
    public function actionCreate()
    {
         if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $model = new Pages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
             if( $model->image = UploadedFile::getInstance($model, 'image')){
            $model->image->saveAs('../../frontend/web/img/'.$model->image->baseName.'.'.$model->image->extension);
             $this->image = 'img/'.$model->image->baseName.'.'.$model->image->extension;  
        }
       
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    }
    /**
     * Updates an existing Pages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
         if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
              if(  $model->image = UploadedFile::getInstance($model, 'image')){
            $model->image->saveAs('../../frontend/web/img/'.$model->image->baseName.'.'.$model->image->extension);
             $model->image = 'img/'.$model->image->baseName.'.'.$model->image->extension;  
         $model->save(false);
        }
          return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    }

    public function actionHeader() {
       if(Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/login']);
        } else {
        $dataProvider = new ActiveDataProvider([
            'query' => Pages::find()->where(['name'=>'index']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }   
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Finds the Pages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
 public function actionLogout()
    {
       Yii::$app->user->logout();

        return Yii::$app->response->redirect(['site/login']);
    }


     public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
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



}

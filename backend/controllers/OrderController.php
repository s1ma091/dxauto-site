<?php

namespace backend\controllers;

use Yii;
use backend\models\Orderform;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class OrderController extends Controller
{
 
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Orderform models.
     * @return mixed
     */
    public function actionIndex()
    {
            $model = OrderForm::find()->where(['formName'=>'order'])->all();
        $dataProvider = new ActiveDataProvider([
            'query' => Orderform::find()->where(['formName'=>'order']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'model'=>$model,
        ]);
    }
     public function actionFeedBack()
    {
        $model = OrderForm::find()->where(['formName'=>'feedBack'])->all();

        $dataProvider = new ActiveDataProvider([
            'query' => Orderform::find()->where(['formName'=>'feedBack']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'model'=>$model,
        ]);
    }
     public function actionPhone()
    {
        $model = OrderForm::find()->where(['formName'=>'phone'])->all();

        $dataProvider = new ActiveDataProvider([
            'query' => Orderform::find()->where(['formName'=>'phone']),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'model'=>$model,
        ]);
    }

    /**
     * Displays a single Orderform model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if($checked = OrderForm::find()->where(['id'=>$id])->all()) {
       
        $checked[0]->checked = 'Переглянуто';
        $checked[0]->save(false);
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    } else {
       return $this->redirect(['index']);  
    }
    }
    /**
     * Creates a new Orderform model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Orderform();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Orderform model.
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

  
    public function actionDelete($id)
    {
     $this->findModel($id)->delete();

        return $this->redirect(Yii::$app->request->referrer);
    }

  
    protected function findModel($id)
    {
        if (($model = Orderform::findOne($id)) !== null) {
            return $model;
        } else {
            print_r($model);
           // throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

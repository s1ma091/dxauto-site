<?php
namespace frontend\controllers;

use Yii;
use yii\helpers\Html;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Pages;
use frontend\models\Blog;
use frontend\models\OrderPackageForm;
use frontend\models\Orderform;
use yii\data\Pagination;
use frontend\models\Phone;
use frontend\models\Image;

class SiteController extends Controller
{

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

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            
        ];
    }
    public function actionIndex()
    {
        $posts1=Pages::find()->where(['name'=>'main'])->andWhere(['nameBlock'=>'1'])->all();
        $posts2=Pages::find()->where(['name'=>'main'])->andWhere(['nameBlock'=>'2'])->all();
        $posts3=Pages::find()->where(['name'=>'main'])->andWhere(['nameBlock'=>'3'])->all();
        $posts4=Pages::find()->where(['name'=>'main'])->andWhere(['nameBlock'=>'4'])->all();
        $posts5=Pages::find()->where(['name'=>'main'])->andWhere(['nameBlock'=>'5'])->all();
        $posts6=Pages::find()->where(['name'=>'main'])->andWhere(['nameBlock'=>'6'])->all();
        $posts7=Pages::find()->where(['name'=>'main'])->andWhere(['nameBlock'=>'7'])->all();
        $posts8=Pages::find()->where(['name'=>'main'])->andWhere(['nameBlock'=>'8'])->all();
        return $this->render('mainpage', [
            'posts' => $posts1,
            'posts2'=>$posts2,
            'posts3'=>$posts3,
            'posts4'=>$posts4,
            'posts5'=>$posts5,
            'posts6'=>$posts6,
            'posts7'=>$posts7,
            'posts8'=>$posts8,
        ]);
    }
     public function actionOrder()
    {   
        $posts=Pages::find()->where(['name'=>'form'])->all();
   
        $model = new OrderPackageForm;
        
if ($model->load(Yii::$app->request->post()) && $model->validate()) {
$form = new Orderform();
$form->name = $model->name;
$form->email = $model->email;
$form->phone = $model->phone;
$form->company = $model->company;
$form->comment = $model->comment;
$form->workPlaceCount = $model->workPlaceCount;
$form->departmentCount = $model->departmentCount;
$form->country = $model->country;
$form->city = $model->city;
$form->address = $model->address;
$form->package = $model->package;
$form->formName = 'order';
$form->checked = '0';
if($form->save()) {
    Yii::$app->session->setFlash('success');
    $model = new OrderPackageForm();
};
}
        return $this->render('order', [
            'model'=> $model,
            'posts'=>$posts,
            
        ]);
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
    public function actionContacts()
    {
        $model = new ContactForm();
         $posts=Pages::find()->where(['name'=>'contacts'])->andWhere(['nameBlock'=>'1'])->all();
         $posts2=Pages::find()->where(['name'=>'contacts'])->andWhere(['nameBlock'=>'2'])->all();
         if ($model->load(Yii::$app->request->post()) && $model->validate()) {
$form = new Orderform();
$form->formName = 'feedback';
$form->name = $model->name;
$form->email = $model->email;
$form->phone = $model->phone;
$form->comment = $model->comment;
$form->checked = 'Не переглянуто';
if($form->save()) {
    Yii::$app->session->setFlash('success');
    $model = new ContactForm();
};
}
            return $this->render('contacts', [
                'posts'=>$posts,
                'posts2'=>$posts2,
                'model'=>$model,
            ]);
        }  
 public function actionAboutCompany()
 {
        $model = new Phone();
       function isNumeric($attribute)
{
    $attribute =  preg_replace("/[^0-9]/", '',$attribute);
    if (!preg_match('/^[0-9]{10}$/', $attribute)) {
        return false;
    } else {
        return true;
    }
}
          if ($model->load(Yii::$app->request->post()) && $model->validate() && isNumeric($model->phone)) {
            $form = new Orderform();
            $form->phone = $model->phone;
            $form->formName = 'phone';
            $form->checked = 'Не переглянуто';
            if($form->save()) {
    Yii::$app->session->setFlash('success');
    $model = new Phone();
};
          }
        $answer = Blog::find()->where(['name'=>'answer'])->all();
        $posts1=Pages::find()->where(['name'=>'about'])->andWhere(['nameBlock'=>'1'])->all();
        $posts2=Pages::find()->where(['name'=>'about'])->andWhere(['nameBlock'=>'2'])->all();
        $posts3=Pages::find()->where(['name'=>'about'])->andWhere(['nameBlock'=>'3'])->all();
        $posts4=Pages::find()->where(['name'=>'about'])->andWhere(['nameBlock'=>'4'])->all();
        $posts5=Pages::find()->where(['name'=>'about'])->andWhere(['nameBlock'=>'5'])->all();
        return $this->render('about', [
            'posts' => $posts1,
            'posts2'=>$posts2,
            'posts3'=>$posts3,
            'posts4'=>$posts4,
            'posts5'=>$posts5,
            'answer'=>$answer,
            'model'=>$model,
        ]);
    } 
    public function actionQuestions()
    {
        $posts1=Pages::find()->where(['name'=>'questions'])->andWhere(['nameBlock'=>'1'])->all();
        $posts2=Blog::find()->where(['name'=>'answer'])->all();

        return $this->render('questions', [
            'posts' => $posts1,
            'posts2'=>$posts2,
        ]);
    }
     public function actionAnswer()
    {
         $request = Yii::$app->request;
         if($request->get('getAllText')) {
          $text=Blog::find()->where(['id'=>$request->get('getAllText')])->all();
          $text[0]->views_count++;
          $text[0]->save();
           $posts=Pages::find()->where(['name'=>'questions'])->all();
        return $this->render('answer', [
            'text'=>$text,
            'posts'=>$posts,
        ]);
    }
    }
    public function actionBase()
    {
        $posts1=Pages::find()->where(['name'=>'base'])->andWhere(['nameBlock'=>'1'])->all();
        $posts2=Pages::find()->where(['name'=>'base'])->andWhere(['nameBlock'=>'2'])->all();
        $posts3=Pages::find()->where(['name'=>'base'])->andWhere(['nameBlock'=>'3'])->all();
        $posts4=Pages::find()->where(['name'=>'base'])->andWhere(['nameBlock'=>'4'])->all();
        $posts5=Pages::find()->where(['name'=>'base'])->andWhere(['nameBlock'=>'5'])->all();
        $posts6=Pages::find()->where(['name'=>'base'])->andWhere(['nameBlock'=>'6'])->all();
        $posts7=Pages::find()->where(['name'=>'base'])->andWhere(['nameBlock'=>'7'])->all();

        return $this->render('base', [
            'posts' =>$posts1,
            'posts2'=>$posts2,
            'posts3'=>$posts3,
            'posts4'=>$posts4,
            'posts5'=>$posts5,
            'posts6'=>$posts6,
            'posts7'=>$posts7,
        ]);
    } 
    public function actionPremium()
    {
        $posts1=Pages::find()->where(['name'=>'premium'])->andWhere(['nameBlock'=>'1'])->all();
        $posts2=Pages::find()->where(['name'=>'premium'])->andWhere(['nameBlock'=>'2'])->all();
        $posts3=Pages::find()->where(['name'=>'premium'])->andWhere(['nameBlock'=>'3'])->all();
        $posts4=Pages::find()->where(['name'=>'premium'])->andWhere(['nameBlock'=>'4'])->all();
        $posts5=Pages::find()->where(['name'=>'premium'])->andWhere(['nameBlock'=>'5'])->all();
        $posts6=Pages::find()->where(['name'=>'premium'])->andWhere(['nameBlock'=>'6'])->all();
        $posts7=Pages::find()->where(['name'=>'premium'])->andWhere(['nameBlock'=>'7'])->all();

        return $this->render('premium', [
            'posts' =>$posts1,
            'posts2'=>$posts2,
            'posts3'=>$posts3,
            'posts4'=>$posts4,
            'posts5'=>$posts5,
            'posts6'=>$posts6,
            'posts7'=>$posts7,
        ]);
    }
    public function actionExtended()
    {
        $posts1=Pages::find()->where(['name'=>'extended'])->andWhere(['nameBlock'=>'1'])->all();
        $posts2=Pages::find()->where(['name'=>'extended'])->andWhere(['nameBlock'=>'2'])->all();
        $posts3=Pages::find()->where(['name'=>'extended'])->andWhere(['nameBlock'=>'3'])->all();
        $posts4=Pages::find()->where(['name'=>'extended'])->andWhere(['nameBlock'=>'4'])->all();
        $posts5=Pages::find()->where(['name'=>'extended'])->andWhere(['nameBlock'=>'5'])->all();
        $posts6=Pages::find()->where(['name'=>'extended'])->andWhere(['nameBlock'=>'6'])->all();
        $posts7=Pages::find()->where(['name'=>'extended'])->andWhere(['nameBlock'=>'7'])->all();

        return $this->render('extended', [
            'posts' =>$posts1,
            'posts2'=>$posts2,
            'posts3'=>$posts3,
            'posts4'=>$posts4,
            'posts5'=>$posts5,
            'posts6'=>$posts6,
            'posts7'=>$posts7,
        ]);
    }
    
    public function actionSystemDiscribe()
    {
        $posts1=Pages::find()->where(['name'=>'discribe'])->andWhere(['nameBlock'=>'1'])->all();
        $posts2=Pages::find()->where(['name'=>'discribe'])->andWhere(['nameBlock'=>'2'])->all();
        $posts3=Pages::find()->where(['name'=>'discribe'])->andWhere(['nameBlock'=>'3'])->all();
        $posts4=Pages::find()->where(['name'=>'discribe'])->andWhere(['nameBlock'=>'4'])->all();
        $posts5=Pages::find()->where(['name'=>'discribe'])->andWhere(['nameBlock'=>'5'])->all();
        $image=Image::find()->all();
        return $this->render('system', [
            'posts' =>$posts1,
            'posts2'=>$posts2,
            'posts3'=>$posts3,
            'posts4'=>$posts4,
            'posts5'=>$posts5,
            'image'=>$image,

        ]);
    }
    public function actionBlogList()
    {
        $lastRecord = Blog::find()->limit(3)->orderBy(['id'=> SORT_DESC])->all();
         $request = Yii::$app->request;
       if($request->get('blog') == 'answer') {
             $post=Blog::find()->where(['name'=>'answer'])->all();
       $pagin=Blog::find()->where(['name'=>'answer']);
       } elseif ($request->get('blog') == 'advantages') {
            $pagin=Blog::find()->where(['name'=>'advantages']);
 $post=Blog::find()->where(['name'=>'advantages'])->all();
       }  elseif ($request->get('blog') == 'shortcomings') {
            $pagin=Blog::find()->where(['name'=>'shortcomings']);
 $post=Blog::find()->where(['name'=>'shortcomings'])->all();
       } elseif ($request->get('blog') == 'cart') {
            $pagin=Blog::find()->where(['name'=>'cart']);
 $post=Blog::find()->where(['name'=>'cart'])->all();
       } elseif ($request->get('blog') == 'sms') {
            $pagin=Blog::find()->where(['name'=>'sms']);
 $post=Blog::find()->where(['name'=>'sms'])->all();
       } elseif ($request->get('blog') == 'work') {
            $pagin=Blog::find()->where(['name'=>'work']);
 $post=Blog::find()->where(['name'=>'work'])->all();
       } else {
               $post=Blog::find()->where(['name'=>'answer'])->all();
                $pagin=Blog::find()->where(['name'=>'answer']);
       }

 $pagination = new Pagination([
             'defaultPageSize' => 4,
             'totalCount' => $pagin->count()
         ]); 
       $post1=Pages::find()->where(['name'=>'blog'])->andWhere(['nameBlock'=>'1'])->all();
        $menu=Pages::find()->where(['name'=>'blog'])->andWhere(['nameBlock'=>'2'])->all();
       
if($request->get('getText'== $id)) {   
       
           return $this->redirect('/user/index',$id);
         }
        return $this->render('blogList', [
             'posts2' =>$post,
            'posts1'=>$post1,
            'pagination'=>$pagination,
            'lastRecord'=>$lastRecord,
            'menu'=>$menu,
        ]);
    }

    public function actionBlogItem()
    {
          $lastRecord = Blog::find()->limit(3)->orderBy(['id'=> SORT_DESC])->all();
         $request = Yii::$app->request;
         if($request->get('getText')) {
             $text=Blog::find()->where(['id'=>$request->get('getText')])->all();
          $text[0]->views_count++;
          $text[0]->save();
$menu=Pages::find()->where(['name'=>'blog'])->andWhere(['nameBlock'=>'2'])->all();
$menu2=Pages::find()->where(['name'=>'blog'])->andWhere(['nameBlock'=>'1'])->all();
           $posts=Pages::find()->where(['name'=>'blog'])->andWhere(['nameBlock'=>'1']);
        return $this->render('blogItem',[
            'text'=>$text,
            'posts'=>$posts,
            'lastRecord'=>$lastRecord,
            'menu'=>$menu,
            'menu1'=>$menu2,
        ]);
         }
    }
    public function actionAdvantages()
    {
            $posts=Pages::find()->where(['name'=>'advantages'])->andWhere(['nameBlock'=>'1'])->all();
            $posts2=Pages::find()->where(['name'=>'advantages'])->andWhere(['nameBlock'=>'2'])->all();
            $posts3=Pages::find()->where(['name'=>'advantages'])->andWhere(['nameBlock'=>'3'])->all();
            $posts4=Pages::find()->where(['name'=>'advantages'])->andWhere(['nameBlock'=>'4'])->all();
            $posts5=Pages::find()->where(['name'=>'advantages'])->andWhere(['nameBlock'=>'5'])->all();
        return $this->render('advantages', [
            'posts' =>$posts,
            'posts2'=>$posts2,
            'posts3'=>$posts3,
            'posts4'=>$posts4,
            'posts5'=>$posts5,
        ]);
    }
    
}

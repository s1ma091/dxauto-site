<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\widgets\Messages;
use yii\bootstrap\ActiveForm;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>DRIMEXT</title>

    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="/admin/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/admin/css/animate.css" rel="stylesheet">
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
<?php $this->head() ?>
</head>

<body>

<?php $this->beginBody() ?>
<?php if(!Yii::$app->user->isGuest) { ?>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                   <span class="clear"> <span class="block m-t-xs"> 
                                   <strong class="font-bold">Адміністратор</strong>
                             </span>  </span> </a>
                        </div>
                    </li>
                     <li class="active">
                        <a href="<?=Yii::$app->urlManager->createUrl(['order/index'])?>"><i class="fa fa-th-large"></i>
                         <span class="nav-label">Листи</span>
                               <?= Messages::widget(); ?>  </a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['order/index'])?>">Замовлення пакету</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['order/feed-back'])?>">Зворотній зв'язок</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['order/phone'])?>">Замовлення дзвінка</a></li>
                            
                          
                        </ul>
                        
                    </li>
                    <li attr = '1'>
                        <a href="<?=Yii::$app->urlManager->createUrl(['site/mainpage#1'])?>"><i class="fa fa-th-large"></i>
                         <span class="nav-label">Головна сторінка</span></a>
                        
                    </li>
                    <li>
                        <a href="<?=Yii::$app->urlManager->createUrl(['site/about-company'])?>"><i class="fa fa-diamond"></i> 
                        <span class="nav-label">Про компанію</span> </a>
                    </li>
                    <li>
                        <a href="<?=Yii::$app->urlManager->createUrl(['site/questions'])?>"><i class="fa fa-bar-chart-o"></i>
                         <span class="nav-label">Питання-відповіді</span></a>
                    </li>
                   
                    <li>
                        <a href="#"><i class="fa fa-pie-chart"></i> <span class="nav-label">Пакети</span>
                        <span class="fa arrow"></span>  </a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['site/base'])?>">Базовий пакет</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['site/premium'])?>">Преміум пакет</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['site/extended'])?>">Розширений пакет</a></li>
                          
                        </ul>
                    </li>
                    <li>
                        <a href="<?=Yii::$app->urlManager->createUrl(['site/system-discribe'])?>"><i class="fa fa-flask"></i> 
                        <span class="nav-label">Опис системи</span></a>
                    </li>
                    <li>
                        <a href="<?=Yii::$app->urlManager->createUrl(['site/blog-list'])?>"><i class="fa fa-edit"></i> 
                        <span class="nav-label">Блог-лист</span>
                        <span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['blog/index'])?>">Що говорять користувачі</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['blog/advantages'])?>">Переваги</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['blog/shortcomings'])?>">Недоліки</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['blog/cart'])?>">Персональна картка</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['blog/sms'])?>">смс розсилка</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['blog/work'])?>">Ефективність роботи</a></li>
                          
                        </ul>
                    </li>
                  
                    <li>
                        <a href="<?=Yii::$app->urlManager->createUrl(['site/order-form'])?>"><i class="fa fa-files-o"></i> 
                        <span class="nav-label">Форма замовлення</span></a>
                    </li>
                    <li>
                        <a href="<?=Yii::$app->urlManager->createUrl(['site/contacts'])?>"><i class="fa fa-globe"></i> 
                        <span class="nav-label">Контакти</span></a>
                        
                    </li>
                    <li>
                        <a href="<?=Yii::$app->urlManager->createUrl(['site/advantages'])?>"><i class="fa fa-flask"></i> 
                        <span class="nav-label">Переваги</span></a>
                    </li> 
                       <li>
                        <a href="<?=Yii::$app->urlManager->createUrl(['site/header'])?>"><i class="fa fa-th-large"></i>
                         <span class="nav-label">header and footer</span></a>
                        
                    </li>
                     <li>
                        <a href="<?=Yii::$app->urlManager->createUrl(['image/index'])?>"><i class="fa fa-th-large"></i>
                         <span class="nav-label">Дизайн та візуалізація. Слайдер</span></a>
                        
                    </li>           
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>          
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                <?= Html::beginForm(['/site/logout'], 'post') ?>
                <?= Html::submitButton(
                    ' Вийти' ,
                    ['class' => 'btn fa fa-sign-out']
                )?>
                   <?= Html::endForm() ?> 
                </li>              
            </ul>
        </nav>
        
        </div>
        
      <?=$content?>
        </div>
 
<?php } else {?>
<?=$content ?>
</div>
<?php }?>
    <!-- Mainly scripts -->
    <script src="/admin/js/jquery-2.1.1.js"></script>
        <script src="/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script src="/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/admin/js/plugins/flot/jquery.flot.js"></script>
    <script src="/admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/admin/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/admin/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/admin/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="/admin/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/admin/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/admin/js/inspinia.js"></script>
    <script src="/admin/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->


    <!-- GITTER -->
    <script src="/admin/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="/admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="/admin/js/plugins/summernote/summernote.min.js"></script>
    <!-- Sparkline demo data  -->
    <script src="/admin/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="/admin/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="/admin/js/plugins/toastr/toastr.min.js"></script>
    <script src="/admin/js/my-js.js"></script>


    <script>
        $(document).ready(function() {
	 $("#pages-value, #pages-all_text, #blog-title, #blog-text, #blog-all_text").summernote();

});
    </script>
</body>
</html>
<?php $this->endPage() ?>

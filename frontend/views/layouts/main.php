<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\widgets\Menu;
use common\widgets\Footer;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <style>
.pluso-more{visibility: hidden;}
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
 
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
 <header>
    <div class="container">
      <div class="menu-wrap">
        <div class="logo"><img src="/img/logo.png" alt="Logo"/></div>
        <?= Menu::widget(); ?>
      </div>
    </div>
  </header>

       
        <?= $content ?>


<footer class="footer">
   <div class="wrap location"><script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:506px;width:100%;'><div id='gmap_canvas' style='height:506px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="http://phplinkdir.com/">phplinkdir.com</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(50.763452637899796,25.356067094689926),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.763452637899796,25.356067094689926)});infowindow = new google.maps.InfoWindow({content:'<strong>Офіс</strong><br>Луцьк, Зацепи 10<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
    <div class="map-tabs find-us">
      <ul class="nav nav-stacked tab-switch">
        <li class="active"><a data-toggle="pill" href="#home"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
        <li><a data-toggle="pill" href="#menu1"><i class="fa fa-bus" aria-hidden="true"></i></a></li>
        <li><a data-toggle="pill" href="#menu2"><i class="fa fa-car" aria-hidden="true"></i></a></li>
      </ul>
      <div class="tab-content">
           <?= Footer::widget(); ?>
      </div>
    </div>
  </div>
    <div class="copyright">
      <div>&copy; 2017 Dreamext</div>
    </div>
</footer>
  

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

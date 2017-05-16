<?php
namespace common\widgets;
use Yii;
use frontend\models\Pages;
use yii\bootstrap\Widget;

class Footer extends Widget
{
    public function init(){}

    public function run() {
          $posts2=Pages::find()->where(['name'=>'index'])->andWhere(['nameBlock'=>'2'])->all();
      
        return $this->render('menu/footer', [
            'posts2'=>$posts2,
           
        ]);
    }
}
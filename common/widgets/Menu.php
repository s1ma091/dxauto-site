<?php
namespace common\widgets;
use Yii;
use frontend\models\Pages;
use yii\bootstrap\Widget;

class Menu extends Widget
{
    public function init(){}

    public function run() {
         $posts1=Pages::find()->where(['name'=>'index'])->andWhere(['nameBlock'=>'1'])->all();
        return $this->render('menu/view', [
            'posts' => $posts1,
        ]);
    }
}
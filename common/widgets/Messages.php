<?php
namespace common\widgets;
use Yii;
use backend\models\OrderForm;
use yii\bootstrap\Widget;

class Messages extends Widget
{
    public function init(){}

    public function run() {
         $posts1=OrderForm::find()->count();
         $posts2=OrderForm::find()->where(['checked'=>'Не переглянуто'])->count();
        return $this->render('menu/messages', [
            'posts' => $posts1,
            'posts2'=>$posts2,
        ]);
    }
}
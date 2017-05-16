<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orderforms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderform-index">

    <h1><?= Html::encode($this->title) ?></h1>
<?php if($model[0]->workPlaceCount != NULL) { ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'email:email',
            'phone',
            'company',
             'package',
             'checked',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php } else if($model[0]->email == NULL) { ?>
  <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'phone',
             'checked',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php } else { ?>
 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'email:email',
            'phone',
             'checked',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php }?>
</div>

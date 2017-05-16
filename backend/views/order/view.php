<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Orderform */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orderforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderform-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<?php if($model->workPlaceCount != NULL) { ?>

    <?= DetailView::widget([
        'model' => $model,
        
        'attributes' => [
            //'id',
            'name',
            'email:email',
            'phone',
            'company',
            'comment:ntext',
            'workPlaceCount',
            'departmentCount',
            'country',
            'city',
            'address:ntext',
            'package',
            'checked',
        ],
    ]) ?>
    <?php } else if($model->email === NULL) { ?>
<?= DetailView::widget([
        'model' => $model,
        
        'attributes' => [
            'phone',
          
            'checked',
        ],
    ]) ?>
<?php } else { ?>
 <?= DetailView::widget([
        'model' => $model,
        
        'attributes' => [
            //'id',
            'name',
            'email:email',
            'phone',
            //'company',
            'comment:ntext',
            'checked',
        ],
    ]) ?>
<?php }?>
</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Orderform */

$this->title = 'Create Orderform';
$this->params['breadcrumbs'][] = ['label' => 'Orderforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderform-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

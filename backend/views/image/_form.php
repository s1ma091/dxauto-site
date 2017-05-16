<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Image */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="image-form">

    <?php $form = ActiveForm::begin(['options'=>[
   'enctype'=> 'multipart/form-data'],]); ?>

      <?= $form->field($model, 'image')->fileInput() ?>
 <?php if($model->image !='') { ?> <img style='width:150px;heigth:150px' class="image" src="<?='../../frontend/web/'.$model->image?>"/><?php }?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

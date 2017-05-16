<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(['options'=>[
   'enctype'=> 'multipart/form-data'],]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'all_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'organization')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'image')->fileInput() ?>
 <?php if($model->image !='') { ?> <img style='width:100px;heigth:100px' class="image" src="<?='../../frontend/web/'.$model->image?>"/><?php }?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

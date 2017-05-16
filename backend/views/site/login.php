<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';

?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
         
            <h3>Welcome to Dreamext AdminZone</h3>

               <?php $form = ActiveForm::begin(['id' => 'login-form', 'class'=>'m-t']); ?>
           
                <div class="form-group">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder'=>'Username', 'class'=>'form-control']) ?>
                
                </div>
                <div class="form-group">
                 
                    <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control', 'placeholder'=>'Password']) ?>
                </div>
           
  <?= Html::submitButton('Login', ['class' => 'btn btn-primary block full-width m-b', 'name' => 'login-button']) ?>
               
              <?php ActiveForm::end(); ?>
        
        </div>
    </div>
</body>



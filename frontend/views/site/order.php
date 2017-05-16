<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Dropdown;
?>

 <div class="board board--order-form">
      <div class="container">
        <div class="board-descrip">
          <h1><?= $posts[0]->value?></h1>
          <p><?= $posts[0]->all_text?></p>
        </div>
      </div>
    </div>
  </header>
  <div class="wrap order-form">
    <div class="container">
        <div class="pageHolder">
            <div class="formHolder confirmOrderForm">
            
                       <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name-and-surname">Ваше ім'я та прізвище <span>*</span></label>
                                <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label(false) ?>
                            </div>
                            <div class="form-group">
                                <label for="mail">Ваш email <span>*</span></label>
                                <?= $form->field($model, 'email')->textInput()->label(false) ?>
                            </div>
                            <div class="form-group">
                                <label for="phone">Ваш телефон <span>*</span></label>
                                <?= $form->field($model, 'phone')->textInput()->label(false) ?>
                            </div>
                            <div class="form-group">
                 
                                <?= $form->field($model, 'company')->textInput()->label('Компанія') ?>
                            </div>
                            <div class="form-group">
    
                                <?= $form->field($model, 'comment')->textarea(['rows'=>5])->label('Коментар') ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="qnt">Кількість робочих місць на СТО <span>*</span></label>
                                <?= $form->field($model, 'workPlaceCount')->textInput(['type'=>'number'])->label(false) ?>
                            </div>
                            <div class="form-group">
                                <label for="qnt2">Кількість відділень, філій <span>*</span></label>
                                <?= $form->field($model, 'departmentCount')->textInput(['type'=>'number'])->label(false) ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'country')->textInput()->label('Країна') ?>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                         <?= $form->field($model, 'city')->textInput()->label('Місто') ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                     
                                         <?= $form->field($model, 'address')->textInput()->label('Адреса') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">   
                               <?= $form->field($model, 'package')->dropDownList(['Базовий пакет'=>'Базовий пакет','Розширений пакет'=>'Розширений Пакет', 'Преміум пакет'=>'Преміум пакет'], ['class'=>'form-control','onchange'=>'function()'])->label('Оберіть пакет послуг'); ?>
                            </div>
                            <div class="buttonHolder">
                                 <?= Html::submitButton('Оформити замовлення', 
                                 ['class' => 'btn green-btn', 'name' => 'contact-button']) ?>
                                <?php echo \yii\helpers\Html::a( 'Назад', Yii::$app->request->referrer, ['class'=>'btn white-btn']); ?>
                            </div>
                        </div>
                    </div>
                     <?php $form = ActiveForm::end(); ?>
             
            </div>
        </div>
    </div>
  </div>

<?php if(Yii::$app->session->getFlash('success')): ?> 
  <div class="modal fade" id="thank-you-modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Дякуємо Вам!</h4>
        </div>
        <div class="modal-body"><img src="/img/businessman-icon.svg" alt=""/>
          <div>Ваш запит прийнятий!</div>
          <div>Наш менеджер зв’яжиться з вами для уточнення деталей.</div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->registerJs("
    $('#thank-you-modal').modal('show');
  ") ?>
<?php endif; ?>
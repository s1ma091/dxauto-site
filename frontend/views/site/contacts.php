  <?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
  <div class="board board--contacts">
      <div class="container">
        <div class="board-descrip">
          <h1><?=$posts[0]->value?></h1>
          <p><?=$posts[0]->all_text?></p>
        </div>
      </div>
    </div>
    <div class="wrap contacts-trapeze-bg">
    <div class="container">
        <div class="pageHolder">
            <div class="contactInfo">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><?=$posts2[0]->value?></h2>
                        <?=$posts2[0]->all_text?>
                    </div>
                    <div class="col-sm-6">
                        <div class="mapHolder">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80797.6023182059!2d25.263965339048134!3d50.739878560860205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472599eba185965d%3A0xd25274a2228db86c!2z0JvRg9GG0YzQuiwg0JLQvtC70LjQvdGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1suk!2sua!4v1475702140889" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="formHolder contactFormHolder">
                <h2>Зворотній зв'язок</h2>
                  <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Ваше ім'я та прізвище <span>*</span></label>
                                  <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label(false) ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email <span>*</span></label>
                                <?= $form->field($model, 'email')->textInput(['autofocus' => true])->label(false) ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="comment">Коментар</label>
                                  <?= $form->field($model, 'comment')->textarea(['rows'=>4])->label(false) ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tel">Телефон <span>*</span></label>
                                  <?= $form->field($model, 'phone')->textInput(['autofocus' => true])->label(false) ?>
                            </div>
                        </div>
                    </div>
                    <div class="buttonHolder">
                       <?= Html::submitButton('Надіслати', ['class' => 'btn green-btn']) ?>
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
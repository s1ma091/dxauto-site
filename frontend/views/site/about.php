   <?php 
   use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
    <div class="board board--about-company">
      <div class="container">
        <div class="board-descrip">
          <h1><?= $posts[0]->value?></h1>
          <p>L<?= $posts[0]->all_text?></p>
          <div class="start-action--btn"><a class="green-btn" href="#" data-toggle="modal" data-target="#order-call-modal">Замовити дзвінок</a>
          <a class="white-btn" href="<?=Yii::$app->urlManager->createUrl(['site/contacts'])?>">Написати нам</a></div>
        </div>
      </div>
    </div>
  </header>
  <div class="trapeze-bg about-us-trapeze">
    <div class="wrap about-us">
      <div class="container">
        <div class="about-us--info">
          <h2><?= $posts2[0]->value?></h2>
          <p><?= $posts2[0]->all_text?></p>
          <?= $posts3[0]->all_text ?>
        </div>
        <div class="about-us--img"><img src="<?='../'.$posts2[0]->image?>" alt=""/></div>
      </div>
    </div>
    <div class="wrap technology-of-development">
      <div class="container">
        <h2> <?= $posts4[0]->value ?></h2>
        <div class="tech-items clearfix">
          <?= $posts4[0]->all_text ?>
        </div>
        <div class="response-section">
          <h2> <?= $posts5[0]->value ?></h2>
          <div class="response-slider-wrap">
            <?php foreach ($answer as $blog) : ?>
            <div class="response-item">
              <p><?=$blog->text?></p>
              <div class="response-author">
                <div class="response-author--ava"><img src="../<?=$blog->image?>" alt=""/></div>
                <div>
                  <div class="response-author--name"><?=$blog->customer?></div>
                  <div class="response-author--info"><?=$blog->organization?></div>
                </div>
              </div>
            </div>
            <?php endforeach ; ?>
          
      
          </div>
        </div>
      </div>
    </div>
  </div>





   <div class="modal fade" id="order-call-modal" role="dialog">
    <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Замовити дзвінок</h4>
        </div>
        <div class="modal-body"><img src="/img/phone-call-icon.png" alt=""/>
          <div class="order-call--form">
              <?php $form = ActiveForm::begin(); ?>
             <?= $form->field($model, 'phone')->textInput(['class'=>'order-call--input', 'placeholder'=>'Введіть Ваш номер телефону (___) ___-__-__'])->label(false) ?>
             <?= Html::submitButton('Надіслати', ['class' => 'btn green-btn']) ?>
                <?php $form = ActiveForm::end(); ?>
          </div> 
        </div>
      </div>
    </div>
  </div>
  <!-- Modal-->
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
<div class="board board--package-board">
      <div class="container">
        <div class="row">
          <div class="col-md-12 board-title">
            <h1><?= $posts[0]->value?></h1>
            <p><?= $posts2[0]->value?></p>
          </div>
          <div class="col-md-8 board-descrip">
            <?= $posts2[0]->all_text?>
           
          <div class="col-md-4 board-img"><img src="<?= '/'.$posts2[0]->image?>" alt=""/></div>
        </div>
      </div>
    </div>
    <div class="wrap opportunities-wrap">
    <div class="container">
      <h2><?= $posts3[0]->value?></h2>
      <p><?= $posts3[0]->all_text?></p>
      <div class="row opportunities">
       <?= $posts4[0]->all_text?>
      </div>
    </div>
  </div>
  <div class="wrap design-slider-wrap">
    <h2><?= $posts5[0]->value?></h2>
    <p><?= $posts5[0]->all_text?></p>
    <div class="design-slider">
    <?php foreach ($image as $img) : ?>
      <div class="slide-wrap"><img src="/<?= $img->image?>" alt=""/></div>
      <?php endforeach ; ?>
    </div>
    <div class="slide-phone-wrap"></div>
  </div>
  <div class="wrap">
    <div class="container">
     <div class="start">
        <h2>Чи готові ви почати?</h2>
        <div class="start-action">
          <div>Переглянути Demo версію або залишити заявку</div>
          <div class="start-action--btn"><a class="green-btn" href="<?=Yii::$app->urlManager->createUrl(['site/order'])?>">Demo версія</a>
          <a class="white-btn" href="<?=Yii::$app->urlManager->createUrl(['site/order'])?>">Замовити</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
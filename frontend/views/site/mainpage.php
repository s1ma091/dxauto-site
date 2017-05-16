

<div class="board main-board">
      <div class="container">
        <div class="row">
          <div class="board-descrip col-md-8">
            
            <h1> <?= $posts[0]->value ?></h1>
            <p><?= $posts[0]->all_text ?></p>
            <div class="start-action--btn"><a class="green-btn" href="<?=Yii::$app->urlManager->createUrl(['site/order'])?>">Demo версія</a><a class="white-btn" href="<?=Yii::$app->urlManager->createUrl(['site/order'])?>">Замовити</a></div>
          </div>
          <div class="board-img col-md-4"><img src="<?='../'.$posts2[0]->image?>" alt=""/></div>
        </div>
      </div>
    </div>
 
  <div class="trapeze-bg">
    <div class="wrap our-solutions">
      <div class="container">
        <h2><?= $posts2[0]->value ?></h2>
        <div class="our-solutions--descrip"><?= $posts2[0]->all_text ?></div>
        <div class="solutions-wrap clearfix">
          <?= $posts3[0]->all_text ?>
        </div>
      </div>
    </div>
    <div class="wrap system-descrip">
      <div class="system-descrip--title">
        <h2> <?= $posts4[0]->value ?></h2>
        <div class="dreamext-auto-goal"> <?= $posts4[0]->all_text ?></div>
        <div class="system-descrip--info">
          <div class="system-descrip--img"><img src="<?='../'.$posts5[0]->image?>" alt=""/></div>
          <div class="system-descrip--panels">
            <div class="panel-group" id="accordion">
              <?=$posts5[0]->all_text ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrap">
    <div class="container work-detail">
      <div class="concept-solutions">
        <h2> <?=$posts6[0]->value ?></h2>
         <?=$posts6[0]->all_text ?>
      </div>
      <div class="components-of-cooperation">
        <h2><?=$posts7[0]->value ?></h2>
        <?=$posts7[0]->all_text ?>
      </div>
    </div>
  </div>
  <div class="wrap technology-of-development">
    <div class="container">
      <h2>  <?=$posts8[0]->value ?></h2>
        <?=$posts8[0]->all_text ?>
      <div class="start">
        <h2>Чи готові ви почати?</h2>
        <div class="start-action">
          <div>Переглянути Demo версію або залишити заявку</div>
          <div class="start-action--btn"><a class="green-btn" href="<?=Yii::$app->urlManager->createUrl(['site/order'])?>">Demo версія</a><a class="white-btn" href="<?=Yii::$app->urlManager->createUrl(['site/order'])?>">Замовити</a></div>
        </div>
      </div>
    </div>
  </div>
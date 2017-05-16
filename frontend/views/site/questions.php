    <div class="board board--questions">
      <div class="container">
        <div class="board-descrip">
          <h1><?= $posts[0]->value ?></h1>
          <p><?= $posts[0]->all_text ?></p>
        </div>
      </div>
    </div>
     <div class="questions-wrap trapeze-bg">
    <div class="container">
      <?php foreach($posts2 as $post) : ?>
      <div class="question">
        <div class="question--img"><img src="<?php if($post->image != null){ ?><?='../'.$post->image?> <?php } else { ?><?='/img/businessman-icon.svg'?><?php }?>" alt=""/></div>
        <div>
          <div class="question--views"><span>користувачів Переглянуло: <i class="fa fa-eye" aria-hidden="true"></i><?= $post->views_count ?></span></div>
          <a class="question--title" href="<?=Yii::$app->urlManager->createUrl(['site/answer','getAllText'=>$post->id])?>">
          <?= $post->title ?></a>
          <div class="question--answer-text"><?= $post->text?></div>
        </div>
      </div>
      <?php endforeach ;?>
  
    </div>
  </div>
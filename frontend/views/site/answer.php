 <div class="board board--questions">
      <div class="container">
        <div class="board-descrip">
          <h1><?=$posts[0]->value?></h1>
          <p><?=$posts[0]->all_text?></p>
        </div>
      </div>
    </div>
  </header>
  <div class="questions-wrap answer-wrap trapeze-bg">
    <div class="container">
      <div class="question">
        <div class="question--img"><img src="<?php if($text[0]->image != null){ ?><?='../'.$text[0]->image?> <?php } else { ?><?='/img/businessman-icon.svg'?><?php }?>" alt=""/></div>
        <div>
          <div class="question--views"><span>користувачів Переглянуло: <i class="fa fa-eye" aria-hidden="true"></i> 
          <?=$text[0]->views_count?></span></div>
          <div class="question--title"><?=$text[0]->title?></div>
          <div class="question--answer-text">
            <p><?=$text[0]->all_text?></p>
    
          </div>
        </div>
      </div>
    </div>
  </div>
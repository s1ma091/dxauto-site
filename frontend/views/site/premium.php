<div class="board board--package-board">
      <div class="container">
        <div class="row">
          <div class="col-md-12 board-title">
            <h1><?= $posts[0]->value ?></h1>
            <p><?= $posts2[0]->value ?></p>
          </div>
          <div class="col-md-8 board-descrip">
            <?= $posts2[0]->all_text ?>   
          <div class="col-md-4 board-img"><img src="<?='../'.$posts2[0]->image?>" alt=""/></div>
        </div>
      </div>
    </div>
    <div class="wrap package-wrap trapeze-bg">
    <div class="container">
      <div class="ability--item">
        <div class="ability--descrip">
          <div class="ability--icon"><img src="/img/human-resources-icon.svg" alt=""/></div>
          <div>
            <div class="ability--title"><?= $posts3[0]->value ?></div>
            <div class="ability--info">
              <?= $posts3[0]->all_text ?> 
            </div>
          </div>
        </div>
        <div class="ability--img"><img src="<?='../'.$posts3[0]->image?>" alt=""/></div>
      </div>
      <div class="ability--item">
        <div class="ability--descrip">
          <div class="ability--icon"><img src="/img/teamwork1-icon.svg" alt=""/></div>
          <div>
            <div class="ability--title"><?= $posts4[0]->value ?></div>
            <div class="ability--info">
              <?= $posts4[0]->all_text ?>
               </div>
          </div>
        </div>
        <div class="ability--img"><img src="<?='../'.$posts4[0]->image?>" alt=""/></div>
      </div>
      <div class="ability--item">
        <div class="ability--descrip">
          <div class="ability--icon"><img src="/img/profits-icon.svg" alt=""/></div>
          <div>
            <div class="ability--title"><?= $posts5[0]->value ?></div>
            <div class="ability--info">
              <?= $posts5[0]->all_text ?>
              </div>
          </div>
        </div>
        <div class="ability--img"><img src="<?='../'.$posts5[0]->image?>" alt=""/></div>
      </div>
      <div class="ability--item">
        <div class="ability--descrip">
          <div class="ability--icon"><img src="/img/contract-icon.svg" alt=""/></div>
          <div>
            <div class="ability--title"><?= $posts6[0]->value ?></div>
            <div class="ability--info">
              <?= $posts6[0]->all_text ?>
              
            </div>
          </div>
        </div>
        <div class="ability--img"><img src="<?='../'.$posts6[0]->image?>" alt=""/></div>
      </div>
      <div class="ability--item">
        <div class="ability--descrip">
          <div class="ability--icon"><img src="/img/invoice-icon.svg" alt=""/></div>
          <div>
            <div class="ability--title"><?= $posts7[0]->value ?></div>
            <div class="ability--info">
              <?= $posts7[0]->all_text ?>
            </div>
          </div>
        </div>
        <div class="ability--img"><img src="<?='../'.$posts7[0]->image?>" alt=""/></div>
      </div>
    </div>
  </div>
 
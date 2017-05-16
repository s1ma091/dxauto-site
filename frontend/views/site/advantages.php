 <div class="board board--about-company board--advantages">
      <div class="container">
        <div class="board-descrip">
          <h1><?= $posts[0]->value?></h1>
          <p><?= $posts[0]->all_text?></p>
        </div>
      </div>
    </div>
 <div class="wrap advantages-wrap">
    <div class="container">
      <div class="ability--item">
        <div class="ability--descrip">
          <div class="ability--icon"><img src="/img/settings-icon.svg" alt=""/></div>
          <div>
            <div class="ability--label blue-label">Сучасні технології управління</div>
            <div class="ability--title"><?= $posts2[0]->value?></div>
            <div class="ability--info">
              <p><?= $posts2[0]->all_text?></p>
            </div>
          </div>
        </div>
        <div class="ability--img"><img src="/<?= $posts2[0]->image?>" alt=""/></div>
      </div>
      <div class="ability--item">
        <div class="ability--descrip">
          <div class="ability--icon"><img src="/img/analytics-icon.svg" alt=""/></div>
          <div>
            <div class="ability--label red-label">Контроль якості роботи СТО</div>
            <div class="ability--title"><?= $posts3[0]->value?></div>
            <div class="ability--info">
              <p><?= $posts3[0]->all_text?></p>
            </div>
          </div>
        </div>
        <div class="ability--img"><img src="/<?= $posts3[0]->image?>" alt=""/></div>
      </div>
      <div class="ability--item">
        <div class="ability--descrip">
          <div class="ability--icon"><img src="/img/curriculum-icon.svg" alt=""/></div>
          <div>
            <div class="ability--label gold-label">Крос-Платформенність</div>
            <div class="ability--title"><?= $posts4[0]->value?></div>
            <div class="ability--info">
              <p><?= $posts4[0]->all_text?></p>
            </div>
          </div>
        </div>
        <div class="ability--img"><img src="/<?= $posts4[0]->image?>" alt=""/></div>
      </div>
      <div class="ability--item">
        <div class="ability--descrip">
          <div class="ability--icon"><img src="/img/contract-icon.svg" alt=""/></div>
          <div>
            <div class="ability--label blue-label">Контроль за персоналом</div>
            <div class="ability--title"><?= $posts5[0]->value?></div>
            <div class="ability--info">
              <p><?= $posts5[0]->all_text?>/p>
            </div>
          </div>
        </div>
        <div class="ability--img"><img src="/<?= $posts5[0]->image?>" alt=""/></div>
      </div>
    </div>
  </div>
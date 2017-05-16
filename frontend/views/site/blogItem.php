<div class="board board--questions">
      <div class="container">
        <div class="board-descrip">
          <h1><?= $menu1[0]->value?></h1>
          <p><?= $menu1[0]->all_text?></p>
        </div>
      </div>
    </div>
     <div class="wrap trapeze-bg">
      <div class="container">
          <div class="pageHolder">
              <div class="row">
                  <div class="col-sm-8">
                      <div class="blogItemStatic">
                          <div class="imgHolder">
                              <img src="/<?= $text[0]->image?>" alt=""/>
                          </div>
                          <ul class="postInfo">
                              <li><i class="fa fa-file-text" aria-hidden="true"></i><?= $text[0]->organization?></li>
                              <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i><?= $text[0]->date?></li>
                              <li><i class="fa fa-eye" aria-hidden="true"></i><?= $text[0]->views_count?></li>
                          </ul>
                          <h3><?= $text[0]->title?></h3>
                          <p><?= $text[0]->all_text?></p>
                          <ul class="socRow">
                             <script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
  <div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,nocounter,theme=03" data-services="vkontakte,facebook,twitter,google"></div>
                                         
                          </ul>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="asideMenuHolder">
                          <h2><?= $menu[0]->value?></h2>
                          <ul class="menu">
                              <?= $menu[0]->all_text?>
                              </ul>
                          <h2>Останні записи</h2>
                          <ul class="blogItemsMinList">
                               <?php foreach ($lastRecord as $last) : ?>
                              <li>
                                  <div class="blogItemSmall">
                                      <div class="clearfix">
                                          <div class="imgHolder">
                                              <a class="img" href="<?=Yii::$app->urlManager->createUrl(['site/blog-item','getText'=>$last->id])?>" style="background-image: url('/<?= $last->image ?>')"></a>
                                          </div>
                                          <div class="caption">
                                              <h3><a href="<?=Yii::$app->urlManager->createUrl(['site/blog-item','getText'=>$last->id])?>"><?= $last->title ?></a></h3>
                                              <div class="date"><?= $last->date ?></div>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <?php endforeach; ?>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
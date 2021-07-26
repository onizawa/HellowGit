  <header class="header">
    <div class="header__inner">
      <div class="header__logo">
        <div class="logo__kuraray"><img src="/katana/common/img/logo_kuraray.png" alt="kuraray"></div>
        <div class="logo__noritake"><img src="/katana/common/img/logo_noritake.png" alt="Noritake"></div>
      </div>
    </div>
    <nav class="gNav">
      <ul class="gNavList">
        <?php
          $url = $_SERVER['REQUEST_URI'];
          $url = str_replace('/katana/', '', $url);
        ?>
        <?php if( $url == "" ): ?>
        <li class="gNavList__item gNavList__item--home active"><a href="/katana/"><span>ホーム</span></a></li>
        <?php else: ?>
        <li class="gNavList__item gNavList__item--home"><a href="/katana/"><span>ホーム</span></a></li>
        <?php endif; ?>
        <?php if( strstr($url,'color_simulation') == true ): ?>
        <li class="gNavList__item gNavList__item--color active"><a href="/katana/color_simulation/"><span>カラー<br class="is--pc">シミュレーション</span></a></li>
        <?php else: ?>
        <li class="gNavList__item gNavList__item--color"><a href="/katana/color_simulation/"><span>カラー<br class="is--pc">シミュレーション</span></a></li>
        <?php endif; ?>
        <?php if( strstr($url,'stain_glaze') == true ): ?>
        <li class="gNavList__item gNavList__item--stain active"><a href="/katana/stain_glaze/"><span>ステイン<br class="is--pc">グレーズ</span></a></li>
        <?php else: ?>
        <li class="gNavList__item gNavList__item--stain"><a href="/katana/stain_glaze/"><span>ステイン<br class="is--pc">グレーズ</span></a></li>
        <?php endif; ?>
        <?php if( strstr($url,'framework_design') == true ): ?>
        <li class="gNavList__item gNavList__item--framework active"><a href="/katana/framework_design/"><span>フレーム<br class="is--pc">デザイン</span></a></li>
        <?php else: ?>
        <li class="gNavList__item gNavList__item--framework"><a href="/katana/framework_design/"><span>フレーム<br class="is--pc">デザイン</span></a></li>
        <?php endif; ?>
        <?php if( strstr($url,'sintering_schedule') == true ): ?>
        <li class="gNavList__item gNavList__item--sinteringSchedule active"><a href="/katana/sintering_schedule/"><span>ジルコニア<br class="is--pc">焼成スケジュール</span></a></li>
        <?php else: ?>
        <li class="gNavList__item gNavList__item--sinteringSchedule"><a href="/katana/sintering_schedule/"><span>ジルコニア<br class="is--pc">焼成スケジュール</span></a></li>
        <?php endif; ?>
        <?php if (strstr($url,'baking_schedule') == true ): ?>
        <li class="gNavList__item gNavList__item--bakingSchedule active"><a href="/katana/baking_schedule/"><span>陶材<br class="is--pc">焼成スケジュール</span></a></li>
        <?php else: ?>
        <li class="gNavList__item gNavList__item--bakingSchedule"><a href="/katana/baking_schedule/"><span>陶材<br class="is--pc">焼成スケジュール</span></a></li>
        <?php endif; ?>
        <?php if( strstr($url,'faq') == true ): ?>
        <li class="gNavList__item gNavList__item--faq active"><a href="/katana/faq/"><span>よくある質問</span></a></li>
        <?php else: ?>
        <li class="gNavList__item gNavList__item--faq"><a href="/katana/faq/"><span>よくある質問</span></a></li>
        <?php endif; ?>
      </ul>
    </nav>
    <div class="spNav">
      <div class="logo"><a href="/katana/"><img src="/katana/common/img/logo_katanaZirconia.png" alt="刀 KATANA Zirconia"></a></div>
      <div class="spNav__btn">
        <div class="spNav__btn--inner">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </header>
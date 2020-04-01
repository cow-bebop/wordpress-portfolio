<!-- メニュー -->
<header class="">
  <div class="header-inner">
    <h1>
      <a href="<?php echo home_url(); ?>">
        <?php bloginfo('title'); ?>
      </a>
    </h1>
  <nav id="top-nav">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'mainmenu',
      'container' => '', // 囲うタグ
      'menu_class' => '', // クラス属性をつける
      'items_wrap' => '<ul>%3$s</ul>' // メニューのフォーマットを決める
    ));
    ?>
  </nav>
</div>

</header>
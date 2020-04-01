<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メニュー -->
<?php get_template_part('content', 'menu'); ?>

<div id="main">

  <!-- blog_list -->
  <section id="blog_list" class="site-width">
    <h1 class="title">BLOG</h1>
    <div id="content" class="article">
      <article class="article-item">

        <!-- 記事のループ -->
        <?php get_template_part('loop'); ?>

        <?php if (function_exists("pagination")) pagination($additional_loop->max_num_pages); ?>

    </div>
    <!-- サイドバー -->
    <?php get_sidebar(); ?>

  </section>
</div>

<!-- フッター -->
<?php get_footer(); ?>
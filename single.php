<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メニュー -->
<?php get_template_part('content', 'menu'); ?>

<div id="main">

  <!-- blog_list -->
  <section id="blog" class="site-width">
    <h1 class="title">BLOG</h1>
    <div id="content" class="article">
    </div>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      
        <article class="article-item">
          <h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <h3 style="font-size:80%;"><?php echo the_author_meta('nickname'); ?>　<?php the_time("Y年m月j日"); ?>　<?php single_cat_title('カテゴリー: '); ?></h3>
          <p class="article-body">
            <?php the_content(); ?>
          </p>
        </article>

      <?php endwhile; ?>

      <div class="pagenation">
        <ul>
          <li class="prev"><?php previous_post_link('%link', 'PREV'); ?></li>
          <li class="next"><?php next_post_link('%link', 'NEXT'); ?></li>
        </ul>
      </div>

      <!-- Comments -->
      <?php comments_template(); ?>
    <?php else : ?>

      <h2 class="title">記事が見つかりませんでした</h2>
      <p>検索で見つかるかもしれません</p>
      <?php get_search_form(); ?>

    <?php endif; ?>

    <!-- サイドバー -->
    <?php get_sidebar(); ?>
  </section>
</div>

<!-- フッター -->
<?php get_footer(); ?>
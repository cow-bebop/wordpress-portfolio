<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article class="article-item">
      <h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h3 style="font-size: 80%;"><?php the_author_meta('nickname'); ?><?php the_time("Y/m/j") ?>　<?php single_cat_title('カテゴリー') ?></h3>
      <img src="img/photo5.jpeg" class="article-img" alt="">
      <p class="article-body">
        <?php the_content(); ?>
      </p>
    <?php endwhile; ?>

  <?php endif; ?>
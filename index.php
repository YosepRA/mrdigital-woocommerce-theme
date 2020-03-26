<?php get_header(); ?>

<div class="content">
  <div class="container">
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
        <div class="row">
          <div class="col-lg-3"><?php get_sidebar(); ?></div>
          <div class="col-lg-9">
            <a href="<?php the_permalink(); ?>">
              <h1><?php the_title(); ?></h1>
            </a>

            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('small'); ?>" alt="">
            <?php endif; ?>

            <?php the_excerpt(); ?>
          </div>
        </div>
    <?php
      endwhile;
    endif;
    ?>
  </div>
</div>

<?php get_footer(); ?>
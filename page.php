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
            <h1><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('small'); ?>" alt="">
            <?php endif; ?>

            <?php the_content(); ?>
          </div>
        </div>
    <?php
      endwhile;
    endif;
    ?>
  </div>
</div>

<?php get_footer(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <div class="container">
      <div class="row  d-flex justify-content-between align-items-center">
        <div class="col">
          <a href="<?php site_url(); ?>">
            <img src="<?php echo get_template_directory_uri() . '/img/woocommerce-logo.png'; ?>" alt="Woocommerce logo">
          </a>
        </div>
        <div class="col d-flex justify-content-end">
          <?php wp_nav_menu(
            array(
              'theme_location' => 'top-menu',
              'menu_class' => 'top-menu'
            )
          ); ?>
        </div>
      </div>

    </div>
  </header>
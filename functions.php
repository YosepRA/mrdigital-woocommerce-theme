<?php

function load_stylesheets()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

  wp_register_style('style', get_stylesheet_uri(), array(), null, 'all');
  wp_enqueue_style('style');

  wp_register_style('main', get_template_directory_uri() . '/css/main.min.css', array('bootstrap'), null, 'all');
  wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.js');
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), null, true);
  wp_register_script('app', get_template_directory_uri() . '/js/app.js', array(), null, true);
  wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'load_scripts');

function theme_setup()
{
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('post-thumbnails');

  // Image sizes.
  add_image_size('small', 200, 200, false);
}
add_action('after_setup_theme', 'theme_setup');

function register_menus()
{
  register_nav_menus(
    array(
      'top-menu' => __('Top Menu', 'theme')
    )
  );
}
add_action('after_setup_theme', 'register_menus');

register_sidebar(array(
  'name' => 'Page sidebar',
  'id' => 'page-sidebar',
  'class' => '',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

register_sidebar(array(
  'name' => 'Blog sidebar',
  'id' => 'blog-sidebar',
  'class' => '',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

<?php

// Themes functions support
function theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('widgets');
  add_theme_support('menus');
}
add_action('after_setup_theme', 'theme_support');

// Load styles from assets/css
function register_styles()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), false, 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap'), $version, 'all');
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'register_styles');

// Load scripts from assets/js
function register_scripts()
{
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'register_scripts');

// Function to register menu
function register_menu()
{
  register_nav_menus(
    array(
    'nav-menu' => 'Navigation Menu',
    'side-menu' => 'Side Menu',
    'footer-menu' => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'register_menu');


// Function to register sidebars
function sidebar_register_widget()
{
  register_sidebar(
    array(
    'name'          => 'First sidebar',
    'description'   => 'Widget for search',
    'id'            => 'first-sidebar',
    'before_widget' => '<ul>',
    'after_widget'  => '<br></ul>',
  ));
  register_sidebar(
    array(
    'name'          => 'Second sidebar',
    'description'   => 'Widget for pages',
    'id'            => 'second-sidebar',
    'before_widget' => '',
    'after_widget'  => '',
  ));

  register_sidebar(
    array(
    'name'          => 'Thrid sidebar',
    'description'   => 'Widget for archieve',
    'id'            => 'third-sidebar',
    'before_widget' => '',
    'after_widget'  => '',
  ));

  register_sidebar(
    array(
    'name'          => 'Fourth sidebar',
    'description'   => 'Widget for category',
    'id'            => 'fourth-sidebar',
    'before_widget' => '',
    'after_widget'  => '',
  ));

  // Footer widget
  register_sidebar(
    array(
    'name'          => 'First footer',
    'description'   => 'Footer widget for about us information',
    'id'            => 'first-footer',
    'before_widget' => '',
    'after_widget'  => '',

  ));

  register_sidebar(
    array(
    'name'          => 'Second footer',
    'description'   => 'Footer widget for contact information',
    'id'            => 'second-footer',
    'before_widget' => '',
    'after_widget'  => '',

  ));

  register_sidebar(
    array(
    'name'          => 'Third footer',
    'description'   => 'Footer widget for social links',
    'id'            => 'third-footer',
    'before_widget' => '',
    'after_widget'  => '',

  ));
  register_sidebar(
    array(
    'name'          => 'Fourth footer',
    'description'   => 'Footer widget for copyright',
    'id'            => 'fourth-footer',
    'before_widget' => '',
    'after_widget'  => '',

  ));
}
add_action('widgets_init', 'sidebar_register_widget');
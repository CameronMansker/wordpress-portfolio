<?php 

// adding the css and js files

function cm_setup() {
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;
  0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  wp_enqueue_style('fontawesome', '//kit.fontawesome.com/a8cbd25639.js');
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script("top", get_theme_file_uri('/js/backtotop.js'), NULL, '1.0.0', true);
  wp_enqueue_script("slide", get_theme_file_uri('/js/slideshow.js'), NULL, '1.0.0', true);
  wp_enqueue_script("side", get_theme_file_uri('/js/sidebar.js'), NULL, '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'cm_setup');

// Adding Theme support

function cm_init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
  );
}

add_action('after_setup_theme', 'cm_init');

//Projects post type

function cm_custom_post_type() {
  register_post_type('project',
  array(
    'rewrite' => array('slug' => 'projects'),
    'labels' => array(
      'name' => 'Projects',
      'signular_name' => 'Project',
      'add_new_item' => 'Add New Project',
      'edit_item' => 'Edit Project'
    ),
    'menu-icon' => 'dashicons-clipboard',
    'public' => true,
    'has_archive' => true,
     'supports' => array(
      'title', 'thumbnail', 'editor', 'excerpt', 'comments'
    )
  )
    );
}

add_action('init', 'cm_custom_post_type');
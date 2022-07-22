<?php

function lwh_setup()
{
   load_theme_textdomain('lwh');
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
   register_nav_menu('topmenu', __('LWH Menu', 'lwh'));
   add_theme_support('post-formats', array('link', 'image', 'quote', 'video', 'audio'));
   add_theme_support('html5', array('search-form'));
}
add_action('after_setup_theme', 'lwh_setup');

function lwh_assets()
{
   wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), null);
   wp_enqueue_style('template-style', get_template_directory_uri() . '/assets/style.css', [], null);
   wp_enqueue_style('fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', [], null);
   wp_enqueue_style('main', get_stylesheet_uri(), array(), time());

   wp_enqueue_script('template-script', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), time(), true);
}
add_action('wp_enqueue_scripts', 'lwh_assets');

function lwh_widgets()
{
   register_sidebar(array(
      'name'          => __('Single Post Sidebar', 'lwh'),
      'id'            => 'sidebar-1',
      'description'   => __('Widgets in this area will be shown on all posts and pages.', 'lwh'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
   ));
   register_sidebar(array(
      'name'          => __('Footer Copyright', 'lwh'),
      'id'            => 'footer-1',
      'description'   => __('Widgets in this area will be shown on all posts and pages.', 'lwh'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
   ));
}
add_action('widgets_init', 'lwh_widgets');


               
// add class to menu items    
function hello_nav_menu_css_class($classes, $item)
{
   $classes[] = 'nav-item';
   return $classes;
}
add_filter('nav_menu_css_class', 'hello_nav_menu_css_class', 10, 2);


// add class to menu anchors
function add_link_atts($atts) {
   $atts['class'] = "nav-link";
   return $atts;
 }
 add_filter( 'nav_menu_link_attributes', 'add_link_atts');

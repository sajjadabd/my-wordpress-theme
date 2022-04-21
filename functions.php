<?php

function loadcss() {
  wp_register_style( 
    'bootstrap', 
    get_template_directory_uri() . '/css/mystyle.css', 
    array(), // dependencies
    false , // version
    'all' // media
  );
  wp_enqueue_style( 'bootstrap' );

  wp_register_style( 
    'commentForm', 
    get_template_directory_uri() . '/css/commentForm.css', 
    array(), // dependencies
    false , // version
    'all' // media
  );
  wp_enqueue_style( 'commentForm' );

  wp_register_style( 
    'linkStyle', 
    get_template_directory_uri() . '/css/linkStyle.css', 
    array(), // dependencies
    false , // version
    'all' // media
  );
  wp_enqueue_style( 'linkStyle' );
}

add_action( 'wp_enqueue_scripts', 'loadcss' );


function loadjs() {
  wp_enqueue_script( 'jquery' );
  wp_register_script( 
    'code', 
    get_template_directory_uri() . '/js/code.js', 
    array('jquery'), // dependencies
    false, // version
    true // in footer
  );
  wp_enqueue_script( 'code' );
}

add_action( 'wp_enqueue_scripts', 'loadjs' );


add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'search-form' ) );
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'customize-selective-refresh-widgets' );


// Add Woocommerce support
add_theme_support( 'woocommerce' );






// add_theme_support( 'custom-logo', array(
//   'height'      => 100,
//   'width'       => 400,
//   'flex-height' => true,
//   'flex-width'  => true,
//   'header-text' => array( 'site-title', 'site-description' ),
// ) );
// add_theme_support( 'custom-header', array(
//   'height'      => 100,
//   'width'       => 400,
//   'flex-height' => true,
//   'flex-width'  => true,
//   'header-text' => array( 'site-title', 'site-description' ),
// ) );
// add_theme_support( 'custom-background', array(
//   'default-color' => '#ffffff',
//   'default-image' => '',
// ) );



function register_my_menus() {
  register_nav_menus( 
    array(
      'primary_menu' => __( 'Primary Menu', 'text_domain' ),
      'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
    ) 
  );
}
add_action( 'after_setup_theme', 'register_my_menus' );


// Custom Image Sizes
add_image_size( 'small-thumbnail', 180, 120, true );
add_image_size( 'medium-thumbnail', 300, 200, true );
add_image_size( 'large-thumbnail', 600, 400, true );
add_image_size( 'banner-image', 920, 210, true );
add_image_size( 'full-thumbnail', 1200, 800, true );




// Register Sidebars
function my_sidebars() {
  register_sidebar(
    array(
      'id'            => 'pageSidebar',
      'name'          => __( 'Page Sidebar', 'text_domain' ),
      'description'   => __( 'Add widgets here to appear in your sidebar.', 'text_domain' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
    )
  );
  register_sidebar(
    array(
      'id'            => 'blogSidebar',
      'name'          => __( 'Blog Sidebar', 'text_domain' ),
      'description'   => __( 'Add widgets here to appear in your sidebar.', 'text_domain' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
    )
  );
}
add_action( 'widgets_init', 'my_sidebars' );


// Create Custom Post Types
function create_post_type() {
  register_post_type( 'services',
    array(
      'labels' => array(
        'name' => __( 'Services' ),
        'singular_name' => __( 'Service' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'services'),
      'supports' => array( 
        'title', 
        'editor', 
        'thumbnail', 
        'excerpt', 
        'custom-fields', 
        'revisions',
        'page-attributes', 
        'post-formats' ,
        'discussion',
        'comments',
      ),
      //'taxonomies' => array( 'category', 'post_tag' ),
      'menu_icon' => 'dashicons-admin-tools'
    )
  );

  // register category taxonomy for services
  register_taxonomy(
    'service_category',
    'services',
    array(
      'label' => __( 'Service Category' ),
      'rewrite' => array( 'slug' => 'category' ),
      'hierarchical' => false,
    )
  );

  // register tag taxonomy for services
  register_taxonomy(
    'service_tag',
    'services',
    array(
      'label' => __( 'Service Tag' ),
      'rewrite' => array( 'slug' => 'tag' ),
      'hierarchical' => false,
    )
  );

}


add_action( 'init', 'create_post_type' );









?>
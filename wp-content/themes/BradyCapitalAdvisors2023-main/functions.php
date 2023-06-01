<?php
acf_add_options_page(array(
  'page_title'    => 'Theme General Settings',
  'menu_title'    => 'Theme Settings',
  'menu_slug'     => 'theme-general-settings',
  'capability'    => 'edit_posts',
  'redirect'      => false
));
acf_add_options_sub_page(array(
  'page_title'    => 'Theme Header Settings',
  'menu_title'    => 'Header',
  'parent_slug'   => 'theme-general-settings',
));
acf_add_options_sub_page(array(
  'page_title'    => 'Theme Footer Settings',
  'menu_title'    => 'Footer',
  'parent_slug'   => 'theme-general-settings',
));
acf_add_options_page(array(
  'page_title'    => 'Post Settings',
  'menu_title'    => 'Post Settings',
  'menu_slug'     => 'post-settings',
  'capability'    => 'edit_posts',
  'parent_slug'   => 'post.php',
  'position'      => false,
  'icon_url'      => false
));
function my_plugin_assets() {
  wp_enqueue_style('style-css', get_template_directory_uri()."/css/style.css", false);  
  wp_enqueue_style('bootstrapicon-css', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css", false);  
  wp_enqueue_script('app-js', get_template_directory_uri()."/js/app.js", array());
  wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome');
}
add_action( 'wp_enqueue_scripts', 'my_plugin_assets' );

register_nav_menus(
  array('primary-menu'=>'Top Menu'),
);
register_nav_menus(
  array('primary-menu-2'=>'Top Menu 2'),
);
add_theme_support('post-thumbnails');
add_theme_support('custom-header');


function add_my_blocks(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'about',
      'title'=>__( 'About'),
      'description'=>__( 'A custom about template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-center',
      'keywords'=>array('about', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks');
function add_my_blocks_2(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'working',
      'title'=>__( 'working'),
      'description'=>__( 'A custom WORKING WITH US template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'tagcloud',
      'keywords'=>array('working', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_2');


function add_my_blocks_3(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'redirects',
      'title'=>__( 'redirects'),
      'description'=>__( 'A custom redirects template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-left',
      'keywords'=>array('redirects', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_3');

function add_my_blocks_4(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'redirects-2',
      'title'=>__( 'redirects-2'),
      'description'=>__( 'A custom redirects template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-right',
      'keywords'=>array('redirects-2', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_4');

function add_my_blocks_5(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'testimonial',
      'title'=>__( 'testimonial'),
      'description'=>__( 'A custom testimonial template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-center',
      'keywords'=>array('testimonial', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_5');

function add_my_blocks_6(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'whatwedo',
      'title'=>__( 'whatwedo'),
      'description'=>__( 'A custom what we do template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-center',
      'keywords'=>array('whatwedo', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_6');

function add_my_blocks_7(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'subhead',
      'title'=>__( 'subhead'),
      'description'=>__( 'A custom what we do template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-center',
      'keywords'=>array('subhead', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_7');

function add_my_blocks_8(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'borrowers',
      'title'=>__( 'borrowers'),
      'description'=>__( 'A custom borrowers template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-left',
      'keywords'=>array('borrowers', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_8');
    
function add_my_blocks_9(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'lender',
      'title'=>__( 'lender'),
      'description'=>__( 'A custom lender template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-left',
      'keywords'=>array('lender', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_9');

function add_my_blocks_10(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'deals',
      'title'=>__( 'deals'),
      'description'=>__( 'A custom deals template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-left',
      'keywords'=>array('deals', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_10');

function add_my_blocks_11(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'contact',
      'title'=>__( 'contact'),
      'description'=>__( 'A custom contact template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-left',
      'keywords'=>array('contact', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_11');

function add_my_blocks_12(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'aboutsub',
      'title'=>__( 'aboutsub'),
      'description'=>__( 'A custom aboutsub template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-left',
      'keywords'=>array('aboutsub', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_12');

function add_my_blocks_13(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'thefirm',
      'title'=>__( 'thefirm'),
      'description'=>__( 'A custom thefirm template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-left',
      'keywords'=>array('thefirm', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_13');

function add_my_blocks_14(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'bio',
      'title'=>__( 'bio'),
      'description'=>__( 'A custom bio template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-left',
      'keywords'=>array('bio', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_14');

function add_my_blocks_15(){
  if( function_exists('acf_register_block')){
    acf_register_block(array(
      'name'=>'recentdeals',
      'title'=>__( 'recentdeals'),
      'description'=>__( 'A custom recentdeals template for home page'),
      'render_callback'=>'custom_acf_block_render_callback',
      'category'=> 'formatting',
      'icon'=>'align-left',
      'keywords'=>array('recentdeals', 'details')
    ));
  }
}
add_action('acf/init','add_my_blocks_15');

// Send email via SMTP
add_action( 'phpmailer_init', 'my_phpmailer_example' );
function my_phpmailer_example( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = SMTP_HOST;
    $phpmailer->SMTPAuth = SMTP_AUTH;
    $phpmailer->Port = SMTP_PORT;
    $phpmailer->Username = SMTP_USER;
    $phpmailer->Password = SMTP_PASS;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->From = SMTP_FROM;
    $phpmailer->FromName = SMTP_NAME;
}

function custom_acf_block_render_callback($block){
  $slug= str_replace('acf/','',$block['name']);
  if(file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))){
    include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
  }
}
?>
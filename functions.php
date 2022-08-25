<?php
add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 );          //remove dns-prefetch
remove_action('wp_head', 'wp_generator');                   //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link');               //remove wlwmanifest
remove_action('wp_head', 'rsd_link');                       //remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');       //remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical');                  //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10);       //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links');  //remove alternate

// styles
add_action('wp_enqueue_scripts', 'site_styles');
function site_styles () {
    $version = '0.1';
    wp_dequeue_style('wp-block-library');
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/scss/header.css', [], $version);
    wp_enqueue_style('front-page-style', get_template_directory_uri() . '/assets/scss/front-page.css', [], $version);
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/scss/footer.css', [], $version);
    wp_enqueue_style('widget-style', get_template_directory_uri() . '/assets/scss/widget.css', [], $version);
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', $version);
    wp_enqueue_style('slick_theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', $version);
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css', $version);
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/scss/style.css', [], $version);
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/scss/nice-select.css', [], $version);
    wp_enqueue_style('location', get_template_directory_uri() . '/assets/scss/location-page.css', [], $version);
    wp_enqueue_style('whyus', get_template_directory_uri() . '/assets/scss/whyus.css', [], $version);
    wp_enqueue_style('blog', get_template_directory_uri() . '/assets/scss/blog.css', [], $version);
}

// scripts
add_action('wp_enqueue_scripts', 'site_scripts');
function site_scripts() {
    $version = '0.1';
    wp_deregister_script( 'jquery' );
    wp_deregister_script('wp-embed');
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], $version, true);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [], $version, true);
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.min.js', [], $version, true);
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', [], $version, true);
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', ['jquery'], $version, true);
}

function front_page() {
    if (is_front_page()) {
        wp_enqueue_script('what', get_template_directory_uri() . '/assets/js/front-page.js', [], '0.1', true);
    }
}
add_action( 'wp_enqueue_scripts', 'front_page' );

function location_page() {
    if (is_single()) {
        wp_enqueue_script('what', get_template_directory_uri() . '/assets/js/location-page.js', [], '0.1', true);
    }
}
add_action( 'wp_enqueue_scripts', 'location_page' );

function whyus_page() {
    if (is_page_template('page-whyus.php')) {
        wp_enqueue_script('whyus', get_template_directory_uri() . '/assets/js/whyus.js', [], '0.1', true);
    }
}
add_action( 'wp_enqueue_scripts', 'whyus_page' );

function thank_page() {
    if (is_page_template('page-thank.php') || is_page_template('page-soon.php')) {
        wp_enqueue_style('thank', get_template_directory_uri() . '/assets/scss/thank.css', [], '0.1');
    }
}
add_action( 'wp_enqueue_scripts', 'thank_page' );

function ua_support() {
	if (is_page_template('page-ua-support.php')) {
		wp_enqueue_style('thank', get_template_directory_uri() . '/assets/scss/ua-support.css', [], '0.1');
	}
}
add_action( 'wp_enqueue_scripts', 'ua_support' );



// Carbon Fields
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'includes/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields () {
    require_once('includes/carbon-fields-options/theme-options.php');
    require_once('includes/carbon-fields-options/post-meta.php');
}

// Theme support
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support('post-thumbnails');
add_image_size('product', 500, 313, true);
add_image_size('hero_bg', 1920, 900, true);
add_image_size('serve_bg', 978, 659, true);
add_image_size('thumbnail_177x115', 177, 115, true);
add_image_size('thumbnail_484x313', 484, 313, true);
add_image_size('thumbnail_742x538', 742, 538, true);
add_image_size('thumbnail_978x659', 978, 659, true);
add_image_size('thumbnail_942x750', 942, 750, true);

// hide text editor
function disable_content_editor()
{
    if (isset($_GET['post'])) {
        $post_ID = $_GET['post'];
    } else if (isset($_POST['post_ID'])) {
        $post_ID = $_POST['post_ID'];
    }

    if (!isset($post_ID) || empty($post_ID)) {
        return;
    }

    $page_template = get_post_meta($post_ID, '_wp_page_template', true);
    if ($page_template == 'front-page.php'
        || $page_template == 'page-whyus.php'
        || $page_template == 'page-contact.php'
        || $page_template == 'page-find-loc.php'
        || $page_template == 'template-section-based.php'
        || $page_template == 'page-thank.php'
        || $page_template == 'page-ua-support.php') {
        remove_post_type_support('page', 'editor');
    }
}
add_action('admin_init', 'disable_content_editor');

// include the menu etc
add_action( 'after_setup_theme', 'theme_support' );
function theme_support() {
  register_nav_menu( 'header_menu', 'Header menu' );
  register_nav_menu( 'foot_menu', 'Footer menu' );
}

// Locations
add_action( 'init', 'register_post_types' );
function register_post_types() {
  register_post_type('location', [
    'labels' => [
      'name'               => 'Locations',
      'singular_name'      => 'Location',
      'add_new'            => 'Add location',
      'add_new_item'       => 'adding locationа',
      'edit_item'          => 'Editing location',
      'new_item'           => 'New location',
      'view_item'          => 'View location',
      'search_items'       => 'Find location',
      'not_found'          => 'Not find',
      'not_found_in_trash' => 'Not find in the cart',
      'menu_name'          => 'Locations',
    ],
    'menu_icon'          => 'dashicons-location',
    'public'             => true,
    'menu_position'      => 5,
    'supports'           => ['title', 'thumbnail', 'page-attributes'],
    'has_archive'        => true,
    'rewrite'            => ['slug' => 'locations'],
    'numberposts'        => -1
   ] );

// Offers category
   register_taxonomy('location-categories', 'location', [
    'labels'        => [
      'name'                        => 'Location сategories',
      'singular_name'               => 'Location category',
      'search_items'                => 'Search category',
      'popular_items'               => 'Famous categories',
      'all_items'                   => 'All categories',
      'edit_item'                   => 'Change category',
      'update_item'                 => 'Update category',
      'add_new_item'                => 'Add new category',
      'new_item_name'               => 'New category name',
      'separate_items_with_commas'  => 'Separate categories with commas',
      'add_or_remove_items'         => 'Add or remove category',
      'choose_from_most_used'       => 'Choose from most used',
      'menu_name'                   => 'Categories',
    ],
    'hierarchical'  => true,
  ]);
}

// GLOBAL VARIABLES
add_action('init', 'create_global_variable');
function create_global_variable() {
    global $not;
    $not = [
        // site settings
        'book_btn'          => carbon_get_theme_option('book_btn'),
        'social_list'       => carbon_get_theme_option('social_list'),
        'phone_link'        => carbon_get_theme_option('phone_link'),
        'phone_number'      => carbon_get_theme_option('phone_number'),
        'phone_text'        => carbon_get_theme_option('phone_text'),
        'footer_email'      => carbon_get_theme_option('footer_email'),
        'contact_btn'       => carbon_get_theme_option('contact_btn'),
        // fields
        'faq_title'         => carbon_get_theme_option('faq_title'),
        'faq_subtitle'      => carbon_get_theme_option('faq_subtitle'),
        'faq_list'          => carbon_get_theme_option('faq_list'),
        'serve_title'       => carbon_get_theme_option('serve_title'),
        'companies_title'   => carbon_get_theme_option('companies_title'),
        'companies_slider'  => carbon_get_theme_option('companies_slider'),
        'instagram_url'     => carbon_get_theme_option('insta_url'),
        'companies_list'    => carbon_get_theme_option('companies_list'),
        'contact_title'     => carbon_get_theme_option('contact_title'),
        'step_1_title'      => carbon_get_theme_option('step_1_title'),
        'step_2_title'      => carbon_get_theme_option('step_2_title'),
        'step_3_title'      => carbon_get_theme_option('step_3_title'),
        'contact_img'       => carbon_get_theme_option('contact_img'),
    ];
}

// function register_wp_sidebars() {
// 	register_sidebar(
// 		array(
// 			'id' => 'foot',
// 			'name' => 'Footer',
// 			'description' => 'Movw widgets here to add them in footer',
// 			'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
// 			'after_widget' => '</div>',
// 			'before_title' => '<h3 class="widget-title">',
// 			'after_title' => '</h3>'
// 		)
// 	);
// }
// add_action( 'widgets_init', 'register_wp_sidebars' );
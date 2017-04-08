<?php
/**
 * exam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package exam
 */

/**
 * Enqueue scripts and styles.
 */
function exam_scripts() {
    wp_enqueue_style( 'exam-style', get_stylesheet_uri() );
    wp_enqueue_style( 'exam-styles', get_template_directory_uri() . '/css/style.min.css?1');

    wp_enqueue_script( 'exam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'exam-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'exam-all-js', get_template_directory_uri() . '/js/all.min.js');


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'exam_scripts' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function exam_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'exam' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'exam' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'exam' ),
        'id'            => 'sidebar-2',
        'description'   => esc_html__( 'Add widgets here.', 'exam' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'exam' ),
        'id'            => 'sidebar-3',
        'description'   => esc_html__( 'Add widgets here.', 'exam' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => 'footer area 1',
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'delivery' ),
        'before_widget' => '<div class="widget-area">',
        'after_widget'  => '</div>',

        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => 'footer area 2',
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'delivery' ),
        'before_widget' => '<div class="widget-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => 'footer area 3',
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'delivery' ),
        'before_widget' => '<div class="widget-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'exam_widgets_init' );


//logo
add_theme_support( 'custom-logo' );

// thumbnails support
add_theme_support('post-thumbnails');


//field
function hw_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here

//    social links
//    $wp_customize->add_section( 'hw_social_links' , array(
//        'title'      => __( 'Social links', 'hw' ),
//        'priority'   => 30,
//    ) );
//
//    $wp_customize->add_setting( 'social_links_facebook' , array(
//        'default'     => '',
//        'transport'   => 'refresh',
//    ) );
//
//    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_facebook', array(
//        'label'        => __( 'Facebook', 'hw' ),
//        'section'    => 'hw_social_links',
//        'settings'   => 'social_links_facebook',
//    ) ) );
//
//    $wp_customize->add_setting( 'social_links_twitter' , array(
//        'default'     => '',
//        'transport'   => 'refresh',
//    ) );
//
//    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_twitter', array(
//        'label'        => __( 'Twitter', 'hw' ),
//        'section'    => 'hw_social_links',
//        'settings'   => 'social_links_twitter',
//    ) ) );
//
//    $wp_customize->add_setting( 'social_links_google' , array(
//        'default'     => '',
//        'transport'   => 'refresh',
//    ) );
//
//    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_google', array(
//        'label'        => __( 'Google', 'hw' ),
//        'section'    => 'hw_social_links',
//        'settings'   => 'social_links_google',
//    ) ) );
//
//
//    $wp_customize->add_setting( 'social_links_color' , array(
//        'default'     => '',
//        'transport'   => 'refresh',
//    ) );
//
//    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_links_color', array(
//        'label'        => __( 'Social links background color', 'hw' ),
//        'section'    => 'hw_social_links',
//        'settings'   => 'social_links_color',
//    ) ) );

//    sections

    $wp_customize->add_section( 'blog_title' , array(
        'title'      => __( 'Blog title' ),
        'priority'   => 20,
    ) );
    $wp_customize->add_setting( 'title' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'title', array(
        'label' => 'title',
        'section' => 'blog_title',
        'settings'   => 'title',
    ) ) );


//    new section
    $wp_customize->add_section( 'clients_section' , array(
        'title'      => __( 'clients-section' ),
        'priority'   => 20,
    ) );
    $wp_customize->add_setting( 'clients_title' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'clients_title', array(
        'label' => 'Section`s title',
        'section' => 'clients_section',
        'settings'   => 'clients_title',
    ) ) );


//    new section
    $wp_customize->add_section( 'why_us_section' , array(
        'title'      => __( 'Why-us-section' ),
        'priority'   => 20,
    ) );
    $wp_customize->add_setting( 'why_title' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'why_title', array(
        'label' => 'Section`s title',
        'section' => 'why_us_section',
        'settings'   => 'why_title',
    ) ) );



    //    new section
    $wp_customize->add_section( 'services_header' , array(
        'title'      => __( 'services-header' ),
        'priority'   => 20,
    ) );
    $wp_customize->add_setting( 'services_title' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_title', array(
        'label' => 'Section`s title',
        'section' => 'services_header',
        'settings'   => 'services_title',
    ) ) );
    $wp_customize->add_setting( 'services_text' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_text', array(
        'label' => 'Section`s text',
        'section' => 'services_header',
        'settings'   => 'services_text',
    ) ) );


    //    new section
    $wp_customize->add_section( 'portfolio_header' , array(
        'title'      => __( 'portfolio-header' ),
        'priority'   => 20,
    ) );
    $wp_customize->add_setting( 'portfolio_title' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_title', array(
        'label' => 'Section`s title',
        'section' => 'portfolio_header',
        'settings'   => 'portfolio_title',
    ) ) );
    $wp_customize->add_setting( 'portfolio_text' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_text', array(
        'label' => 'Section`s text',
        'section' => 'portfolio_header',
        'settings'   => 'portfolio_text',
    ) ) );


}
add_action( 'customize_register', 'hw_customize_register' );




//SLIDER custom post type-----------------------------------------

function clients_slides() {
    $args = array(
        'label' => 'clients-carousel',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'slides-clients'),
        'query_var' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
    );
    register_post_type( 'slides-clients', $args );
}
add_action( 'init', 'clients_slides' );
//----------------------------------------------------------------------------------


// Creates Movie Reviews Custom Post Type
function services_reviews_init() {
    $args = array(
        'label' => 'Services',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'services-reviews'),
        'query_var' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
    );
    register_post_type( 'services-reviews', $args );
}
add_action( 'init', 'services_reviews_init' );

function works_post_type() {
    $args = array(
        'label' => 'Our works',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'works'),
        'query_var' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
    );
    register_post_type( 'works', $args );
}
add_action( 'init', 'works_post_type' );







//UNDESCORES FUNCTIONS

if ( ! function_exists( 'exam_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function exam_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on exam, use a find and replace
	 * to change 'exam' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'exam', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'exam' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'exam_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'exam_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function exam_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'exam_content_width', 640 );
}
add_action( 'after_setup_theme', 'exam_content_width', 0 );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

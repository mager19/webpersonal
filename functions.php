<?php
/**
 * portafolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package portafolio
 */

if ( ! function_exists( 'portafolio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function portafolio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on portafolio, use a find and replace
		 * to change 'portafolio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'portafolio', get_template_directory() . '/languages' );

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
		add_image_size( 'imagen-front', 450, 300, true );
		add_image_size( 'imagen-trabajos', 450, 500, true);
		add_image_size( 'imagen-cover', 1280, 700, true);
		add_image_size( 'imagen-article', 1280, 450, true);
		add_image_size( 'imagen-acerca', 350, 500, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'portafolio' ),
			'menuSocial' => esc_html__( 'Social', 'portafolio' ),
			'menuSecundario' => esc_html__( 'Secundario', 'portafolio' ),
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
		add_theme_support( 'custom-background', apply_filters( 'portafolio_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Añado soporte de Excerpt en las pages.
		add_post_type_support( 'page', 'excerpt' );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'portafolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portafolio_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'portafolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'portafolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portafolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'portafolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'portafolio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		'class'         => 'sidebar__content',
	) );
}
add_action( 'widgets_init', 'portafolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function portafolio_scripts() {
	wp_enqueue_style( 'portafolio-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );

	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );

	wp_enqueue_style( 'slicktheme', get_template_directory_uri() . '/css/slick-theme.css' );

	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800|Philosopher:400,700i', false );

	wp_enqueue_script( 'portafolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array(), true);

	wp_enqueue_script( 'instafeedjs', get_template_directory_uri() . '/js/instafeed.min.js', array(), true);

	wp_enqueue_script( 'slickjs', get_template_directory_uri() . '/js/slick.min.js', array(), true);

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), true);

	wp_enqueue_script( 'portafolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portafolio_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function wpa_107626_single_template( $single_template ) {
     // check if the post fits some condition
     if ( has_term( 'video', 'tipoContenido' ) ) {
          $single_template = get_stylesheet_directory() . '/single-video.php';
     }
     elseif ( has_term( 'podcast', 'tipoContenido' ) ) {
          $single_template = get_stylesheet_directory() . '/single-podcast.php';
     }
     else 
          $single_template = get_stylesheet_directory() . '/single-article.php';
     
     return $single_template;
}
add_filter( 'single_template', 'wpa_107626_single_template' ) ;
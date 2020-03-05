<?php

/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package revodeals_Starter
 */

if (!function_exists('revodeals_starter_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function revodeals_starter_setup()
    {
        /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
        // load_theme_textdomain( 'wp-bootstrap-starter', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        // add_theme_support( 'automatic-feed-links' );

        /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
        add_theme_support('title-tag');

        /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'wp-bootstrap-starter'),
            'top_menu' => esc_html__('Top Menu', 'wp-bootstrap-starter'),
            'category_menu' => esc_html__('Category Menu', 'wp-bootstrap-starter'),


        ));





        /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
        add_theme_support('html5', array(
            'comment-form',
            'comment-list',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('revodeals_starter_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        function wp_boostrap_starter_add_editor_styles()
        {
            add_editor_style('custom-editor-style.css');
        }
    }
endif;
add_action('after_setup_theme', 'revodeals_starter_setup');




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function revodeals_starter_content_width()
{
    $GLOBALS['content_width'] = apply_filters('revodeals_starter_content_width', 1170);
}
add_action('after_setup_theme', 'revodeals_starter_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function revodeals_starter_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'wp-bootstrap-starter'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer 1', 'wp-bootstrap-starter'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer 2', 'wp-bootstrap-starter'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer 3', 'wp-bootstrap-starter'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'revodeals_starter_widgets_init');


/**
 * Enqueue scripts and styles.
 */
function revodeals_starter_scripts()
{
    // load bootstrap css
    wp_enqueue_style('revodeals-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap');


    wp_enqueue_style('revodeals-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css');
    wp_enqueue_style('revodeals-fontawesome-cdn', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('revodeals-elegant-cdn', get_template_directory_uri() . '/assets/css/elegant-icons.css');

    wp_enqueue_style('revodeals-themify-cdn', get_template_directory_uri() . '/assets/css/themify-icons.css');

    wp_enqueue_style('revodeals-owlcarousel-cdn', 'https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css');
    wp_enqueue_style('revodeals-niceselect-cdn', 'https://cdn.jsdelivr.net/npm/jquery-nice-select@1.1.0/css/nice-select.css');


    wp_enqueue_style('revodeals-jqueryui-cdn', 'http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css');
    wp_enqueue_style('revodeals-slicknav-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css');



    wp_enqueue_style('customstyle',  get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
    //Color Scheme

    wp_enqueue_script('jquery');

    // // Internet Explorer HTML5 support
    // wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

    // load bootstrap js
    wp_enqueue_script('revodeals-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.15.0/dist/umd/popper.min.js', array(), '', true);
    wp_enqueue_script('revodeals-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('revodeals-jqueryui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), '1.0.0', true);
    wp_enqueue_script('revodeals-jquerycountdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array(), '1.0.0', true);
    wp_enqueue_script('revodeals-niceselect', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), '1.0.0', true);
    wp_enqueue_script('revodeals-jqueryzoom', get_template_directory_uri() . '/assets/js/jquery.zoom.min.js', array(), '1.0.0', true);
    wp_enqueue_script('revodeals-jquerydd', get_template_directory_uri() . '/assets/js/jquery.dd.min.js', array(), '1.0.0', true);
    wp_enqueue_script('revodeals-jqueryslicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array(), '1.0.0', true);
    wp_enqueue_script('revodeals-owlcarousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true);
    wp_enqueue_script('revodeals-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'revodeals_starter_scripts');



/**
 * Add Preload for CDN scripts and stylesheet
 */
function revodeals_starter_preload($hints, $relation_type)
{
    $hints[] = [
        'href'        => 'https://cdn.jsdelivr.net/',
        'crossorigin' => 'anonymous',
    ];
    $hints[] = [
        'href'        => 'https://use.fontawesome.com/',
        'crossorigin' => 'anonymous',
    ];

    return $hints;
}

// add_filter('wp_resource_hints', 'revodeals_starter_preload', 10, 2);



function revodeals_starter_password_form()
{
    global $post;
    $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
    $o = '<form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
    <div class="d-block mb-3">' . __("To view this protected post, enter the password below:", "wp-bootstrap-starter") . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __("Password:", "wp-bootstrap-starter") . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__("Submit", "wp-bootstrap-starter") . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
// add_filter('the_password_form', 'revodeals_starter_password_form');



/**
 * Load custom WordPress nav walker.
 */
if (!class_exists('revodeals_navwalker')) {
    require_once(get_template_directory() . '/inc/revodeals_navwalker.php');
}



function revodeals_mini_cart_thumbnail($p)
{
    $image = '';
    $image_url = wp_get_attachment_url($p->get_image_id());
    $image = " <img src='$image_url' style='max-width:80px;'/>";
    return $image;
}

add_filter('woocommerce_custom_thumbnail', 'revodeals_mini_cart_thumbnail');

<?php
class StyleAndScriptCustom {
    public function __construct(){
        $this->init();
    }

    public function init(){
        add_action('wp_enqueue_scripts', [$this, 'my_custom_stylesheets']);
        add_action('wp_enqueue_scripts', [$this, 'my_custom_javascript']);
    }

    public function my_custom_stylesheets() {
        wp_register_style( 'animate', get_stylesheet_directory_uri().'/assets/css/animate.css' );
        wp_enqueue_style( 'animate' );
        wp_register_style( 'owlcarousel', get_stylesheet_directory_uri().'/assets/css/owl.carousel.css' );
        wp_enqueue_style( 'owlcarousel' );
        wp_register_style( 'owltheme', get_stylesheet_directory_uri().'/assets/css/owl.theme.css' );
        wp_enqueue_style( 'owltheme' );
        wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap' );
        wp_register_style( 'hover', get_stylesheet_directory_uri().'/assets/css/hover-min.css' );
        wp_enqueue_style( 'hover' );
        wp_register_style( 'flagicon', get_stylesheet_directory_uri().'/assets/css/flag-icon.min.css' );
        wp_enqueue_style( 'flagicon' );
        wp_register_style( 'style', get_stylesheet_directory_uri().'/assets/css/style.css' );
        wp_enqueue_style( 'style' );
        wp_register_style( 'main', get_stylesheet_directory_uri().'/assets/css/colors/main.css' );
        wp_enqueue_style( 'main' );
        wp_register_style( 'elegant_icon', get_stylesheet_directory_uri().'/assets/css/elegant_icon.css' );
        wp_enqueue_style( 'elegant_icon' );
        wp_register_style( 'fontawesome', get_stylesheet_directory_uri().'/assets/css/fontawesome-all.min.css' );
        wp_enqueue_style( 'fontawesome' );
    }
    
    public function my_custom_javascript() {
        wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/assets/js/jquery-3.2.1.min.js', array(), '', true);
        wp_enqueue_script('stickysidebar', get_stylesheet_directory_uri().'/assets/js/sticky-sidebar.js', array(), '', true);
        wp_enqueue_script('YouTubePopUp', get_stylesheet_directory_uri().'/assets/js/YouTubePopUp.jquery.js', array(), '', true);
        wp_enqueue_script('owlcarousel', get_stylesheet_directory_uri().'/assets/js/owl.carousel.min.js', array(), '', true);
        wp_enqueue_script('imagesloaded', get_stylesheet_directory_uri().'/assets/js/imagesloaded.min.js', array(), '', true);
        wp_enqueue_script('masonry', get_stylesheet_directory_uri().'/assets/js/masonry.min.js', array(), '', true);
        wp_enqueue_script('wow', get_stylesheet_directory_uri().'/assets/js/wow.min.js', array(), '', true);
        wp_enqueue_script('custom', get_stylesheet_directory_uri().'/assets/js/custom.js', array(), '', true);
        wp_enqueue_script('popper', get_stylesheet_directory_uri().'/assets/js/popper.min.js', array(), '', true);
        wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', array(), '', true);
    }
}
<?php 

class ThemeCustom {
    public function __construct(){
        $this->init();
    }

    public function init(){
        add_action('after_setup_theme', [$this, 'theme_prefix_setup']);
        add_action('customize_register', [$this, 'theme_customizer_setting']);

        register_nav_menus(array('social_link' => 'Navigation réseaux sociaux'));
        register_nav_menus(array('footer' => 'Menu footer'));
        register_nav_menus(array('primary' => 'Menu principal'));
    }

    public function theme_customizer_setting($wp_customize) {
        // add a setting 
        $wp_customize->add_setting('footer_logo');
        // Add a control to upload the hover logo
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
            'label' => 'Upload Footer Logo',
            'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
            'settings' => 'footer_logo',
            'priority' => 8 // show it just below the custom-logo
        )));
    }
    
    public function theme_prefix_setup() {
        add_theme_support( 'custom-logo' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_image_size('custom-thumbnail', 1440, 'auto', false);
        add_image_size( 'post-thumbnail', 1400, 0, false );
    }

}
<?php

require get_stylesheet_directory() . '/customizer/options-services.php';
require get_stylesheet_directory() . '/customizer/options-expertise.php';
require get_stylesheet_directory() . '/sections/services.php';
require get_stylesheet_directory() . '/sections/expertise.php';

add_action( 'wp_enqueue_scripts', 'medical_business_chld_thm_parent_css' );
function medical_business_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'medical_business_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );

    if ( is_rtl() ) {
        wp_enqueue_style( 
            'medical_business_parent_rtl', 
            trailingslashit( get_template_directory_uri() ) . 'rtl.css'
        );
    }
    
}

add_action( 'after_setup_theme', 'medical_business_setup_theme' );
function medical_business_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}

add_filter( 'bizberg_sidebar_settings', 'medical_business_sidebar_settings' );
function medical_business_sidebar_settings(){
    return '4';
}

add_filter( 'bizberg_footer_social_links' , 'medical_business_footer_social_links' );
function medical_business_footer_social_links(){
    return [];
}

add_filter( 'bizberg_theme_color', 'medical_business_change_theme_color' );
add_filter( 'bizberg_header_menu_color_hover_sticky_menu', 'medical_business_change_theme_color' );
add_filter( 'bizberg_header_button_color_sticky_menu', 'medical_business_change_theme_color' );
add_filter( 'bizberg_header_button_color_hover_sticky_menu', 'medical_business_change_theme_color' );
add_filter( 'bizberg_transparent_header_menu_color_hover', 'medical_business_change_theme_color' );
add_filter( 'bizberg_transparent_header_sticky_menu_color_hover', 'medical_business_change_theme_color' );
function medical_business_change_theme_color(){
    return '#0088cc';
}

add_filter( 'bizberg_three_col_listing_radius', 'medical_business_three_col_listing_radius' );
function medical_business_three_col_listing_radius(){
    return '0';
}

add_filter( 'bizberg_transparent_header_homepage', 'medical_business_transparent_header_homepage' );
function medical_business_transparent_header_homepage(){
    return true;
}

add_filter( 'bizberg_transparent_navbar_background', 'medical_business_transparent_navbar_background' );
function medical_business_transparent_navbar_background(){
    return 'rgba(10,10,10,0)';
}

add_filter( 'bizberg_header_blur', 'medical_business_header_blur' );
function medical_business_header_blur(){
    return 0;
}

add_filter( 'bizberg_transparent_header_menu_sticky_background', 'medical_business_transparent_header_menu_sticky_background' );
add_filter( 'bizberg_transparent_header_menu_toggle_color_mobile', 'medical_business_transparent_header_menu_sticky_background' );
function medical_business_transparent_header_menu_sticky_background(){
    return '#fff';
}

add_filter( 'bizberg_transparent_header_menu_sticky_text_color', 'medical_business_transparent_header_menu_sticky_text_color' );
function medical_business_transparent_header_menu_sticky_text_color(){
    return '#64686d';
}

add_filter( 'bizberg_banner_spacing', 'medical_business_banner_spacing' );
function medical_business_banner_spacing(){
    return [
        'padding-top'    => '160px',
        'padding-bottom' => '110px',
        'padding-left'   => '0px',
        'padding-right'  => '400px',
    ];
}

add_filter( 'bizberg_banner_image', 'medical_business_banner_image' );
function medical_business_banner_image(){
    return [
        'background-color'      => 'rgba(20,20,20,.8)',
        'background-image'      => get_stylesheet_directory_uri() . '/img/america-american-application-care-caucasian-clinic-1444739-pxhere.com.jpg',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'fixed'
    ];
}

add_filter( 'bizberg_banner_title', 'medical_business_banner_title' );
function medical_business_banner_title(){
    return esc_html__( 'Excellence in health care', 'medical-business' );
}

add_filter( 'bizberg_banner_subtitle', 'medical_business_banner_subtitle' );
function medical_business_banner_subtitle(){
    return esc_html__( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.', 'medical-business' );
}

add_filter( 'bizberg_banner_title_font_status' , 'medical_business_banner_title_font_status' );
function medical_business_banner_title_font_status(){
    return true;
}

add_filter( 'bizberg_banner_title_font_desktop' , 'medical_business_banner_title_font_desktop' );
function medical_business_banner_title_font_desktop(){
    return [
        'font-family'    => 'Poppins',
        'variant'        => '900',
        'font-size'      => '80px',
        'line-height'    => '1',
        'letter-spacing' => '0',
        'text-transform' => 'none'
    ];
}

add_filter( 'bizberg_banner_title_font_tablet' , 'medical_business_banner_title_font_tablet' );
function medical_business_banner_title_font_tablet(){
    return [
        'font-size'      => '70px',
        'line-height'    => '1',
        'letter-spacing' => '0'
    ];
}

add_filter( 'bizberg_banner_title_font_mobile' , 'medical_business_banner_title_font_mobile' );
function medical_business_banner_title_font_mobile(){
    return [
        'font-size'      => '55px',
        'line-height'    => '1',
        'letter-spacing' => '0'
    ];
}

add_filter( 'bizberg_banner_subtitle_font_status' , 'medical_business_banner_subtitle_font_status' );
function medical_business_banner_subtitle_font_status(){
    return true;
}

add_filter( 'bizberg_banner_subtitle_font_settings_desktop' , 'medical_business_banner_subtitle_font_settings_desktop' );
function medical_business_banner_subtitle_font_settings_desktop(){
    return [
        'font-family'    => 'Poppins',
        'variant'        => 'regular',
        'font-size'      => '20px',
        'line-height'    => '1.4',
        'letter-spacing' => '0',
        'text-transform' => 'none'
    ];
}

add_filter( 'bizberg_transparent_header_sticky_menu_toggle_color_mobile' , 'medical_business_transparent_header_sticky_menu_toggle_color_mobile' );
function medical_business_transparent_header_sticky_menu_toggle_color_mobile(){
    return '#434343';
}

add_filter( 'bizberg_site_title_font', 'medical_business_site_title_font' );
function medical_business_site_title_font(){
    return [
        'font-family'    => 'Montserrat',
        'variant'        => '600',
        'font-size'      => '23px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'uppercase',
        'text-align'     => 'left',
    ];
}

add_filter( 'bizberg_site_tagline_font', 'medical_business_site_tagline_font' );
function medical_business_site_tagline_font(){
    return [
        'font-family'    => 'Montserrat',
        'variant'        => '300',
        'font-size'      => '13px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ];
}

add_filter( 'bizberg_background_color_1', 'medical_business_change_top_bar_color' );
add_filter( 'bizberg_background_color_2', 'medical_business_change_top_bar_color' );
function medical_business_change_top_bar_color(){
    return '#0088cc';
}

add_filter( 'bizberg_sidebar_spacing_status', 'medical_business_sidebar_spacing_status' );
function medical_business_sidebar_spacing_status(){
    return '0px';
}

add_filter( 'bizberg_sidebar_widget_border_color', 'medical_business_sidebar_widget_background_color' );
add_filter( 'bizberg_sidebar_widget_background_color', 'medical_business_sidebar_widget_background_color' );
function medical_business_sidebar_widget_background_color(){
    return 'rgba(251,251,251,0)';
}

add_filter( 'bizberg_getting_started_screenshot', 'medical_business_getting_started_screenshot' );
function medical_business_getting_started_screenshot(){
    return true;
}

add_action( 'after_switch_theme', 'medical_business_switch_theme' );
function medical_business_switch_theme() {

    $flag = get_theme_mod( 'medical_business_copy_settings', false );

    if ( true === $flag ) {
        return;
    }

    foreach( Kirki::$fields as $field ) {
        set_theme_mod( $field["settings"],$field["default"] );
    }

    //Set flag
    set_theme_mod( 'medical_business_copy_settings', true );
    
}
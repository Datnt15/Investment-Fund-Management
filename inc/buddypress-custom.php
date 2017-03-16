<?php 


add_action('bp_setup_nav', 'bp_profile_investment_fund', 301 );

function bp_profile_investment_fund() {
    global $bp;
    bp_core_new_nav_item(
        array(
            'name' => 'Investment Fund',
            'slug' => INVESTMENT, 
            'position' => 11, 
            'default_subnav_slug' => 'published', // We add this submenu item below 
            'screen_function' => 'render_investment_fund_page'
        )
    );

    bp_core_new_nav_item(
        array(
            'name' => 'Portfolios',
            'slug' => PORTFOLIOS, 
            'position' => 11, 
            'default_subnav_slug' => INVESTMENT, // We add this submenu item below 
            'screen_function' => 'render_portfolios_page'
        )
    );
}

function render_investment_fund_page(){
    add_action( 'bp_template_content', 'investment_fund_page' );
    bp_core_load_template( apply_filters( 'bp_core_template_plugin', 'members/single/plugins' ) );
}

function render_portfolios_page(){
    add_action( 'bp_template_content', 'portfolios_page_content' );
    bp_core_load_template( apply_filters( 'bp_core_template_plugin', 'members/single/plugins' ) );
}

function investment_fund_page() { 
    $uid = bp_displayed_user_id();
    
    $is_author = $uid == get_current_user_id();
    require TEMPLATE.'investment_fund_page.php';
}


function portfolios_page_content() { 
    $uid = bp_displayed_user_id();
    require TEMPLATE.'portfolios_page.php';
}
//buddypress cover size

function bb_cover_image( $settings = array() ) {
    $settings['width']  = 1200;
    $settings['height'] = 300;
    return $settings;
}

add_filter( 'bp_before_xprofile_cover_image_settings_parse_args', 'bb_cover_image', 10, 1 );
add_filter( 'bp_before_groups_cover_image_settings_parse_args', 'bb_cover_image', 10, 1 );


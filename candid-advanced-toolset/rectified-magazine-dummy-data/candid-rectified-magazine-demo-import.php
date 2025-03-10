<?php
/**
 * Demo Data of Refined Magazine.
 *
 * @package Candid Advanced Toolkit
 */
/*Disable PT branding.*/
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
/**
 * Demo Data files.
 *
 * @since 1.0.0
 *
 * @return array Files.
 */
function candid_advanced_toolset_import_files() {
    return array(
    array(
        'import_file_name'=> __('Default Demo','candid-advanced-toolset'),
        'categories'      =>  array( 'Free Demos' ),
        'local_import_file'=> plugin_dir_path( __FILE__ ). 'demo-files/default/rectified-default.xml',
        'local_import_widget_file' =>  plugin_dir_path( __FILE__ ) . 'demo-files/default/rectified-default.wie',
        'local_import_customizer_file' =>  plugin_dir_path( __FILE__ ) . 'demo-files/default/rectified-default.dat',
        'import_preview_image_url'   => 'https://raw.githubusercontent.com/candidtheme/refined-magazine-demos/master/default.jpg',
        'import_notice'              => __( 'Import the demo and check the options inside Appearance > Customize.', 'candid-advanced-toolset' ),
        'preview_url'                => 'https://demo.candidthemes.com/rectified-magazine/',
    ),
);

}
add_filter( 'pt-ocdi/import_files', 'candid_advanced_toolset_import_files' );

/**
 * Demo Data after import.
 *
 * @since 1.0.0
 */

function candid_advanced_toolset_after_import_setup() { 

    $primary_menu   = get_term_by('name', 'Primary', 'nav_menu');
    $header_menu    = get_term_by('name', 'Top', 'nav_menu');
    $social_menu    = get_term_by('name', 'Social', 'nav_menu');

        set_theme_mod(
            'nav_menu_locations',
            array(
                    'menu-1'     => $primary_menu->term_id,
                    'top-menu'  => $header_menu->term_id,
                    'social-menu' => $social_menu->term_id,
            )
        );
    
    }
add_action( 'pt-ocdi/after_import', 'candid_advanced_toolset_after_import_setup' );
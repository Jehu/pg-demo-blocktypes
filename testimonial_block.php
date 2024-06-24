<?php
/**
 * Plugin Name:       Testimonial Block
 * Plugin URI: https://example.com/plugins/the-basics/
 * Description: Describe what the plugin does.
 * Version: 0.58
 * Requires at least: 5.5
 * Requires PHP: 5.3
 * Author: John Smith
 * Author URI: https://author.example.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI: https://example.com/my-plugin/
 * Text Domain: testimonial_block
 * Domain Path: /languages
*/

 

if ( ! function_exists( 'testimonial_block_plugin_base_url' ) ) :
 
function testimonial_block_plugin_base_url() {
    global $testimonial_block_plugin_base_url_value;
    if(empty($testimonial_block_plugin_base_url_value)) {
        $testimonial_block_plugin_base_url_value = untrailingslashit( plugin_dir_url( __FILE__ ) );
    }
    return $testimonial_block_plugin_base_url_value;
}

endif;

if ( ! function_exists( 'testimonial_block_plugin_base_path' ) ) :
 
function testimonial_block_plugin_base_path() {
    global $testimonial_block_plugin_base_path_value;
    if(empty($testimonial_block_plugin_base_path_value)) {
        $testimonial_block_plugin_base_path_value = untrailingslashit( plugin_dir_path(  __FILE__ ) );
    }
    return $testimonial_block_plugin_base_path_value;
}

endif;
 
if ( ! function_exists( 'testimonial_block_setup' ) ) :

function testimonial_block_setup() {

    testimonial_block_plugin_base_url();
    /*
     * Make the plugin available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_plugin_textdomain( 'testimonial_block', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    /*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
    /*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
}
endif; // testimonial_block_setup

add_action( 'after_setup_theme', 'testimonial_block_setup' );


if ( ! function_exists( 'testimonial_block_init' ) ) :

function testimonial_block_init() {

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // testimonial_block_setup

add_action( 'init', 'testimonial_block_init' );


if ( ! function_exists( 'testimonial_block_custom_image_sizes_names' ) ) :

function testimonial_block_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'testimonial_block_custom_image_sizes_names' );
endif;// testimonial_block_custom_image_sizes_names


if ( ! function_exists( 'testimonial_block_widgets_init' ) ) :

function testimonial_block_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'testimonial_block_widgets_init' );
endif;// testimonial_block_widgets_init



if ( ! function_exists( 'testimonial_block_customize_register' ) ) :

function testimonial_block_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'testimonial_block_customize_register' );
endif;// testimonial_block_customize_register


if ( ! function_exists( 'testimonial_block_enqueue_scripts' ) ) :
    function testimonial_block_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'testimonial_block_enqueue_scripts' );
endif;

if ( ! function_exists( 'testimonial_block_pgwp_sanitize_placeholder' ) ) :
    function testimonial_block_pgwp_sanitize_placeholder($input) { return $input; }
endif;

    /*
     * Resource files included by Pinegrow.
     */
    /* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }
if( !class_exists( 'PG_Blocks_v2' ) ) { require_once "inc/wp_pg_blocks_helpers.php"; }

    /* Pinegrow generated Include Resources End */

/* Creating Editor Blocks with ACF PRO */

function testimonial_block_acf_blocks_init() {

    // Check if ACF PRO function exists.
    if( function_exists('acf_register_block_type') ) :

        // Register blocks. Don't edit anything between the following comments.
        /* Pinegrow generated Register Blocks Begin */

        acf_register_block_type( array(
            'name' => 'testimonial-block/testimonial-acf',
            'title' => __( 'Testimonial - ACF', 'testimonial_block' ),
            'category' => 'testimonial_blocks',
            'enqueue_style' => testimonial_block_plugin_base_url() . '/css/block_testimonial.css',
            'render_template' => testimonial_block_plugin_base_path() . '/blocks/testimonial-acf/testimonial-acf.php',
            'supports' => array(),
            'base_url' => testimonial_block_plugin_base_url(),
            'base_path' => testimonial_block_plugin_base_path()
        ) );

    /* Pinegrow generated Register Blocks End */
    endif;
}
add_action('acf/init', 'testimonial_block_acf_blocks_init');

/* End of creating Editor Blocks with ACF PRO */


/* Creating Editor Blocks with Pinegrow */

if ( ! function_exists('testimonial_block_blocks_init') ) :
function testimonial_block_blocks_init() {
    // Register blocks. Don't edit anything between the following comments.
    /* Pinegrow generated Register Pinegrow Blocks Begin */
    require_once 'blocks/testimonial-dynamic/testimonial-dynamic_register.php';
    require_once 'blocks/testimonial-regular/testimonial-regular_register.php';
    require_once 'blocks/testimonial-hybrid/testimonial-hybrid_register.php';

    /* Pinegrow generated Register Pinegrow Blocks End */
}
add_action('init', 'testimonial_block_blocks_init');
endif;

/* End of creating Editor Blocks with Pinegrow */


/* Register Blocks Categories */

function testimonial_block_register_blocks_categories( $categories ) {

    // Don't edit anything between the following comments.
    /* Pinegrow generated Register Blocks Category Begin */

$categories = array_merge( $categories, array( array(
        'slug' => 'testimonial_blocks',
        'title' => __( 'Testimonial Blocks', 'testimonial_block' )
    ) ) );

    /* Pinegrow generated Register Blocks Category End */
    
    return $categories;
}
add_action( version_compare('5.8', get_bloginfo('version'), '<=' ) ? 'block_categories_all' : 'block_categories', 'testimonial_block_register_blocks_categories');

/* End of registering Blocks Categories */

?>
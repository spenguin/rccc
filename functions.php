<?php
/**
 * Rain City Comicon! functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RCCC
 */

namespace Core;

// Useful global constants

define( 'CORE_URL', get_stylesheet_directory_uri() );
define( 'CORE_TEMPLATE_URL', get_template_directory_uri() ); 
define( 'CORE_PATH', dirname( __FILE__ ). '/' ); 
define( 'CORE_INC', CORE_PATH . 'includes/' );
define( 'CORE_PLUGINS_PATH', plugins_url() );
define( 'CORE_WIDGET', CORE_INC . 'widgets/' );
define( 'CORE_SHORTCODE', CORE_INC . 'shortcodes/' );
define( 'CORE_VENDOR', CORE_PATH . 'vendor/' );
define( 'CORE_DIST', CORE_URL . '/js/dist/' );
define( 'CORE_JS', CORE_URL . '/js/' );

require_once CORE_INC . 'blank-slate.php';
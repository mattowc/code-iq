<?php
/*** Theme setup ***/
//load_textdomain( 'templatic', TEMPLATEPATH.'/en_US.mo' );

define('TT_ADMIN_FOLDER_NAME','admin');
define('TT_ADMIN_FOLDER_PATH',TEMPLATEPATH.'/'.TT_ADMIN_FOLDER_NAME.'/'); //admin folder path

if(file_exists(TT_ADMIN_FOLDER_PATH . 'constants.php')){
include_once(TT_ADMIN_FOLDER_PATH.'constants.php');  //ALL CONSTANTS FILE INTEGRATOR
}

if(file_exists(TT_FUNCTIONS_FOLDER_PATH . 'custom_filters.php')){
include_once (TT_FUNCTIONS_FOLDER_PATH . 'custom_filters.php'); // manage theme filters in the file
}

if(file_exists(TT_FUNCTIONS_FOLDER_PATH . 'widgets.php')){
include_once (TT_FUNCTIONS_FOLDER_PATH . 'widgets.php'); // theme widgets in the file
}

// Theme admin functions
include_once (TT_FUNCTIONS_FOLDER_PATH . 'custom_functions.php');

include_once(TT_ADMIN_FOLDER_PATH.'admin_main.php');  //ALL ADMIN FILE INTEGRATOR

if(file_exists(TT_WIDGET_FOLDER_PATH . 'widgets_main.php')){
include_once (TT_WIDGET_FOLDER_PATH . 'widgets_main.php'); // Theme admin WIDGET functions
}

if(file_exists(TT_MODULES_FOLDER_PATH . 'modules_main.php')){
include_once (TT_MODULES_FOLDER_PATH . 'modules_main.php'); // Theme moduels include file
}

include_once(TT_ADMIN_FOLDER_PATH.'auto_update_framework.php');  //FRAMEWORK AUTO UPDATE LINK
if(file_exists(TT_INCLUDES_FOLDER_PATH . 'auto_install/auto_install.php')){
include_once (TT_INCLUDES_FOLDER_PATH . 'auto_install/auto_install.php'); // sample data insert file
}

/**
 * Adds height gracefully to the form, I will be enqueueing a light jQuery that will require a valid number
 *
 * By Jonathon McDonald :: 09/28/2012
 */

// Hook into add the field to billing
add_filter( 'woocommerce_checkout_fields' , 'jon_add_custom_checkout_fields' );
 
// Our hooked in function - $fields is passed via the filter!
function jon_add_custom_checkout_fields( $fields ) {
     $fields['billing']['billing_height'] = array(
        'label'     => __('Height', 'woocommerce'),
    'placeholder'   => _x('Height', 'placeholder', 'woocommerce'),
    'required'  => true,
    'class'     => array('form-row-first'),
    'clear'     => true
     );
 
     return $fields;
}

add_action('wp_enqueue_scripts', 'jon_jquery_modal');

function jon_jquery_modal()
{
	wp_enqueue_script(
		'simplemodal',
		get_template_directory_uri() . '/js/jquery.simplemodal-1.4.3.js',
		array('jquery')
	);

	wp_enqueue_script(
		'jonmodal',
		get_template_directory_uri() . '/js/jon-modal.js',
		array('jquery'));
}
?>
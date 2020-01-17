<?php

// Load the TGM init if it exists
if ( file_exists( dirname( __FILE__ ) . '/tgm/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/tgm/init.php';
}

// Load the embedded Redux Framework
if ( file_exists( dirname( __FILE__ ) . '/redux-framework/framework.php' ) ) {
	require_once dirname( __FILE__ ) . '/redux-framework/framework.php';
}

// Load the theme/plugin options
if ( file_exists( dirname( __FILE__ ) . '/options.php' ) ) {
	require_once dirname( __FILE__ ) . '/options.php';
}

//helper function to grab theme options - to not break legacy users that are upgrading
function get_atelie_theme_options() {

    $legacy_options = get_option('atelie');
    $current_options = get_option('atelie_redux');

    //use new options
    if (!empty($current_options)) {
        return $current_options;
    } else if (!empty($legacy_options)) {
        return $legacy_options;
    } else {
        return $current_options;
    }
}
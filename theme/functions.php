<?php

// /*------------------------------------*\
// 	defines
// \*------------------------------------*/
$GLOBALS['vbSettings'] 		= 3334; //id from page settings
$GLOBALS['themePath'] 		= get_theme_file_path();
$GLOBALS['themeCssPath'] 	= get_stylesheet_directory_uri();
$GLOBALS['WP_ENV'] 	        = WP_ENV;
// /*------------------------------------*\
// 	Functions
// \*------------------------------------*/
add_filter('show_admin_bar', '__return_false');
require  $GLOBALS['themePath'].'/inc/functions/cleanup.php';
require  $GLOBALS['themePath'].'/inc/functions/admin_look.php';
require  $GLOBALS['themePath'].'/inc/functions/element-support.php';
require  $GLOBALS['themePath'].'/inc/functions/acfToJson.php';
require  $GLOBALS['themePath'].'/inc/functions/custom-post-type.php';
require  $GLOBALS['themePath'].'/inc/functions/widgets.php';
require  $GLOBALS['themePath'].'/inc/functions/boostrap.php';
require  $GLOBALS['themePath'].'/inc/functions/menuNav.php';
//require  $GLOBALS['themePath'].'/inc/functions/custom-menutab.php';
//require  $GLOBALS['themePath'].'/inc/functions/dashboad-menu.php';


// \*--------------css an js -----------------*/
 require  $GLOBALS['themePath'].'/inc/functions/enqueue.php';





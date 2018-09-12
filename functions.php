<?php 
    //class which can create menu's 
   require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

 function wpb_theme_setup(){
     
        register_nav_menus( array(
	'primary' => __('Primary Menu', 'Assesment 2'),
) );
        
 }

add_action('after_setup_theme', 'wpb_theme_setup');


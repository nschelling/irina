<?php
/*
Plugin Name: json_export
Plugin URI: http://abbas-sanjrani.com/sanjrani/wordpress-plugin
Description: This plugin is used to export content type data in json format
Version: 1.0
Author: abbas sanjrani
Author URI: http://abbas-sanjrani.com
License: GPLv2 or later
*/
add_action( 'admin_menu', 'json_export_register_my_custom_menu_page' );

function json_export_register_my_custom_menu_page(){
    add_menu_page( 'Abbas creation', 'Export by Json', 'manage_options', 'json_export/json_export_output.php', '', plugins_url( 'json_export/images/icon.png' ), 6 );
}


?>
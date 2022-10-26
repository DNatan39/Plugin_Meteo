<?php
/*
Plugin Name: Météo
Plugin URI: 
Description: En cours de maintenance !
Version: 0.1
Author: Natan DAVID
Author URI: natandavid.fr
License: GPLv2
*/
// coucou comment vas-tu ?
defined('ABSPATH') or die('Oups !');

function MyPluginMenu(){
    add_menu_page(
        'Météo', // Page Title
        'Météo', // Menu Title
        'manage_options', // Capabiliy
        plugin_dir_path(__FILE__)  .'includes/page.php'
    );
}

add_action('admin_menu','MyPluginMenu');


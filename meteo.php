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

defined('ABSPATH') or die('Oups !');

inclure_once('model/config.php');

$database = new dbConnect();

function MyPluginMenu(){
    add_menu_page(
        'Météo', // Page Title
        'Météo', // Menu Title
        'manage_options', // Capabiliy
        plugin_dir_path(__FILE__)  .'templates/page.php'
    );
}

add_action('admin_menu','MyPluginMenu');


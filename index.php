<?php
/**
 * Plugin Name: SC Simple SEO
 * Plugin URI: https://profiles.wordpress.org/sergiuscosta
 * Description: A very simple SEO plugin
 * Version: 2.1
 * Author: Sergio Costa
 * Author URI: http://republicainterativa.com.br/
 * Text Domain: scseo
 * License: GPLv2 or later
 */

require_once 'functions/settings-init.php';
require_once 'functions/fields.php';
require_once 'functions/head.php';
require_once 'functions/google.php';

add_action( 'admin_enqueue_scripts', 'sc_seo_assets' );
function sc_seo_assets($hook) {
    wp_register_style('sc_seo_bootstrap', plugins_url('css/sc-seo-bootstrap.css',__FILE__));
    wp_enqueue_style('sc_seo_bootstrap');
}

?>

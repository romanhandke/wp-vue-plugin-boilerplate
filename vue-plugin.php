<?php

/**
 * Vue Plugin Boilerplate
 *
 * @package   vue-plugin
 * @author    roman handke
 * @license   GPL-3.0+
 *
 * Plugin Name:   Vue Plugin Boilerplate
 * Description:   A basic Boilerplate to create a Plugin using Vue.JS
 * Version:       1.0
 * Author:        Roman Handke
 * Text Domain:   vue-plugin
 * Domain Path:   /languages
 * License:       GPL-3.0+
 * License URI:   http://www.gnu.org/license/gpl-3.0.txt
 */

defined( 'ABSPATH' ) or die();

/**
 * Require the composer autoloader
 */
if (file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' )) {
  require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * Initialize all services
 */
if (class_exists( 'Inc\\Init' )) {
  Inc\Init::registerServices();
}

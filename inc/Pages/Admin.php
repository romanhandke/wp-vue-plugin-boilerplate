<?php

namespace Inc\Pages;

use Inc\Base\BaseController;

/**
 * Class Admin
 *
 * Create a vue app on an admin page
 *
 * @author roman handke
 */
class Admin extends BaseController
{
  /**
   * Register Method
   *
   * called after Initialization by Init.php
   *
   * @return void
   */
  public function register()
  {
    # As an example we will add a submenu page of the woocommere
    # admin section and create the div that vue will attach to
    add_action( 'admin_menu', [ $this, 'createSubmenuPage' ] );

    # then we enqueue the corresponging javascript at the bottom of the html
    add_action( 'admin_enqueue_scripts', [ $this, 'enqueueVueApp' ] );
  }


  /**
   * Create a Submenu Page
   *
   * @return void
   */
  public function createSubmenuPage()
  {
    add_submenu_page( 
      'woocommerce',
      'Vue Plugin',
      'Vue Plugin',
      'manage_options',
      'vue-plugin',
      [ $this, 'createVueElement' ]
    );
  }
  
  /**
   * Callback to create the Element Vue will attach to
   *
   * @return void
   */
  public function createVueElement()
  {
    echo '<div id="admin-app"></div>';
  }
  
  /**
   * Add the Vue.JS at the bottom of the html
   *
   * @return void
   */
  public function enqueueVueApp()
  {
    wp_register_script( 'vue-admin-js', $this->plugin_path . 'dist/app.js', [], false, true );
    wp_enqueue_script( 'vue-admin-js' );
  }
  
  
}

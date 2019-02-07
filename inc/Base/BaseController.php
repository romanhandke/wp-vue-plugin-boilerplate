<?php

namespace Inc\Base;

/**
 * Class BaseController
 *
 * Used to store Infos about the Plugin
 *
 * @author roman handke
 */
abstract class BaseController
{
  /**
   * Plugin Path
   *
   * @var string
   */
  protected $plugin_path;

  /**
   * Plugin Url
   *
   * @var string
   */
  protected $plugin_url;

  /**
   * Plugin Name
   *
   * @var string
   */
  protected $plugin;

  /**
   * Constructor
   *
   * @return void
   */
  public function __construct()
  {
    $this->plugin_url    = plugin_dir_path( dirname( __FILE__, 2 ) );
    $this->plugin_path   = plugin_dir_url( dirname( __FILE__, 2 ) );
    $this->plugin        = plugin_basename( dirname( __FILE__, 3) . '/vue-plugin.php' );
  }
  
}

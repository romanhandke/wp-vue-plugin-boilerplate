<?php

namespace Inc;

/**
 * Class Init
 *
 * Initialize all services
 *
 * @author roman handke
 */
final class Init
{

  /**
   * Create an array of classes that should be initialized
   *
   * Any class that has to be instantiated in order to be used
   * by the plugin can simply be added to this array
   *
   * @return  array   Full list of classes
   */
  public static function getServices()
  {
    return [
      Pages\Admin::class,
    ];
  }

  /**
   * Loop through the classes, instantiate them,
   * and call the register method if it exists
   */
  public static function registerServices()
  {
    foreach (self::getServices() as $class) {
      $service = self::instantiate( $class );
      if (method_exists( $service, 'register' )) {
        $service->register();
      }
    }
  }

  /**
   * Instantiate a class
   *
   * @param   class $class    Class from the services array
   * @return  object $service New instance of the class
   */
  public static function instantiate( $class )
  {
    $service = new $class();

    return $service;
  }

}

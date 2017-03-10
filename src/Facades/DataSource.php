<?php

namespace LaravelArab\DataSource\Facades;

use Illuminate\Support\Facades\Facade;

class DataSource extends Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return 'datasource';
  }
}

<?php

namespace HynekS;

use Faker\Provider\Base;

class AdministrativeUnitsCzechRepublic extends Base
{
  protected static $regions = [];

  /**
   * Regions are extracted to a separate file (it's more than 70k LOC one!)
   */
  public static function get_regions() {
    if(self::$regions === []) {
        self::$regions = require "administrative_units.php";
    }
    return self::$regions;
}
 
  public function hierarchy()
  {
    $random_region = static::randomElement(static::get_regions());
    
    $random_district = static::randomElement($random_region["districts"]);

    $random_municipality = static::randomElement($random_district["municipalities"]);

    $random_cadastral_territory = static::randomElement($random_municipality["cadastral_territories"]);

    return ["region" => $random_region["name"], "district" => $random_district["name"], "municipality" => $random_municipality["name"], "cadastral_territory" => $random_cadastral_territory["name"]];
    

  }
}


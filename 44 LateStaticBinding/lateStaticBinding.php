<?php

class CountryProductSale
{
  static public $totalSale = 1000;
  function getTotalSale()
  {
    echo static::$totalSale;
  }

   function getAreaName(){
    static::areaName();
   }
  static function areaName(){
    echo "India";
  }
}

class CityProductSale extends CountryProductSale
{
  static public $totalSale = 50;
  // function getTotalSale(){
  //  echo self::$totalSale;
  // }

   static function areaName(){
    echo "Nodia";
  }
}
$cityProductSale = new CityProductSale();
$cityProductSale->getAreaName();
?>
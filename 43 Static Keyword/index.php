<?php

class Honda{

static public $countryName = "Japan";
   static function CompanyName(){
        echo"Honda";
    }
}

// $honda = new Honda();
Honda::CompanyName();
echo"<br>".Honda::$countryName;
?>
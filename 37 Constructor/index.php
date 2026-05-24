<?php

class Constructor
{
    public $name;
    function __construct($name)
    {
        //   echo "Hello";
        $this->name = $name;
    }
    function displayName()
    {
        echo $this->name;
    }
}
$cd = new Constructor("Ram");
$cd->displayName();
?>
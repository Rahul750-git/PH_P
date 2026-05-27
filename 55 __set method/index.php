<?php 

class Fruit{

private $age = 30;
   function __set($pro, $value) {
    if (property_exists($this,$pro)) {
        $this->$pro = $value;
        }
        else{
            echo "No";
        }
//     echo "$pro this property can not set with $value";
    }
   function getName() {
    echo $this->age;
   }
}
$fruit = new Fruit();
// $fruit->name="Ram";
$fruit->getName("");
echo"<br>";
$fruit->age = 35;
echo "<br>";
$fruit->getName();
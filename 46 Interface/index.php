<?php

interface ProductFeatures
{
    function image();
    function product();
    function ownerDetails();
}
class Products implements ProductFeatures
{
    function image()
    {
        echo "Product Image";
    }


    function product()
    {
        echo "The Product is Apple";
    }
    function ownerDetails()
    {
        echo "the owner is a good person";
    }

}
$upload = new Products();
$upload->ownerDetails();
echo"<br>";
$upload->image();
echo"<br>";
$upload->product();

?>
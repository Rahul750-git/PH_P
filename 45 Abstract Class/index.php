<?php

abstract class ProductFeature
{
    abstract function productDetails();
    abstract function productImage();
    abstract function productOwnerDetails();
}
class UploadProduct extends ProductFeature
{
    function productDetails()
    {
        echo "This is a sugar Packet. ";
    }

    function productImage()
    {
        echo "This is a Image for sugar. ";
    }
    function productOwnerDetails()
    {
        echo "The Owner is the Good person. ";
    }
}
$upload = new UploadProduct();
$upload->productOwnerDetails();
$upload->productImage();
$upload->productDetails();

?>
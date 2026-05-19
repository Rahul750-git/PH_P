<?php

setcookie("fruit","grapes", time()+(86400),"/");

if (isset($_COOKIE["fruit"])) {
    echo "Current cookie is : ".$_COOKIE["fruit"];
}
else {
    echo"Cookie is not avaliable";
}
?>
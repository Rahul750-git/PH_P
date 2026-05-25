<?php

// final class Honda{

// }
// class Cars extends Honda{

// }
// $c = new Cars();

class Honda{
 final  function companyName(){
    echo"Honda";
  }
}
class Cars extends Honda{
//   function companyName(){
//     echo"Honda City";
//   }
}

$c = new Cars();
$c->companyName();
?>
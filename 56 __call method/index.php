<?php
class Students
{
    function __call($method, $args)
    {
        //    echo"$method method not found";
        //    echo"<br>";
        //    print_r($args); 
        if (method_exists($this, $method)) {
            // echo " $method  is private method";
            call_user_func_array([$this, $method],$args);
        } else {
            echo "$method  method not ";
        }
    }
    
   private function getName($name){
      echo  "user name is $name";
    }
}

$student = new Students();
$student->getName("Shyam", "Ram", "Mohan");

?>
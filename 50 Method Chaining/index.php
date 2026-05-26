<?php 

class Company{
    function getName(){
        echo"This is Honda Motors <br> ";
        return $this;
    }

    
    function getEmp(){
        echo"Honda has 30000 Employees.   ";
        return $this;
    }

    function getTotalOffice(){
        echo "Honda has 200 Offices";
    }
}
$c1 = new Company();
$c1->getName()->getEmp()->getTotalOffice();
?>
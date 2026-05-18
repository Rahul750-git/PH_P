<?php
echo "Welcome to Multi-Dimensional Array";
echo "<br>";

//Multi-Dimensional
$multiDim = array(
    array(2, 3, 7, 8),
    array(1, 2, 3, 1),
    array(4, 5, 0, 1)
);
// echo var_dump($multiDim);
 //printing a multi-dimensional array
for ($i = 0; $i < count($multiDim); $i++) {
    for ($j=0; $j < count($multiDim[$i]) ; $j++) {
        echo $multiDim[$i][$j] ;
        echo " ";
        
    }
    echo'<br>';
}
 echo'<br>';
 echo 'Three dimensional';
 echo'<br>';
// three - dimensional array
$threeDim = array(
    array(
    array(2, 3, 7, 8),
    array(1, 2, 3, 1),
    array(4, 5, 0, 1))
);
for ($i = 0; $i < count($threeDim); $i++) {
    for ($j=0; $j < count($threeDim[$i]) ; $j++) {
       for ($m=0; $m < count($threeDim[$i][$j]); $m++) { 
        echo $threeDim[$i][$j][$m] ;
        echo " ";
       }
       echo "<br>";
        
    }
    echo'<br>';
}
    ?>
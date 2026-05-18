<?php
// String Functions in PHP
$name = "Ram is a good boy";
echo $name;
echo"<br>";


//length function in php strings ko concat kar na haa to dot(.) use kar na haa
echo"The length of string is " . strlen($name);
echo"<br>";


// str_word_count function word ko count kar taa haa
echo str_word_count( $name);
echo"<br>";

//strrev string ko reverse karne kaa kaam kar ta hai
echo strrev( $name );
echo"<br>";

// string me search karne kaa kaam kar taa hai
echo strpos($name,"good");
echo"<br>";
  

// str_replace word ko replace karta haa
echo str_replace("Ram","Shyam", $name);
echo"<br>";

//str_repeat string ko repeat kar ta hai
echo str_repeat( $name, 20);
echo "<br>";

//rtrim function right se space remove karta hai
echo "<pre>";
echo "<br>";
echo rtrim( "    Ram is a student    " );
echo "<br>";


// ltrim left side se space remove karta hai
echo ltrim( "    Ram is a student    " );
echo "</pre>";
echo"<br>";


?> 
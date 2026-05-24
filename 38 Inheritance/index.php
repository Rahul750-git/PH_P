<?php


class UserAuth
{
    function login($username)
    {
        echo " $username logged in done";
    }
}
class Students extends UserAuth
{

}
class Teachers extends UserAuth
{

}

$s1 = new Students();
$s1->login("Student");
echo "<br>";
$t1 = new Teachers();
$t1->login("Teacher");
?>
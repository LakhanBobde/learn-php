<?php
//header('Location: ./dashboard.php');
// var_dump($_POST);
$user = $_POST['user'];
$pass = $_POST['pass'];

echo"User name is " .$user ;
echo"<br/>User password " .$pass;

if($user == "lakhan" && $pass == "qwerty")
{
    echo"<br>login successful";
}
else
{
     echo"<br>login failed";
}
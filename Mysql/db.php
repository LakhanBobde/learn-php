<?php

 $connection= mysqli_connect('localhost','root','','working');

if($connection){
    echo"WE are connected to database";
} else{
    die("We are not connected to database");
}
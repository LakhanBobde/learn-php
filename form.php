<?php 
if(isset($_POST['btn']))
{
    $name = array("Maria","Jain","Tom");
    $minimum = 5;
    $maximum = 10;
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    //echo "Welcome " . $username;
    //echo "<br>Your password " . $password;

    if(strlen($username)< $minimum)
    {
        echo "<br>Username is longer than five ";
    }
    if(strlen($username)> $maximum)
    {
        echo "<br>Username is longer than ten ";
    }

    if(in_array($username,$name)){
        echo "Sorry you are not allowed!";
    } else{
        echo "Welcome";
    }


}
?>
<form action="./form.php" method="post">
<input type ="text" name="username" placeholder="Enter the Name"><br>
<input type ="password" name="password" placeholder="Enter the Password">
<br>
<input type="Submit" name="btn">
</form>
<?php 
if(isset($_POST['btn']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
}
?>
<form action="form.php" method="post">
<input type ="text" name="username"placeholder="Enter the Name">
<input type ="password" name="password" placeholder="Enter the Password">
<br>
<input type="Submit" name="btn">
</form>
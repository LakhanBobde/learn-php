
<?php  include "db.php";?>
 <?include "functions.php"; ?>
<?php
 if(isset($_POST['submit'])){

     $username = $_POST['username'];
     $password = $_POST['password'];
     $id=$_POST['id'];

    $query = "UPDATE users SET ";
     $query .= "username ='$username' , ";
     $query .= "password = '$password' WHERE id = $id ";
      
     $result= mysqli_query($connection, $query);
     if(!$result){
          die("Query Mistake" .mysqli_error($connection));
     }
     
 }
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">

        <div class="col-sm-6">
         <form action="login.php" method="post">
              <div class="form-group">
              <label for="username">Username</label>
                   <input type="text" name="username" class="form-control">
              </div>
              <div class="form-group">
              <label for="password">Password</label>
                   <input type="password" name="password" class="form-control">
              </div>

              <div class="form-group">
                    <select name="" id="">
                    <?php 
                      showAllData();
                    ?>
                 </select>
              </div>
              <input class="btn btn-primary" type="submit" name="submit" value="Update">
            </form>
         </div>
    </div>
</body>
</html>
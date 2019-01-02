<?php include "db.php";?>
<?php
function updatetable(){
     global $connection;
      $username = $_POST['username'];
      $password = $_POST['password'];
      $id = $_POST['id'];
 
     $query = "UPDATE users SET ";
      $query .= "username ='$username', ";
      $query .= "password = '$password' WHERE id = $id ";
       
      $result= mysqli_query($connection, $query);
      if(!$result){
           die("Query Mistake" .mysqli_error($connection));
      } else{
         echo "update Data";
      }  
   }
function deletetable(){
   global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

   $query = "DELETE FROM users ";
    $query .= " WHERE username ='$username', ";
    $query .= "password = '$password' id = $id ";
     
    $result= mysqli_query($connection, $query);
    if(!$result){
         die("Query Mistake" .mysqli_error($connection));
    } else{
       echo "delete data";
    }  
}
function createRows(){
   global $connection;
if(isset($_POST['submit'])){
    $username=  $_POST['username'];
    $password= $_POST['password'];

    // include data without distriction
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);

   // encript password
    $hashFormat = '$2y$10$';
    $salt= 'iusesomecrazystrings22';
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password,$hashF_and_salt);
  
    //Insert data
    $query= "INSERT INTO users (username,password) VALUES('$username','$password')";
     $result= mysqli_query($connection, $query);
     if(!$result){
        die('Query mistake' .mysqli_error($connection));
     }else{
        echo "Record Created";
     }
   }
}
   function showAllData(){
      global $connection;
     $query = "SELECT * FROM users";
     $result= mysqli_query($connection, $query);
     if(!$result){
        die('Query mistake' .mysqli_error($connection));
     }
     

     while($row = mysqli_fetch_assoc($result)){
             $id = $row['id'];
            echo "<option value = '$id'> $id </option>";
         }
    }

?>
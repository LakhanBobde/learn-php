<?php include "db.php";?>

<?php
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

<?php include "db.php";
     
     $query= "SELECT * FROM users";
     $result= mysqli_query($connection, $query);
     if(!$result){
        die('Query mistake' .mysqli_error($connection));
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
            
         </div>
    </div>
</body>
</html>

<?php  include "db.php";?>
<?php include "functions.php"; ?>
<?php 
if(isset($_POST['submit'])){
deletetable(); 
}
?>
 <?php include "includes/header.php" ?>
        <h2 class ="text-center">DELETE TABLE</h1>
         <form action="delete.php" method="post">
         <?php include "includes/midpage.php" ?>

              <div class="form-group">
                    <select name="id" id="">
                    <?php 
                      showAllData();
                    ?>
                 </select>
              </div>
              <input class="btn btn-primary" type="submit" name="submit" value="Delete">
            </form>
            <?php include "includes/footer.php" ?>
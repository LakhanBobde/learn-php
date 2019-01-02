<?php include "db.php";?>
<?php include "functions.php" ?>
<?php createRows();?>
<?php include "includes/header.php" ?>
        <h1 class="text-center">Create</h1>
        <form action="create.php" method="post">
        <?php include "includes/midpage.php"?>
              <input class="btn btn-primary" type="submit" name="submit" value="Create">
            </form>
            <?php include "includes/footer.php" ?>
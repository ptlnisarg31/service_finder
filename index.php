<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Minute maintanunce</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <style>

    </style>
</head>

<body>

    <?php
    include 'include/header.php';
    ?>


    <section class="food-bg">
        <div class="container">
            <br><br><br>
          
        </div>
        <?php
        include 'include/search.php';
        ?>
        <?php
        include 'include/services-mini.php';

        ?>

        <?php
        include 'include/minicategories.php';

        ?>
        <?php
        include 'include/footer.php';
        ?>
      

</body>

</html>
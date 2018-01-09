<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */
include "database/header.php";
include "database/session.php";
?>




<head>
<link href="css/database.css" rel="stylesheet" type="text/css">
</head>
<body>
<a href="admin_index.php">
    <img src="img/logo.png" alt="logo" class="img">
</a>
<div class="header" id="myHeader1">
    <h2>Change Page</h2>
</div>

<form method="post" enctype="multipart/form-data">
    <strong>Tile Name: </strong>
    <input type="text" name="tile_name" id="tile_name"><br>

    <strong>Tile Size: </strong>
    <input type="text" name="tile_size" id="tile_size"><br>

    <strong>Tile Image: </strong>
    <input type="file" name="tile_image" id="tile_size"><br>


    <input type="submit" name="submit" id="Submit">
</form>
<?php
if (isset($_POST['submit']))
{

    require "database/config.php";


    try
    {



        $tilename = $_POST["tile_name"];
        $tilesize= $_POST["tile_size"];
        $image = $_FILES['tile_image']['tmp_name'];
        $tile_image = addslashes(file_get_contents($image));

        #Preparing the image








        $sql = "INSERT INTO tiles(`tile_name`,`tile_size`,`tile_image`)
VALUES ('$tilename','$tilesize','$tile_image')";
        $statement = mysqli_prepare($conn,$sql);
        mysqli_query($conn,$sql);
    }


    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }


} ?>
<?php
if (isset($_POST['submit']))
{ ?>
    <blockquote><?php echo $_POST['tile_name']; ?> successfully added.</blockquote>
    <?php
} ?>

<a href="catalog.php">Back to Home</a>

<?php include "database/footer.php" ?>


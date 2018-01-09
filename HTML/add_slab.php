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
    <label for="slab_type">Slab Type: </label>
    <input type="text" name="slab_type" id="slab_type">
    <label for="slab_title">Slab Title: </label>
    <input type="text" name="slab_title" id="slab_title">
    <label for="slab_lot">Slab Lot: </label>
    <input type="text" name="slab_lot" id="slab_lot">

    <label for="slab_lot">Slab Dimension: </label>
    <input type="text" name="slab_dimension" id="slab_dimension">

    <label for="slab_lot">Slab Thickness: </label>
    <input type="text" name="slab_thickness" id="slab_thickness">

    <label for="slab_image">Slab Image: (MUST BE JPEG!)</label>
    <input type="file" name="slab_image" id="slab_image">
    <input type="submit" name="submit" id="Submit">
</form>

<a href="catalog.php">Back to Home</a>
<?php
if (isset($_POST['submit']))
{

    require "database/config.php";


    try
    {



        $slabtype = strtoupper($_POST["slab_type"]);
        $slabtitle= $_POST["slab_title"];
        $slablot = $_POST["slab_lot"];
        $slabdimension = strtoupper($_POST["slab_dimension"]);
        $slabthickness =strtoupper($_POST["slab_thickness"]);
        $image = $_FILES['slab_image']['tmp_name'];
        $slabimage = addslashes(file_get_contents($image));
        #Preparing the image








        $sql = "INSERT INTO slabs(`slab_type`, `slab_title`, `slab_lot`,`slab_dimension`,`slab_thickness`,`slab_image`)
VALUES ('$slabtype','$slabtitle','$slablot', '$slabdimension', '$slabthickness', '$slabimage')";
        $statement = mysqli_prepare($conn,$sql);
        mysqli_query($conn,$sql);
    }


    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }


} ?>
<?php
if (isset($_POST['submit']) )
{ ?>
    <blockquote><?php echo $_POST['slab_title']; ?> successfully added.</blockquote>
    <?php
} ?>


<?php include "database/footer.php" ?>


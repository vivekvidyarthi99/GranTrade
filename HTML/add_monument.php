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
    <title>
        Add Monument
    </title>
<link href="css/database.css" rel="stylesheet" type="text/css">
</head>
<body>
<a href="admin_index.php">
    <img src="img/logo.png" alt="logo" class="img">
</a>
<div class="header" id="myHeader1">
    <h2>Change Page</h2>
</div>



<?php
if (isset($_POST['submit']))
{

    require "database/config.php";


    try
    {



        $monumentname = $_POST["monument_name"];
        $image = $_FILES['monument_image']['tmp_name'];
        $monumentimage = addslashes(file_get_contents($image));


        #Preparing the image








        $sql = "INSERT INTO monuments(`monument_name`,`monument_image`)
VALUES ('$monumentname','$monumentimage')";
        $statement = mysqli_prepare($conn,$sql);
        mysqli_query($conn,$sql);
    }


    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }


} ?>



<?php
if (isset($_POST['submit']) && $statement)
{ ?>
    <blockquote><?php echo $_POST['monument_name']; ?> successfully added.</blockquote>
    <?php
} ?>


<form method="post" enctype="multipart/form-data">
    <strong>Monument Name:</strong>
    <input type="text" name="monument_name" id="monument_name"/><br>
    <strong>Monument Image:</strong>
    <input type="file" name="monument_image" id="monument_image"><br>


    <input type="submit" name="submit" id="Submit">
</form>

<a href="catalog.php">Back to Home</a>

<?php include "database/footer.php" ?>


<?php
include 'database/session.php';
include 'database/header.php';
include 'database/config.php';

$id = $_GET['id'];




$sql = "SELECT * FROM tiles WHERE id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


?>
<?php
if (isset($_POST['Submit'])) {

    $id = $_GET['id'];

    $tile_name = htmlspecialchars($_POST['tile_name']);
    $tile_size = strtoupper(htmlspecialchars($_POST['tile_size']));


    $row['tile_name'] = strtoupper($tile_name);
    $row['tile_size'] = strtoupper($tile_size);
    $image = $_FILES['tile_image']['tmp_name'];

    if($image ==null){
        $tile_image=null;
    }
    else {

        $tile_image = addslashes(file_get_contents($image));
    }


    if($image==null){

        mysqli_query($conn,
            "UPDATE tiles SET tile_name ='$tile_name', tile_size ='$tile_size' Where id = '$id'");
        echo "Tile with ID:", $id, " changed successfully";
    } else {


        mysqli_query($conn,
            "UPDATE tiles SET tile_name ='$tile_name', tile_size ='$tile_size' , tile_image='$tile_image'Where id = '$id'");
        echo "Tile with ID:", $id, " changed successfully";
    }

}
?>
<head>
    <link href="css/database.css" rel="stylesheet" type="text/css">
</head>
<body>
<a href="admin_index.php">
    <img src="img/logo.png" alt="logo" class="img">
</a>
<div class="header" id="myHeader1">
    <h2>Edit</h2>
</div>

<form enctype="multipart/form-data" action="" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <div>
        <p><strong>ID:</strong><?php echo $id; ?></p>

        <strong>Tile Title: </strong> <input type="text" name="tile_name" value="<?php echo $row['tile_name']; ?>"/><br/>

        <strong>Tile Size: </strong> <input type="text" name="tile_size" value="<?php echo $row['tile_size']; ?>"/><br/>
        <strong>Tile Image: </strong> <input type="file" name="tile_image" value=""/><br/>
        <strong>Current Image: </strong>

        <?php
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['tile_image']).'"/>';
        ?>

        <input type="submit" name="Submit" value="Submit">


    </div>
</form>

<p><a href="catalog.php">View Items</a> </p>
<p><a href="admin_index.php">Home</a> </p>

<?php
include 'database/footer.php';
?>

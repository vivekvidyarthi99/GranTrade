<?php
include 'database/session.php';
include 'database/header.php';
include 'database/config.php';

$id = $_GET['id'];




$sql = "SELECT * FROM slabs WHERE id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);






?>
<?php
if (isset($_POST['Submit'])) {

    $id = $_GET['id'];

    $slab_title = htmlspecialchars($_POST['slab_title']);
    $slab_type = strtoupper(htmlspecialchars($_POST['slab_type']));
    $slab_lot = strtoupper(htmlspecialchars($_POST['slab_lot']));
    $slab_dimension = strtoupper(htmlspecialchars($_POST['slab_dimension']));
    $slab_thickness = strtoupper(htmlspecialchars($_POST['slab_thickness']));

    $row['slab_type'] = strtoupper($slab_type);
    $row['slab_title'] = $slab_title;
    $row['slab_lot'] = strtoupper($slab_lot);
    $row['slab_dimension'] = strtoupper($slab_dimension);
    $row['slab_thickness'] = strtoupper($slab_thickness);
    $image = $_FILES['slab_image']['tmp_name'];

    if($image==null){
        $slabimage=null;
    } else {
        $slabimage = addslashes(file_get_contents($image));
    };
    if($slabimage == null){
        mysqli_query($conn,
            "UPDATE slabs 
SET slab_type='$slab_type', slab_title ='$slab_title', slab_lot='$slab_lot', slab_dimension='$slab_dimension', slab_thickness='$slab_thickness'
 Where id = '$id'");
        echo "Item with ID:", $id, " changed successfully";

    } else {
        mysqli_query($conn,
            "UPDATE slabs 
SET slab_type='$slab_type', slab_title ='$slab_title', slab_lot='$slab_lot', slab_dimension='$slab_dimension', slab_thickness='$slab_thickness', slab_image='$slabimage'
 Where id = '$id'");
        echo "Item with ID:", $id, " changed successfully";
    };


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

        <strong>Slab Title: </strong> <input type="text" name="slab_title" value="<?php echo $row['slab_title']; ?>"/><br/>

        <strong>Slab Type: </strong> <input type="text" name="slab_type" value="<?php echo $row['slab_type']; ?>"/><br/>
        <strong>Slab Lot Number: </strong> <input type="text" name="slab_lot" value="<?php echo $row['slab_lot']; ?>"/><br/>
        <strong>Slab Dimension: </strong> <input type="text" name="slab_dimension" value="<?php echo $row['slab_dimension']; ?>"/><br/>
        <strong>Slab Thickness: </strong> <input type="text" name="slab_thickness" value="<?php echo $row['slab_thickness']; ?>"/><br/>
        <strong>Slab Image: (MUST BE JPEG!)</strong> <input type="file" name="slab_image" value=""/><br/>
        <p>Current Image: </p>

        <?php
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['slab_image']).'"/>';
        ?>



        <input type="submit" name="Submit" value="Submit">



    </div>
</form>

<p><a href="catalog.php">View Items</a> </p>
<p><a href="admin_index.php">Home</a> </p>

<?php
include 'database/footer.php';
?>

<?php
include 'database/session.php';
include 'database/header.php';
include 'database/config.php';

$id = $_GET['id'];




$sql = "SELECT * FROM monuments WHERE id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

?>
<?php
if (isset($_POST['Submit'])) {

    $id = $_GET['id'];

    $monument_name = htmlspecialchars($_POST['monument_name']);



    $row['monument_name'] = $monument_name;
    $image = $_FILES['monument_image']['tmp_name'];
    if($image == null){
        $monumentimage= null;
    }else {
        $monumentimage= addslashes(file_get_contents($image));
    }
    if($image==null){
        mysqli_query($conn,
            "UPDATE monuments SET  monument_name='$monument_name' Where id = '$id'");
        echo "Monument with ID:", $id, " changed successfully";

    }else{
        mysqli_query($conn,
            "UPDATE monuments SET  monument_name='$monument_name', monument_image='$monumentimage' Where id = '$id'");
        echo "Monument with ID:", $id, " changed successfully";

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

        <strong>Monument Title: </strong> <input type="text" name="monument_name" value="<?php echo $row['monument_name']; ?>"/><br/>
        <strong>Monument Image: </strong> <input type="file" name="monument_image" value=""/><br/>
        <strong>Current Image: (MUST BE JPEG!) </strong>
        <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['monument_image']).'"/>';?>




        <input type="submit" name="Submit" value="Submit">


    </div>
</form>

<p><a href="catalog.php">View Items</a> </p>
<p><a href="admin_index.php">Home</a> </p>

<?php
include 'database/footer.php';
?>

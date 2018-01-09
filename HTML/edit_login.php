<?php
include 'database/header.php';
include 'database/config.php';
include "database/session.php";
$myusername = $_GET['username'];




$sql = "SELECT * FROM login";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

?>

<?php
if (isset($_POST['Submit']))
{

    $myusername = $_GET['username'];

    $newusername = htmlspecialchars($_POST['newusername']);
    $newpass = htmlspecialchars($_POST['newpassword']);



    mysqli_query($conn,
        "UPDATE login SET username='$newusername', password='$newpass'");
    echo "Login Changed Successfully";


};
?>
<link href="css/database.css" rel="stylesheet" type="text/css">
<a href="admin_index.php">
    <img src="img/logo.png" alt="logo" class="img">
</a>
<div class="header" id="myHeader">
    <h2>Edit Login Page</h2>
</div>
<p>Edit Login</p>

<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <div>
        <p><strong>Username:</strong><?php echo $myusername; ?></p>

        <strong>Username: </strong> <input type="text" name="newusername" value="<?php echo $row['username']; ?>"/><br/>

        <strong>Password: </strong> <input type="text" name="newpassword" value="<?php echo $row['password']; ?>"/><br/>
        <input type="submit" name="Submit" value="Submit">


    </div>
</form>

<p><a href="login_change.php">View Login</a> </p>
<p><a href="admin_index.php">Home</a> </p>

<?php
include 'database/footer.php';
?>



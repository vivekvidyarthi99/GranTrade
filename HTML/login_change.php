<?php
/**
 * Created by PhpStorm.
 * User: VivekXPS
 * Date: 1/2/2018
 * Time: 12:54 AM
 */
include "database/config.php";
include "database/session.php";
include "database/header.php";
$sql = "SELECT * FROM login";
$result = mysqli_query($conn,$sql);

?>
<link href="css/database.css" rel="stylesheet" type="text/css">
<a href="admin_index.php">
    <img src="img/logo.png" alt="logo" class="img">
</a>
<div class="header" id="myHeader">
    <h2>Change Login Page</h2>
</div>
<h1>Change Login</h1>
<h2>
    <?php
    echo "<table>";
    echo "<style> table, th, td {border: 1px solid black</style>";
    echo "<p><b>View All</b></p>";
    echo "<tr> <th>Username</th> <th>Password</th> <th></th></tr>";
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        echo "<tr>";

        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['password'] . '</td>';


        echo '<td><a href="edit_login.php?username=' . $row['username'] . '">Edit</a></td>';
        echo "</tr>";
    }
    echo "</table>";
    ?>
</h2>



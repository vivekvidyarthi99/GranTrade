<?php
/**
 * Created by PhpStorm.
 * User: VivekXPS
 * Date: 1/2/2018
 * Time: 12:28 AM
 */
include "database/header.php";
include "database/config.php";
include "database/session.php";
?>
<link href="css/database.css" rel="stylesheet" type="text/css">
<a href="admin_index.php">
    <img src="img/logo.png" alt="logo" class="img">
</a>
<div class="header" id="myHeader">
    <h2>Administration Page</h2>
</div>
<h2><div style="text-align: center";>Menu</div></h2>
<h1><div style="text-align: center";><a href="catalog.php">Catalog</a></div></h1>
<h1><div style="text-align: center";><a href="login_change.php">Edit Login</a></div></h1>
<h1><div style="text-align: center";><a href="logout.php">Logout</a></div></h1>

<?php
include "database/footer.php";
?>

<?php

include "database/config.php";


include "database/header.php";
include "database/session.php";
$sql = "SELECT * FROM slabs";
$sql2 = "SELECT * FROM tiles";
$sql3 ="SELECT * FROM monuments";
$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql2);
$result3 = mysqli_query($conn,$sql3);

?>
<link href="css/database.css" rel="stylesheet" type="text/css">
<a href="admin_index.php">
    <img src="img/logo.png" alt="logo" class="img">
</a>
<div class="header" id="myHeader">
    <h2>Catalog Page</h2>
</div>
<?php
echo "<table class='table'>";
echo "<h1>Slabs</h1>";
echo "<style> table, th, td {border: 1px solid black</style>";
echo "<tr> <th>ID</th> <th>Slab Type</th> <th>Slab Title</th> <th>Slab Lot</th><th>Slab Dimensions</th><th>Slab Thickness</th><th></th><th></th></tr>";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    echo "<tr>";

    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['slab_type'] . '</td>';
    echo '<td>' . $row['slab_title'] . '</td>';
    echo '<td>' . $row['slab_lot'] . '</td>';
    echo '<td>' . $row['slab_dimension'] . '</td>';
    echo '<td>' . $row['slab_thickness'] . '</td>';

    echo '<td><a href="edit_slab.php?id=' . $row['id'] . '">Edit</a></td>';
    echo '<td><a href="slabs_delete.php?id=' . $row['id'] . '">Delete</a></td>';
    echo "</tr>";
}
echo "</table>";
?>
<p><a href="add_slab.php">Add Slab</a></p>
<?php
echo "<table>";

echo "<h1>Tiles</h1>";
echo "<tr> <th>ID</th> <th>Title</th> <th>Size</th><th></th><th></th></tr>";
while($row = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
    echo "<tr>";

    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['tile_name'] . '</td>';
    echo '<td>' . $row['tile_size'] . '</td>';

    echo '<td><a href="edit_tiles.php?id=' . $row['id'] . '">Edit</a></td>';
    echo '<td><a href="tiles_delete.php?id=' . $row['id'] . '">Delete</a></td>';
    echo "</tr>";
}
echo "</table>";
echo "<table>";
?>
<p><a href="add_tile.php">Add Tile</a></p>
<?php
echo "<h1>Monuments</h1>";
echo "<tr> <th>ID</th> <th>Title</th> <th></th><th></th></tr>";
while($row = mysqli_fetch_array($result3,MYSQLI_ASSOC)) {
    echo "<tr>";

    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['monument_name'] . '</td>';


    echo '<td><a href="edit_monuments.php?id=' . $row['id'] . '">Edit</a></td>';
    echo '<td><a href="monument_delete.php?id=' . $row['id'] . '">Delete</a></td>';
    echo "</tr>";
}
echo "</table>";



?>



<p><a href="add_monument.php">Add Monument</a></p>

<p><a href="admin_index.php">Home</a></p>


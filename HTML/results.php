<?php
include "database/config.php";
$search_Result = $_GET['search'];


$sql="SELECT * FROM slabs WHERE slab_title= '$search_Result'";

$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    echo $row['slab_title'];
    echo "<br>";
    echo $row['slab_lot'];
    echo "<br>";
    echo $row['slab_thickness'];
}

?>
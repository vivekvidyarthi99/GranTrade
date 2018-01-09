<?php
/**
 * Created by PhpStorm.
 * User: VivekXPS
 * Date: 12/30/2017
 * Time: 11:18 AM
 */
include 'database/header.php';
include 'database/config.php';



if (isset($_GET['id']) && is_numeric($_GET['id']))
{
    $id = $_GET['id'];
    $result = mysqli_query($conn, "DELETE FROM tiles WHERE id ='$id'");
    {
        header("Location: catalog.php");
    }
}
?>
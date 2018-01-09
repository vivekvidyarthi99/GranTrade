<?php
/**
 * Created by PhpStorm.
 * User: VivekXPS
 * Date: 1/1/2018
 * Time: 11:49 PM
 */


include "config.php";
session_start();
$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($conn,
    "SELECT username FROM login WHERE username = '$user_check'");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['username'];
if(!isset($_SESSION['login_user'])){
    header("Location:login_page.php");
}
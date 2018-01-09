<?php
/**
 * Created by PhpStorm.
 * User: VivekXPS
 * Date: 1/2/2018
 * Time: 12:31 AM
 */

session_start();
if(session_destroy()){
    header("Location: login_page.php");
}
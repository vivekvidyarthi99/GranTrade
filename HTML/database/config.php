<?php
/**
 * Created by PhpStorm.
 * User: VivekXPS
 * Date: 1/1/2018
 * Time: 11:39 PM
 */

/**
 * These are the configurations for connecting onto the database
 * The following is the login and databases
 */

$host="grantrade.fatcowmysql.com";
$username="mohan";
$password="mohan123";
$database = "gt_database";

$conn = new mysqli($host,$username,$password,$database);


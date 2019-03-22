<?php
/**
 * Created by PhpStorm.
 * User: 1810356
 * Date: 18/02/2019
 * Time: 11:58
 */
$servername = "webapp-mysqldbserver-a3945a4f-33720";
$dbname="mysqldatabase17428";
$userdb = "mysqldbuser";
$passdb = "Molly_199123";
// Create connection
$conn = new mysqli($servername, $userdb, $passdb, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
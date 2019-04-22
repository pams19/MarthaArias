<?php
/**
 * Created by PhpStorm.
 * User: 1810356
 * Date: 18/02/2019
 * Time: 11:58
 */
$servername = "localhost";
$dbname="martha";
$userdb = "root";
$passdb = "";
// Create connection
$conn = new mysqli($servername, $userdb, $passdb, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
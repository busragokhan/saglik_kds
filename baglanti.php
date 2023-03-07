<?php
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "kds_sube";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$conn) {
    echo "Connection failed!";
}

$conn->set_charset("utf8");
?>


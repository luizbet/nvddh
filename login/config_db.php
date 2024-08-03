<?php
$servername = "154.49.247.59";
$database = "nvddh_db";
$username = "nvddh_db_dev";
$password = "Anvddh11071903#";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>  
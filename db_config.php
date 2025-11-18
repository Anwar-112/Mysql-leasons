<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "anwar";

$db = new mysqli($host, $user, $password, $database);

if ($db->connect_error){
    die("Connection Failed: " . $db->connect_error);
}

//echo "connected successfully";

?>

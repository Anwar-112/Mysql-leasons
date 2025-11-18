<?php 

    // $host = "localhost";
    // $user = "root";
    // $password = "";
    // $db = "anwar2";

    // $conn= new mysqli($host,$user,$password,$db);
    // if ($conn->connect_error){
    //     die("Connection Failed:" . $conn->connect_error);
    // }
    // echo "connected successfully";
    // $conn->close();

?>


<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "anwar2";

$db = new mysqli($host, $user, $password, $database);

if ($db->connect_error){
    die("Connection Failed: " . $db->connect_error);
}

//echo "connected successfully";

?>

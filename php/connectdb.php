<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db2";
$conn = "";

$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if($conn){
    echo"";
}
else{
    echo"Cound not connect!";
}
?>
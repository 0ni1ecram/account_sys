<?php

$host = "2a02:4780:bad:c0de::14";
$user = " id21127280_root";
$pass = "Oni1ecram@riwa";
$dbname ="id21127280_log_acc";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(! $conn){
    echo "There is a problem";
} else {
    echo "Connected successfully";
}


?>
<?php
//Develop Database connection
// $conn = mysqli_connect("localhost","root","","iscool_db");

// if(!$conn) {
//     die("connection failed.");
// }


// Remote databas connection
$server = "remotemysql.com";
$user = "P4jnEZCmC2";
$pass = "k06odNjtc7";
$db = "P4jnEZCmC2";
$conn = mysqli_connect($server, $user, $pass, $db);

if(!$conn) {
    die("connection failed.");
}
// else{
//     echo "connection Ok";
// }

?>
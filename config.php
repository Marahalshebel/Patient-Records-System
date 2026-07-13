<?php

$host = "sql109.infinityfree.com";
$username = "if0_42403268";
$password = "D4m668uxkCoQHqF";
$database = "if0_42403268_patients";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bekary_store";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) { die("koneksi gagal: ".
$conn->connect_error);}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project_monitoring";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

//mengecek koneksi
if (!$conn) {
	die("koneksi gagal: " .mysqli_connect_error());
}

 ?>
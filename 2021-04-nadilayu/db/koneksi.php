<?php
$servername = "localhost";
$username 	= "root";
$password 	= "";
$database 	= "2021-04-nadilayu-laundry";

// Create connection
$koneksi = new mysqli($servername, $username, $password, $database);

// Check connection
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

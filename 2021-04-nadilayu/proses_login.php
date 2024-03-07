<?php 
	session_start();
	include 'db/koneksi.php';

 	// code...
 
	// menangkap data yang dikirim dari form
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	// menyeleksi data admin dengan username dan password yang sesuai
	$sql = "SELECT * FROM user where username='$username' and pasword='$password'";
	$result = $koneksi->query($sql);
	if ($result->num_rows > 0) {
  	// output data of each row
  			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			header("location:admin/index.php");
  		
  	
	} else {
		header('location:login.php');
	}
	$koneksi->close();
	
?>
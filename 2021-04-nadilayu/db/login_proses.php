

<?php 
	session_start();
	include 'koneksi.php';

 	// code...
 
	// menangkap data yang dikirim dari form
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	// menyeleksi data admin dengan username dan password yang sesuai
	$sql = "SELECT * FROM user where username='$username' and password=md5('$password')";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
  		if ($row['role'] == "admin") {
  			$_SESSION['username'] = $username;
				$_SESSION['role'] = "admin";
				header("location:admin/index.php");
  		}elseif ($row['role'] == "kasir") {
  			$_SESSION['username'] = $username;
				$_SESSION['role'] = "kasir";
				header("location:kasir/index.php");
  		}elseif ($row['role'] == "owner") {
            $_SESSION['username'] = $username;
              $_SESSION['role'] = "owner";
              header("location:owner/index.php");
        }else{
				header("location:index.php?pesan=gagal");
  		}
  	}
	} else {
		header("location:index.php?pesan=gagal");
	}
	$conn->close();
	
?>
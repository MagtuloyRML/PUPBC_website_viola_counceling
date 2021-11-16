<?php 
session_start(); 
include "db_connect.php";

if (isset($_POST['usrnm']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['usrnm']);
	$pass = validate($_POST['password']);

        
		$sql = "SELECT * FROM admin_users_tbl WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $srow['id'];
            	header("Location: admin_home.php");
		        exit();
            }
		}
        else{
            header("Location: login.php");
            exit();
    }
	
    } 
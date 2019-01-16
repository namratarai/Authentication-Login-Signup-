<?php
	if(isset($_POST['submit'])){
		
		session_start();
		include('connection.php');
	
		$username=$_POST['email'];
		$password=$_POST['pass'];
	
		$query=mysql_query("select * from `user` where email='$username' && password='$password'");
	
		if (mysql_num_rows($query) == 0){
			$_SESSION['message']=" Login Failed. User not Found!";
			header('location:../login.php');
		}
		else{
			$row=mysql_fetch_array($query);
			
			if (isset($_POST['remember'])){
				//set up cookie
				//setcookie("user", $row['username'], time() + (86400 * 30)); 
				setcookie("pass", $row['password'], time() + (86400 * 30));
								setcookie("user", $row['email'], time() + (86400 * 30));  
			}
			
			$_SESSION['id']=$row['id'];
			header('location:welcome.php');
		}
	}
	else{
		header('locationlogin.php');
		$_SESSION['message']="Please Login!";
	}
?>
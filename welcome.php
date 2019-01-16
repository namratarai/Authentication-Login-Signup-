<?php

session_start();
include('connection.php');
if(!isset($_SESSION['user']))
{
header("Location: login.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#99FFFF" style="margin-top:10%" style="margin-right:100%">
  <h1><center>welcome you all!!</center></h1>
<center><a href="logout.php"><h2>LOGOUT</h2></a></center>
</body>

</html>

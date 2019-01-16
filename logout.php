<?php 
session_start();  //form using email as a variable . 
unset($_SESSION['email']);  //unset() destroys the specified variables like email.
session_destroy();//session_destroy() destroys all of the data associated with the current session.
header('Location: login.php');//after log-out,redirect to login page.
exit;
?>
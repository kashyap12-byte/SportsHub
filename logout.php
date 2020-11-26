<?php 
session_start();
$_SESSION["username"] = "";
session_destroy();
unset($_SESSION['username']);
echo "<script type='text/javascript'>alert('Logged Out Successfully.');
			window.location='login.html'</script>";
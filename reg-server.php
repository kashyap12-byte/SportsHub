<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="registration_2";
$y=0;
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed:" .mysqli_connect_error());

}

if(isset($_POST['reg_user']))
{
	$username = $_POST['username'];
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];
	$email = $_POST['email'];
    $fav = $_POST['fav-sport'];
	if(empty($username)) {echo "<script type='text/javascript'>alert('Enter the username.');window.location='login.html';</script>";}
    if(empty($email)) {echo "<script type='text/javascript'>alert('Enter the Email id.');window.location='login.html';</script>";}
    
    $user_check_query = "SELECT * FROM user WHERE username ='$username'or email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user) {

    	if($user['username'] === $username){
    		++$y;
        	echo "<script type='text/javascript'>alert('Username Already Exists. Please Sign-up With a Different Username. ');
			  		window.location='login.html';
				  </script>";
        }
    	if($user['email'] === $email){
    	  	++$y;
       		echo "<script type='text/javascript'>alert('Email Already Exists. Please Sign-up With a Different Email.');
			  		window.location='login.html';
			   	  </script>";
        }
    }

	$password = md5($password_1);
	
	$sql_query = "INSERT INTO user (username,password,email,fav_sport) VALUES ('$username','$password','$email','$fav')";
	
	if ($y==0) {
		
	
		if(mysqli_query($conn, $sql_query))
		{
			echo "<script type='text/javascript'>alert('Account Created,Please Login');
			 	 window.location='login.html';
				 </script>";
	    }
		else
		{
	   		echo "Error:" . $sql ."" . mysqli_error($conn);  	
		}
    }
	mysqli_close($conn);   
	$_SESSION['username'] = $username;
}
?>
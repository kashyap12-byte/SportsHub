<?php
$con=mysqli_connect("localhost","root","","registration_2") or die("error".mysql_error);
$sel=mysqli_query($con,"SELECT * from user");
$x=0;


while($log=mysqli_fetch_array($sel))
	{
		if($_POST['username']==$log['username'] && md5($_POST['password'])==$log['password'])
			{
				++$x;
				$spt=$log['fav_sport'];

		}	
		
	}
if($x==1)
	{ 
		
       if($spt == "Cricket"){
			echo "<script type='text/javascript'>alert('Logged in successfully.');
			window.location='http://localhost/sportshub/cricket.html'</script>";
	    }
	    elseif ($spt == "Football") {
	    	echo "<script type='text/javascript'>alert('Logged in successfully.');
			window.location='http://localhost/sportshub/football.html'</script>";
	    }
	     elseif ($spt == "F1") {
	    	echo "<script type='text/javascript'>alert('Logged in successfully.');
			window.location='http://localhost/sportshub/f1-chess-kabaddi.html#f1-page1-'</script>";
	    }
	     elseif ($spt == "Chess") {
	    	echo "<script type='text/javascript'>alert('Logged in successfully.');
			window.location='http://localhost/sportshub/f1-chess-kabaddi.html#chess-page-1'</script>";
	    }
	     elseif ($spt == "Kabaddi") {
	    	echo "<script type='text/javascript'>alert('Logged in successfully.');
			window.location='http://localhost/sportshub/f1-chess-kabaddi.html#kbaddi-page-1'</script>";
	    }
	    elseif ($spt == "") {
	    	echo "<script type='text/javascript'>alert('Logged in successfully.');
			window.location='index.html'</script>";
	    }
	}
else
	{
		echo "<script type='text/javascript'>alert('Wrong Username or Password');
			  window.location='http://localhost/sportshub/login.html';
			</script>";
	}
?>


<?php
if(isset($_POST['submit']))
{
	$name=$_POST['fname'];
	$email=$_POST['email'];
	$pno=$_POST['pno'];
	$message=$_POST['message'];
	$to="shriya20may@gamil.com";
	$subject= 'Form Submission';
	//set header reply to
	//echo $
	if(mail($to,$subject,Smessage,$header)){
		echo"<h1>Sent Successfully! Thank You</h1>";
	}
	else{
		echo'Something went wrong';
	}
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form name='sendmail' action='' method='post'>
<div class="contact-form">
	<h1> Hello</h1>
	<h2> We are always ready to serve you!!</h2>
	<div class="txtb">
		<label>Full Name:</label>
		<input type="text" name="fname" value="" placeholder="Enter Your Name" tabindex='1' required>
	</div>
	<div class="txtb">
		<label>Email:</label>
		<input type="email" name="email" value="" placeholder="Enter Your Email" tabindex='2' required>
	</div>
	<div class="txtb">
		<label>Phone Number:</label>
		<input type="text" name="pno" value="" placeholder="Enter Your Number" tabindex='3' required>
	</div>
	<div class="txtb">
		<label>Message:</label>
		<textarea name='message' placeholder="Type your Message Here.." tabindex='4' required></textarea>
		
	</div>
	<div class="g-recaptcha" data-sitekey="6LfIuZIUAAAAAEsRrX-8qS0h8n-TG1O-4lG9fgVos"></div>
<button class="btn" name='submit' type='submit' data-submit='..sending'> Submit </a>
<h3><?php include "contact.php"?></h3>

</div>
</form>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['fname'];
	$email=$_POST['email'];
	$pno=$_POST['pno'];
	$message=$_POST['message'];
	$admin="shriya20may@gamil.com";
	//set header reply to
	//echo $
	$headers='reply-to:$email';
	mail($admin,$message,$header);
}
?>
<div>
<p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.6600856943!2d77.35073793500268!3d12.954517005733961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1550685611427" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</p>
</div>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];
	
	$mailTo ="ch.thielsch@gmail.com";
	$subject ="Website Message from ".$name.".";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	
	mail($mailTo,$subject,$txt,$headers);
}
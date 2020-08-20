<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$message = $_POST['message'];
	$mailFrom = $_POST['mail'];
	$phone = $_POST['phone'];
	$picture = $_POST['uploaded_file'];

	$mailTo = "mitchellpeters@officialmitchell.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved an email from ".$name.". Phone :".$phone."\n\n".$message."\n\n".$picture;
	$subject = "New Jersey Request from: ".$name;



	mail($mailTo, $subject, $txt, $headers);
	header("Location: jerseys.html?mailsend");
}
?>
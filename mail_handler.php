<?php 
	if(isset($_POST['submit'])){
		$fname = $_POST['name'];	
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$msg = $_POST['message'];

		$to = 'tisaac071@gmail.com';
		$message = "Name: ".$name."\n"."Email:	".$email."\n". "Wrote the following: "."\n\n".$msg;
		$headers = "From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Message Succesfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			echo "<h2>Click <a href=\"http://friuganda.org/\">here</a> to go back to Family Rescue Initiatives</h2>";
		}
		else{
			echo "<h1>Something Went Wrong, Please try again Later!</h1>";
		}
	}
 ?>
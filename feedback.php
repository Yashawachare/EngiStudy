<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$to = "youremail@example.com"; // replace with your email address
	$subject = "Feedback from $name";
	$body = "Name: $name\nEmail: $email\nMessage: $message";
	$headers = "From: $email";

	if(mail($to, $subject, $body, $headers)) {
		echo "<p>Thank you for your feedback!</p>";
	} else {
		echo "<p>Sorry, there was a problem sending your feedback. Please try again later.</p>";
	}
}
?>

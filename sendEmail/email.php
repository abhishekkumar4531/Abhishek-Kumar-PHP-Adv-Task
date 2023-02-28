<?php
	require '../vendor/autoload.php';

	use PHPMailer\PHPMailer\PHPMailer;

	if(isset($_POST['email'])){
		$mail = new PHPMailer();
		$mail->isSMTP();
		//$mail->SMTPDebug=2;

		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = "abhi31kr45@gmail.com";
		$mail->Password = "ylagckqsadjtgigz";
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = 587;

		$mail->setFrom("abhi31kr45@gmail.com");
		$mail->addAddress($_POST['email']);
		$mail->Subject = "Form submission!!!";
		$mail->isHTML(TRUE);
		$mail->Body = "<b>Mail content:</b> Thank you for your submission.";
		$mail->send();
		if($mail->send()){
			echo "<h3>MESSAGE SENT!!!</h3>";
		}
		else{
			echo "Error!!!";
		}
	}
	else{
		header("location: send.php");
	}
?>
<?php
// Variables
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);


// Email address validation - works with php 5.2+
function is_email_valid($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}


if( isset($name) && isset($email) && isset($phone) && is_email_valid($email) ) {

	// Avoid Email Injection and Mail Form Script Hijacking
	$pattern = "/(content-type|bcc:|cc:|to:)/i";
	if( preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $phone)) {
		exit;
	}

	// Email will be send
	$to = "reservas@villadoeden.com.br";  // Change with your email address
	$subject = "Cadastro Landing Page"; // If you want a default subject

	// HTML Elements for Email Body
	$body = <<<EOD
	<strong>Nome:</strong> $name <br>
	<strong>Email:</strong> <a href="mailto:$email?subject=feedback" "meu email">$email</a> <br> <br>
	<strong>Telefone:</strong> $phone <br>
EOD;
//Must end on first column
	
	$headers = "From: $name <$email>\r\n";
	$headers .= "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\n";

	// PHP email sender
	mail($to, $subject, $body, $headers);
}


?>

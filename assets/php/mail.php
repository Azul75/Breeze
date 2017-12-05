<?php
	$name=$_REQUEST["n"];
	$email=$_REQUEST["e"];
	$phone=$_REQUEST["p"];
	$comment=$_REQUEST["m"];

	if($email==""||$comment==""||strlen($name)>40||strlen($email)>40||strlen($phone)>10||strlen($comment)>100){
		exit();
	}

	require __DIR__.'\PHPMailer\PHPMailerAutoload.php';

	
	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
	    //Server settings
	    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'mexitaco44@gmail.com';                 // Email que envia
	    $mail->Password = 'turbopass9';                           // Su contraseña
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('mexitaco44@gmail.com', 'Breeze');  
	    $mail->addAddress('mexitaco44@gmail.com', 'Breeze'); //Email destino

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject ='Breeze';
	    $mail->Body    ='Nombre: '.$name.'<br>Email: '.$email.'<br>Telefono: '.$phone.'<br>Comentario: '.$comment;
	    $mail->AltBody ='This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	} catch (Exception $e) {
	    echo 'Message could not be sent.';
    	echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
?>
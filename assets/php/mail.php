<?php
    require_once(__DIR__.'/PHPMailer/PHPMailerAutoload.php');
    
	$name=$_REQUEST["n"];
	$email=$_REQUEST["e"];
	$phone=$_REQUEST["p"];
	$comment=$_REQUEST["m"];

	if($email==""||$comment==""||strlen($name)>40||strlen($email)>40||strlen($phone)>10||strlen($comment)>100){
		exit();
	}

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
	    //Server settings
	    #$mail->SMTPDebug = 2;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'send.one.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'no-reply@breezepv.mx';                 // Email que envia
	    $mail->Password = 'gioDirt240';                           // Su contraseña
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('no-reply@breezepv.mx', 'Breeze No-Reply');  
	    $mail->addAddress('info@breezepv.mx', 'Breeze Info'); //Email destino
	    $mail->addAddress('mexitaco44@gmail.com', 'Washines Co. Ltd');

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject ='Breeze';
	    $mail->Body    ='Nombre: '.$name.'<br>Email: '.$email.'<br>Telefono: '.$phone.'<br>Comentario: '.$comment;
	    $mail->AltBody ='This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	} catch (Exception $e) {
	    echo "Error: ";print_r($e);
	}
?>
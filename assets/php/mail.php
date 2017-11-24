<?php
	$name=$_POST[""];
	$email=$_POST[""];
	$phone=$_POST[""];
	$comment=$_POST[""];

	if($name==""||$email==""||$comment==""||strlen($name)<=30||strlen($name)<=30||strlen($name)<=10||strlen($name)<=100){
		exit();
	}

	//$db=new mysqli('localhost',"root","","Cookies") or die("You failed");
	$entry="INSERT INTO Login(name,email,phone,comment) VALUES ('$name','$email','$phone','$comment')";
	if ($db->query($entry)===TRUE){
	    echo "Gracias por su preferencia";
	}else{
	    echo "Error: ".$entry."<br>".$db->error;
	}

	require __DIR__.'/PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
	    //Server settings
	    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'mexitaco44@gmail.com';                 // SMTP username
	    $mail->Password = 'turbopass9';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('jonedharo@gmail.com', 'Haro');
	    $mail->addAddress('jlgpblue@gmail.com', 'Jose Luis');

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject ='Breeze';
	    $mail->Body    ='Nombre: '.$name.'</br>Email: '.$email.'</br>Telefono: '.$phone.'</br>Comentario: '.$comment;
	    $mail->AltBody ='This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    echo 'Message has been sent';
	} catch (Exception $e) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
?>
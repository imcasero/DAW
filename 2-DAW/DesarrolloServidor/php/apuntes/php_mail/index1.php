<?php
  // El objetivo de la aplicacion es mandar un mensaje de prueba mediante una cuenta de correo gratuita
  // primero hay que incluir la clase phpmailer para poder instanciar
  //un objeto de la misma
  //C:\xampp\htdocs\2-DAW\DesarrolloServidor\php\apuntes\php_mail
  spl_autoload_register(function ($clase) {
	$fullpath='PHPMailer-master/PHPMailer-master/src/'. $clase . ".php";
	if (file_exists($fullpath)){
		require_once($fullpath);
	}
	else
		echo "<p>La clase $fullpath no se encuentra</p>";
});


  //instanciamos un objeto de la clase phpmailer al que llamamos 
  //por ejemplo mail
  $mail = new PHPMailer();

  //Definimos las propiedades y llamamos a los metodos 
  //correspondientes del objeto mail

  //Con PluginDir le indicamos a la clase phpmailer donde se 
  //encuentra la clase smtp que como he comentado al principio de 
  //este ejemplo va a estar en el subdirectorio includes
  $mail->PluginDir = 'PHPMailer-master/PHPMailer-master/src/';

  //Con la propiedad Mailer le indicamos que vamos a usar un 
  //servidor smtp
  //configuramos el mensaje
  $mail-> isSMTP();
  $mail ->Mailer = "SMTP";
  $mail->SMTPAuth = true;
  $mail -> isHTML(true);
  $mail -> SMTPAutoTLS = false;
  $mail -> CharSet = 'utf8';
  $mail->Host = "localhost";
  $mail->Username = "diego"; 
  $mail->Password = "diego";
  $mail->setFrom("diego@domenico.es");
  $mail -> addAddress("diego@domenico.es");

  //Asignamos asunto y cuerpo del mensaje
  //El cuerpo del mensaje lo ponemos en formato html, haciendo 
  //que se vea en negrita
  $mail->Subject = "Prueba de phpmailer";
  $mail->Body = "<b>Mensaje de prueba mandado con phpmailer en formato html</b>";

  //Definimos AltBody por si el destinatario del correo no admite email con formato html 
  $mail->AltBody = "Mensaje de prueba mandado con phpmailer en formato solo texto";

  //se envia el mensaje, si no ha habido problemas 
  //la variable $exito tendra el valor true
  $exito = $mail->Send();

  //Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas como mucho 
  //para intentar enviar el mensaje, cada intento se hara 5 segundos despues 
  //del anterior, para ello se usa la funcion sleep	
  $intentos=1; 
  while ((!$exito) && ($intentos < 5)) {
	sleep(5);
     	//echo $mail->ErrorInfo;
     	$exito = $mail->Send();
     	$intentos=$intentos+1;	
	
   }
 
		
   if(!$exito)
   {
	// echo "Problemas enviando correo electr�nico a ".$valor;
	echo "<br/>".$mail->ErrorInfo;	
   }
   else
   {
	echo "Mensaje enviado correctamente";
   } 
?>
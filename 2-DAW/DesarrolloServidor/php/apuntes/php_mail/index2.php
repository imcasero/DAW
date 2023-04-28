<?php

$recipientes = array('diego_basura@outlook.es' , 'adrian.muriel@outlook.es');
$asunto = 'hola bombon';
$body = '<p>Hola</p>';
$usuario = 'diego';
$pass = 'diego';

enviarEmail($recipientes , $asunto , $body  , $usuario , $pass);

function enviarEmail($recipientes , $asuntos , $body  , $usuario , $pass){
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

   $mail = new PHPMailer();

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
  $mail->Username = $usuario; 
  $mail->Password = $pass;
  $direccion = $usuario . '@domenico.es';
  $mail->setFrom('diego@domenico.es');

   if(is_array($recipientes)){
      foreach($recipientes as $des ){
         $mail -> addAddress($des);
      }
   }
  $mail->Subject = $asuntos;
  $mail->Body = $body;

  //Definimos AltBody por si el destinatario del correo no admite email con formato html 
  $mail->AltBody = "Mensaje de prueba mandado con phpmailer en formato solo texto";

  //se envia el mensaje, si no ha habido problemas 
  //la variable $exito tendra el valor true
  $exito = $mail->Send();

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

}
  
  


  
  


  

  

  //Asignamos asunto y cuerpo del mensaje
  //El cuerpo del mensaje lo ponemos en formato html, haciendo 
  //que se vea en negrita
  

  //Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas como mucho 
  //para intentar enviar el mensaje, cada intento se hara 5 segundos despues 
  //del anterior, para ello se usa la funcion sleep	
  
?>
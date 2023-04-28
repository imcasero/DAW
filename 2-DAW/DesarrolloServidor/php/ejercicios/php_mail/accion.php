<?php
$contenido = '';
$imagen = '';
$tema = $_POST['tema'];
    if(!empty($_POST['mensaje'])){
        $contenido = $_POST['mensaje'];
    }
    if ($_POST['imagen'] != 'vacio') {
        $imagen = $_POST['imagen'];
    }
    $asunto = $_POST['asunto'];
    $cliente = $_POST['cliente'];

    $usuario = 'root';
    $pass = 'root';
    $con = new PDO ('mysql:dbname=php_mail;host=127.0.0.1', $usuario, $pass);
    $con -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $smtp = $con->prepare('SELECT * FROM clientes WHERE nombre LIKE ?');
    // $smtp ->bindValue(1 , $tabla);
    $smtp ->bindValue(1 , $cliente);
    $smtp ->execute();
     while ($fila = $smtp->fetch(PDO::FETCH_ASSOC)) {
        $email = $fila['email'];
    }
    enviar($email , $tema , $imagen , $asunto , $contenido);


    function enviar($email , $tema , $imagen , $asunto , $contenido){
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
        $mail -> addAddress($email);

        //Asignamos asunto y cuerpo del mensaje
        //El cuerpo del mensaje lo ponemos en formato html, haciendo 
        //que se vea en negrita
        
        $cad = 'img/'.$tema.'/'.$imagen;
        echo '<img src="'.$cad.'">';
        $mail->addEmbeddedImage( $cad, 'x');
        $mail->Subject = $asunto;

        $datos = '<p>' . $contenido . '</p><br> <img src="cid:x" alt="Imagen correspondiente">';

        $mail->Body = $datos;

        //Definimos AltBody por si el destinatario del correo no admite email con formato html 
        $mail->AltBody = $contenido;

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
        
                
        if(!$exito){
            // echo "Problemas enviando correo electr�nico a ".$valor;
            echo "<br/>".$mail->ErrorInfo;	
        }else{
            echo "Mensaje enviado correctamente";
            echo '<a href="./index.html">Volver</a>';
        } 
        }
?>
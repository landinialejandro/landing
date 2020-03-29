<?php
include("header.php");
// primero hay que incluir la clase phpmailer para poder instanciar
//un objeto de la misma
$CHARSET = "UTF-8";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('dist/php/PHPMailer/src/Exception.php');
require('dist/php/PHPMailer/src/PHPMailer.php');
require('dist/php/PHPMailer/src/SMTP.php');

?>
<style>
    .l-text-h3 {
        font-size: 1.75rem;
    }

    .l-divider {
        margin: 1.21rem 0 1.5rem;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .l-divider .l-divider-line {
        width: 100%;
        max-width: 7rem;
        height: 0.25rem;
        background-color: #2c3e50;
        border-radius: 1rem;
        border-color: #2c3e50 !important;
    }

    .l-divider .l-divider-line:first-child {
        margin-right: 1rem;
    }

    .l-divider .l-divider-line:last-child {
        margin-left: 1rem;
    }

    .l-divider .l-divider-icon {
        color: #2c3e50 !important;
        font-size: 2rem;
    }

    .l-divider .l-divider-text {
        color: #2c3e50 !important;
        font-size: 2.5rem;
    }

    .l-divider.l-divider-light .l-divider-line {
        background-color: #fff;
    }

    .l-divider.l-divider-light .l-divider-icon {
        color: #fff !important;
    }
</style>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
        <div class="col mb-2">
            <h1 class="m-0 text-dark text-center">Tu próxima aplicación ya!, mobil ready y mucho menos costoso.
            </h1>
        </div><!-- /.col -->
    </div><!-- /.container -->
</div><!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container">
        <div class="col">
            <div class="l-divider">
                <div class="l-divider-line"></div>
                <div class="l-divider-text"> ¡Gracias! </div>
                <div class="l-divider-line"></div>
            </div>
            <p class="l-text-h3 text-center">
                <?php
                if (!empty($_POST)) {
                    $post = $_POST;

                    foreach ($post as $key => $value) {
                        $producto[] = $key;
                        $mailto[] = $value;
                    }
                    $prod = str_replace("-", " ",  $producto[0]);

                    $mail = new PHPMailer(true);
                    
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                    $mail->isSMTP();                                            // Send using SMTP
                    //$mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
                    $mail->Host       = "rm000235.ferozo.com";
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username = "alejandro@landini.com.ar";
                    $mail->Password = "*bHYacE1pQ";
                    // $mail->Username   = 'user@example.com';                     // SMTP username
                    // $mail->Password   = 'secret';                               // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Indicamos cual es nuestra dirección de correo y el nombre que 
                    //queremos que vea el usuario que lee nuestro correo
                    //Recipients
                    $mail->setFrom('alejandro@landini.com.ar', 'Alejandro Landini');
                    $mail->addAddress($mailto[0]);     // Add a recipient
                    // $mail->addReplyTo('info@example.com', 'Information');
                    // $mail->addCC('cc@example.com');
                    $mail->addBCC('landinialejandro@hotmail.com');
                    $mail->addBCC('alejandro@landini.com.ar');

                    $mail->isHTML(true);  
                    $mail->Subject = "Has solicitado informacion en landini.com.ar ";
                    $mail->Body = "<strong>hola! El siguiente correo: <a href=mailto:" .
                        $mailto[0] . ">" .
                        $mailto[0] .
                        "</a> envió una solicituda de información</strong><br> sobre el producto: " .
                        $prod . 
                        "<br> Agradezco mucho tú interes, en breve me comunico contigo<br>" .
                        "<br> Saludos, Alejandro Landini";

                    //Definimos AltBody por si el destinatario del correo no admite email con formato html 
                    $mail->AltBody = "El siguiente correo:" . $mailto[0] . " envió una solicituda de envio de información de: " . $prod;
                    echo "<br>after AltBody";
                    //se envia el mensaje, si no ha habido problemas 
                    //la variable $exito tendra el valor true
                    $exito = $mail->Send();
                    echo "<br>after send";
                    //Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas como mucho 
                    //para intentar enviar el mensaje, cada intento se hara 5 segundos despues 
                    //del anterior, para ello se usa la funcion sleep	
                    $intentos = 1;
                    while ((!$exito) && ($intentos < 5)) {
                        sleep(5);
                        //echo $mail->ErrorInfo;
                        $exito = $mail->Send();
                        $intentos = $intentos + 1;
                    }
                    if (!$exito) {
                        echo "Problemas enviando correo electrónico a " . $mailto[0];
                        echo "<br>" . $mail->ErrorInfo;
                    } else {
                        echo "Pronto estaré en contacto!<br><br>";
                        echo "Su Mensaje se envio correctamente";
                    }
                }else{
                    echo "algo salio mal! <br>";
                    echo "o tú no deberías estar aqui!";
                }
                ?>
            </p>
        </div><!-- /.col -->
    </div><!-- /.container -->
</div><!-- /.content -->

<?php
include("footer.php");
?>
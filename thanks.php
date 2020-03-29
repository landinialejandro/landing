<?php
include("header.php");
// primero hay que incluir la clase phpmailer para poder instanciar
//un objeto de la misma
$CHARSET = "UTF-8";
require_once('dist/php/PHPMailer/class.phpmailer.php');
include_once('dist/php/PHPMailer/class.smtp.php');

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
                    //instanciamos un objeto de la clase phpmailer al que llamamos 
                    //por ejemplo mail
                    $mail = new phpmailer(true);

                    //Definimos las propiedades y llamamos a los métodos 
                    //correspondientes del objeto mail

                    //Con PluginDir le indicamos a la clase phpmailer donde se 
                    //encuentra la clase smtp que como he comentado al principio de 
                    //este ejemplo va a estar en el subdirectorio includes
                    $mail->PluginDir = "dist/php/PHPMailer/";

                    //Con la propiedad Mailer le indicamos que vamos a usar un 
                    //servidor smtp
                    $mail->Mailer = "smtp";

                    //Asignamos a Host el nombre de nuestro servidor smtp
                    $mail->Host = "rm000235.ferozo.com";

                    //Le indicamos que el servidor smtp requiere autenticación
                    $mail->SMTPAuth = true;

                    //Le decimos cual es nuestro nombre de usuario y password
                    $mail->Username = "alejandro@landini.com.ar";
                    $mail->Password = "*bHYacE1pQ";

                    //Indicamos cual es nuestra dirección de correo y el nombre que 
                    //queremos que vea el usuario que lee nuestro correo
                    $mail->From = "alejandro@landini.com.ar";
                    $mail->FromName = "Alejandro Landini";

                    //el valor por defecto 10 de Timeout es un poco escaso dado que voy a usar 
                    //una cuenta gratuita, por tanto lo pongo a 30  
                    $mail->Timeout = 30;

                    //Indicamos cual es la dirección de destino del correo
                    $mail->AddAddress($mailto[0]);
                    $mail->addBCC('landinialejandro@hotmail.com');

                    //Asignamos asunto y cuerpo del mensaje
                    //El cuerpo del mensaje lo ponemos en formato html, haciendo 
                    //que se vea en negrita
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

                    //se envia el mensaje, si no ha habido problemas 
                    //la variable $exito tendra el valor true
                    $exito = $mail->Send();

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
                        echo "Problemas enviando correo electrónico a " . $valor;
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
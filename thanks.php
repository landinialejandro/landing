<?php
$CHARSET = "UTF-8";
include("header.php");
// primero hay que incluir la clase phpmailer para poder instanciar
//un objeto de la misma
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('dist/php/PHPMailer/src/Exception.php');
require('dist/php/PHPMailer/src/PHPMailer.php');
require('dist/php/PHPMailer/src/SMTP.php');


?>
<div class="content-header">
    <div class="container">
        <div class="col mb-2">
            <h1 class="m-0 text-dark text-center">Tu próxima aplicación ya!, mobil ready y mucho menos costoso.
            </h1>
        </div>
    </div>
</div>

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
                $captcha = $_POST['g-recaptcha-response'];

                if (!$captcha) {
                    echo alerts("danger", " Captcha ERROR!", '<p>Please complete the captcha to submit the form.</p>');
                    exit;
                } else {
                    $secretKey = "6Lcji_MUAAAAAIFVloKesM3FvdYcWnlElVU_e2sE";
                    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
                    $response = file_get_contents($url);
                    $responseKeys = json_decode($response, true);
                    if ($responseKeys["success"]) {
                        if (!empty($_POST)) {
                            $post = $_POST;
                            if (isset($post['contact'])) {
                                //   'name' => string 'Alejandro' (length=9)
                                //   'lastname' => string 'Landini' (length=7)
                                //   'mail' => string 'alejandro@landini.com.ar' (length=24)
                                //   'company' => string 'Landini' (length=7)
                                //   'position' => string 'ceo' (length=3)
                                //   'comments' => string 'comentario' (length=10)
                                //   'notify' => string 'on' (length=2)
                                //   'contact' => string '' (length=0)
                                $contact = true;
                                $mailto[0] = $post['mail'];
                                $prod = "Contact form";
                                $_mail = "<strong>hola! {$post['name']}, {$post['lastname']} Gracias por tu contacto.</strong>" .
                                    "<br>Es muy valioso para mi tus comentarios:<br>" .
                                    $post['comments'] .
                                    "<br> en breve me comunico contigo<br>" .
                                    "<br> Tú empresa es: {$post['company']}" .
                                    "<br> Tú cargo es: {$post['position']}" .
                                    "<br><br> Saludos, Alejandro Landini" .
                                    "<br><hr><br>" .
                                    "<strong>Hi! {$post['name']}, {$post['lastname']} Thank you for your contact.</strong>" .
                                    "<br>Your comments are very valuable to me:<br>" .
                                    $post['comments'] .
                                    "<br> I will contact you shortly<br>" .
                                    "<br> your company is: {$post['company']}" .
                                    "<br> your position is: {$post['position']}" .
                                    "<br><br> Greetings, Alejandro Landini";

                                $_mail_body = "Hola!: el siguiente correo {$post['mail']} envió tus datos de contacto! en breve me comunico contigo! Saludos! Alejandro ";
                            } else {
                                $contact = false;
                                foreach ($post as $key => $value) {
                                    $producto[] = $key;
                                    $mailto[] = $value;
                                }
                                $prod = str_replace("-", " ",  $producto[0]);
                                $_mail = "<strong>Hola! El siguiente correo: <a href=mailto:{$mailto[0]}>{$mailto[0]}</a> envió una solicitud de información</strong>" .
                                    "<br>Sobre el producto: {$prod}" .
                                    "<br> Agradezco mucho tú interes, en breve me comunico contigo<br>" .
                                    "<br><br> Saludos, Alejandro Landini" .
                                    "<br><hr><br>" .
                                    "<strong>Hi! The following email: <a href=mailto:{$mailto[0]}>{$mailto[0]}</a> sent a request for information</strong>" .
                                    "<br> About the product: {$prod}" .
                                    "<br> I appreciate your interest, I will contact you shortly<br>" .
                                    "<br><br> Greetings, Alejandro Landini";
                                $_mail_body = "El siguiente correo: {$mailto[0]} envió una solicituda de envio de información de: {$prod}";
                            }
                            $mail = new PHPMailer(true);
                            include('config.php');
                            //Server settings
                            $mail->isSMTP();                                 // Send using SMTP
                            $mail->Host       = $mail_cfg['Host'];           // Set the SMTP server to send through
                            $mail->SMTPAuth   = $mail_cfg['SMTPAuth'];       // Enable SMTP authentication
                            $mail->Username   = $mail_cfg['Username'];       // SMTP username
                            $mail->Password   = $mail_cfg['Password'];       // SMTP password
                            $mail->Port       = $mail_cfg['Port'];           // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged

                            //Recipients
                            $mail->setFrom($mail_cfg['Username'], 'Alejandro Landini');
                            $mail->addAddress($mailto[0]);     // Add a recipient
                            $mail->addBCC($mail_cfg['addBCC']);
                            $mail->addBCC($mail_cfg['Username']);

                            $mail->isHTML(true);
                            $mail->Subject = "Has solicitado informacion en landini.com.ar ";

                            $mail->Body = $_mail;
                            $mail->AltBody = $_mail_body;

                            $exito = $mail->Send();

                            $intentos = 1;
                            while ((!$exito) && ($intentos < 5)) {
                                sleep(5);
                                //echo $mail->ErrorInfo;
                                $exito = $mail->Send();
                                $intentos = $intentos + 1;
                            }
                            if (!$exito) {
                                $msg = "Problemas enviando correo electrónico a " . $mailto[0];
                                $msg .= "<br>" . $mail->ErrorInfo;
                                echo alerts("warning", " Send ERROR!", $msg);
                            } else {
                                $msg = "Pronto estaré en contacto!<br><br>";
                                $msg .= "Su Mensaje se envio correctamente";
                                echo alerts("success", " Exito!", $msg, "fa-check");
                            }
                        } else {
                            $msg = "algo salio mal! <br>";
                            $msg .= "o tú no deberías estar aqui!";
                            echo alerts("warning", " Upsss!", $msg);
                        }
                    } else {
                        $msg = '<p>Your submission attempt has been blocked by anti-spam measures.</p>';
                        echo alerts("danger", "anti-spam measures!", $msg);
                    }
                }
                ?>
            </p>
        </div><!-- /.col -->
    </div><!-- /.container -->
</div><!-- /.content -->

<?php
include("footer.php");

/**
 * Alerts constructor
 * 
 * @param string $class `danger`, `info`, `warning`, `succes`
 * @param string $title the card alert window
 * @param string $msg card alert menssage
 * @param string $ico ico card, default  "fa-exclamation-triangle"
 * 
 * @return string html card string
 * 
 */

function alerts($class, $title, $msg = "", $ico = "fa-exclamation-triangle")
{
    ob_start();
?>
    <div class="alert alert-<?php echo $class; ?>">
        <h5><i class="icon fas <?php echo $ico; ?>"></i> <?php echo $title; ?></h5>
        <?php echo $msg; ?>
    </div>
<?php
    $ret = ob_get_contents();
    ob_clean();
    return $ret;
}

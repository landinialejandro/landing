<?php
$CHARSET = "UTF-8";
include("header.php");

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
                    $secretKey = $captcha_key;
                    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
                    $response = file_get_contents($url);
                    $responseKeys = json_decode($response, true);
                    if ($responseKeys["success"]) {
                        if (!empty($_POST)) {
                            SendingMail($mail_cfg);
                        } else {
                            $msg = "algo salio mal! <br>";
                            $msg .= "o tú no deberías estar aqui!";
                            $class = 'warning';
                            $title = "Upsss!";
                            echo alerts($class, $title, $msg, $ico);
                        }
                    } else {
                        $msg = '<p>Your submission attempt has been blocked by anti-spam measures.</p>';
                        $class = 'danger';
                        $title = "Anti-spam measures!!";
                        echo alerts($class, $title, $msg, $ico);
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

/**
 * Mails constructor
 * 
 * @param string $template html file template
 * @param array $post data array
 * 
 * @return string html mail string
 * 
 */
function mails($template, $post)
{

    $template_file = is_file("templates/{$template}.html");
    $_mail = @file_get_contents($template_file);
    $_mail = str_replace('{%%NAME%%}', $post['name'], $_mail);
    $_mail = str_replace('{%%LASTNAME%%}', $post['lastname'], $_mail);
    $_mail = str_replace('{%%COMMENTS%%}', $post['comments'], $_mail);
    $_mail = str_replace('{%%COMPANY%%}', $post['company'], $_mail);
    $_mail = str_replace('{%%POSITION%%}', $post['position'], $_mail);
    $_mail = str_replace('{%%PRODUCT%%}', $post['product'], $_mail);
    $_mail = str_replace('{%%MAILTO%%}', $post['mailto'], $_mail);

    return $_mail;
}

/**
 * Sendign mail control
 * 
 * @param array $mail_cfg config mail array
 * 
 * @return string html mail string
 * 
 */

function SendingMail($mail_cfg)
{
    $post = $_POST;
    $mailto[0] = $post['mail'];
    if (isset($post['contact'])) {
        $post['product'] = "Contact form";
        $_mail = mails('contactmail', $post);
        $_mail_body = "Hola!: el siguiente correo {$post['mail']} envió tus datos de contacto! en breve me comunico contigo! Saludos! Alejandro ";
    } else {
        foreach ($post as $key => $value) {
            $producto[] = $key;
            $mailto[] = $value;
        }
        $post['product'] = str_replace("-", " ",  $producto[0]);
        $_mail =  mails('productmail', $post);
        $_mail_body = "El siguiente correo: {$post['mail']} envió una solicituda de envio de información de: {$post['product']}";
    }
    $mail = new PHPMailer(true);

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
    $mail->Subject = "Has solicitado información en: landini.com.ar / You have requested information in: landini.com.ar";

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
        $class = 'warning';
        $title = "Send ERROR!!";
    } else {
        $msg = "Pronto estaré en contacto!<br><br>";
        $msg .= "Su Mensaje se envio correctamente";
        $class = 'success';
        $title = "Exito!";
        $ico = "fa-check";
    }
    echo alerts($class, $title, $msg, $ico);
    return;
}

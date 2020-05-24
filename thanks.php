<?php
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
                            $msg = "Algo salio mal! <br>";
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
    $_mail = @file_get_contents("templates/{$template}.html");
    if (isset($post['name'])) $_mail = str_replace('{%%NAME%%}', makeSafe($post['name']), $_mail);
    if (isset($post['lastname'])) $_mail = str_replace('{%%LASTNAME%%}', makeSafe($post['lastname']), $_mail);
    if (isset($post['comments'])) $_mail = str_replace('{%%COMMENTS%%}', makeSafe($post['comments']), $_mail);
    if (isset($post['company'])) $_mail = str_replace('{%%COMPANY%%}', makeSafe($post['company']), $_mail);
    if (isset($post['position'])) $_mail = str_replace('{%%POSITION%%}', makeSafe($post['position']), $_mail);
    if (isset($post['product'])) $_mail = str_replace('{%%PRODUCT%%}', makeSafe($post['product']), $_mail);
    if (isset($post['mail'])) $_mail = str_replace('{%%MAILTO%%}', makeSafe($post['mail']), $_mail);

    return $_mail;
}

/**
 * Sendign mail control
 * 
 * @param array $mail_cfg config mail array
 * 
 * @return string empty
 * 
 */

function SendingMail($mail_cfg)
{
    $post = $_POST;
    if (isset($post['contact'])) {
        //$mailto[0] = $post['mail'];
        $post['product'] = "Contact form";
        $_mail = mails('contactmail', $post);
        $_mail_body = "Hola!: el siguiente correo {$post['mail']} envió tus datos de contacto! en breve me comunico contigo! Saludos! Alejandro ";
    } else {
        foreach ($post as $key => $value) {
            $producto[] = $key;
            $mailto[] = $value;
        }
        $post['mail'] = $mailto[0] ;
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
    $mail->CharSet    = 'utf-8';
    $mail->Encoding   = 'base64';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged

    //Recipients
    $mail->setFrom($mail_cfg['Username'], 'Alejandro Landini');
    $mail->addAddress($post['mail']);     // Add a recipient
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
        $msg = "Problemas enviando correo electrónico a " . $post['mail'];
        $msg .= "<br>" . $mail->ErrorInfo;
        $class = 'warning';
        $title = "Send ERROR!!";
    } else {
        $msg = "Pronto estaré en contacto!<br><br>";
        $msg .= "Su Mensaje se envió correctamente";
        $class = 'success';
        $title = "Exito!";
        $ico = "fa-check";
    }
    echo alerts($class, $title, $msg, $ico);
    return;
}

/**
 * makeSafe string control
 * 
 * @param array $string to safe
 * 
 * @return string $string or error
 * 
 */

function makeSafe($string){

    // prevent double escaping
    $na = explode(',', "\x00,\n,\r,',\",\x1a");
    $escaped = true;
    $nosc = true; // no special chars exist
    foreach($na as $ns){
        $dan = substr_count($string, $ns);
        $esdan = substr_count($string, "\\{$ns}");
        if($dan != $esdan) $escaped = false;
        if($dan) $nosc = false;
    }
    if($nosc){
        // find unescaped \
        $dan = substr_count($string, '\\');
        $esdan = substr_count($string, '\\\\');
        if($dan != $esdan * 2) $escaped = false;
    }

    return ($escaped ? $string : "ERROR SAFE STRING");
}
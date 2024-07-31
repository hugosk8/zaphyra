<?php

namespace App\Controller;


class MailController
{

    public function Mailer()
    {
        if (isset($_POST['message'])) {
            $secret = "6Le-aYQkAAAAAJapjFBygTl-tvCxmRsn3srstKZm";
            $response = htmlspecialchars($_POST['token_response']);
            $remoteip = $_SERVER['REMOTE_ADDR'];
            $request = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
            $get = file_get_contents($request);
            $decode = json_decode($get, true);

            if ($decode["success"] == true) {
                if (isset($_POST['message'])) {
                    $name = isset($_POST['name']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name']) : "";
                    $email = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
                    $subject = isset($_POST['subject']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject']) : "";
                    $phone = isset($_POST['phone']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
                    $message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";
                    $rapport = "Votre méssage a bien été envoyé";
                    $entete  = 'MIME-Version: 1.0' . "\r\n";
                    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                    $entete .= 'From: ' . $_POST['email'] . "\r\n";

                    $message = '<html>
                    <h2>Message envoyé depuis la page Contact de zaphyra au sujet de ' . $subject . ' </h2>
                    <p><b>Nom : </b>' . $name . '<br>
                    <b>Email : </b>' . $email . '<br>
                    <b>Numero : </b>' . $phone . '</p>
                    <b>Message : </b>' . $message . '</p>
       
                   </html>';

                    $retour = mail('zaphyra.f.e@wanadoo.fr', 'Envoi depuis page Contact', $message, $entete);
                    if ($retour) {
                        $_SESSION['MailStatus'] = true;
                        header('Location: ' . URL . 'contact');
                      //  echo '<div class="alert alert-secondary mt-5"><p>"Votre message a bien été envoyer"</p> </div>';
                    } else {
                        $_SESSION['MailStatus'] = false;
                        header('Location: ' . URL . 'contact');
                      //  echo '<div class="alert alert-secondary mt-5"><p>"Votre message a bien été envoyer"</p> </div>';
                    }
                }
            }
        }
    }
}

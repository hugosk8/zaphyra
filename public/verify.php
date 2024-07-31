<?php

session_start();

if (isset($_POST['message'])) {
    $secret = "6LciazweAAAAAPNph85WETCMCYvvl1S5_wwLP2g3";
    $response = htmlspecialchars($_POST['g-recaptcha-response']);
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $request = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";

    $get = file_get_contents($request);
    $decode = json_decode($get, true);


    var_dump($_POST) . '<br>';

    die();


    if ($decode["success"] == true) {
        $firstname = isset($_POST['firstname']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['firstname']) : "";
        $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "";
        $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : "";
        $society = isset($_POST['society']) ? htmlspecialchars($_POST['society']) : "";
        $employee = isset($_POST['employee']) ? htmlspecialchars($_POST['employee']) : "";
        $site = isset($_POST['site']) ? htmlspecialchars($_POST['site']) : "";
        $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : "";
        $rapport = "Votre méssage a bien été envoyé";
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $mail = '<html>
        <h4>Message envoyé depuis la page Contact du site de horomeca</h4>
                       <p><b>Prenom : </b>' . $firstname . '</p>
                       <p><b>Nom : </b>' . $name . '</p>
                       <p><b>Email : </b>' . $email . '</p>
                       <p><b>Numero : </b>' . $phone . '</p>
                       <p><b>La société est : </b>' . $society . ' elle a ' . $employee . ' employé(s) et ' . $site . ' site(s)</p>
                       <p><b>Message : </b>' . $message . '</p>
                       
                       </html>';

        $retour = mail('chd@arenborg.com', 'Envoi depuis page Contact', $mail, $entete);

        $langue = (isset($_SESSION['langue'])) ?  $_SESSION['langue'] : '';

        if ($retour) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            $_SESSION['mail'] = 'send';
        }
    } else {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
} else {
    header('location: /contact/');
}

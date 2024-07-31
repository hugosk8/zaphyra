<?php
session_start();

if (isset($_POST['firstname']) && $_POST['firstname'] != null) {
   if (isset($_SESSION['recaptcha']) && $_SESSION['recaptcha'] == $_POST['recaptcha']) {
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

      $retour = mail('chd@horomeca.com', 'Envoi depuis page Contact', $mail, $entete);
      $_SESSION['mailstatuts'] = true;
   } else {
      $_SESSION['codestatuts'] = false;
   }
} else {
   $_SESSION['mailstatuts'] = false;
}
header("Location: ".$_SERVER['HTTP_REFERER']);
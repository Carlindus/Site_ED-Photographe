<?php

// Récupération de PHPMailer

require 'PHPMailer/PHPMailerAutoload.php';

//Correspond au nom du bouton d'envoi (submit)

if (isset($_POST['send-form'])){

  // Conversion des champs de formulaire en variables

  $nom = strip_tags(htmlspecialchars($_POST['name']));
  $prenom = strip_tags(htmlspecialchars($_POST['firstname']));
  $sexe = strip_tags(htmlspecialchars($_POST['sex']));
  $email_address = strip_tags(htmlspecialchars($_POST['email']));
  $sujet = strip_tags(htmlspecialchars($_POST['reason']));
  $message = strip_tags(htmlspecialchars($_POST['message']));

// Traitement des données récupérées

  $email = new PHPMailer();
  $email->IsHTML(true);
  $email->CharSet = 'UTF-8';
  $email->From      = 'contact@monmail.com';
  $email->FromName  = 'Fomulaire de contact Etienne Deleplanque';
  $email->Subject   = '[Contact formulaire] : '.$sujet.' de '.$sexe.' '.$nom.' '.$prenom;
  $email->Body      = 'Vous avez reçu un message de '.$sexe.' '.$nom.' '.$prenom.'<br /><br /><strong>Email :</strong> : '.$email_address.'<br /><strong>Sujet : </strong>'.$sujet.'<br /><strong>Message : </strong>'.$message;
  $email->AddAddress( 'carlindusdesign@gmail.com' );

  header("Location: https://www.carlindusdesign.fr/ED/pages/merci.php");

  return $email->Send();

}
else{
  echo 'Ca marche pas.';
}
?>

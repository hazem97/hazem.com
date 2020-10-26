<?php
$mail=$_GET['mail'];
$pass=$_GET['pass'];
  
  $sujet = "Password";
  $corp = "Salut ceci est un email contient votre mot de passe";
  $cc=$corp." ".$pass;
  $headers = "From: kalboussihazem12@gmail.com";
  if (mail($mail, $sujet, $cc, $headers)) {
    echo "success";
  } else {
    echo "echec";
  }
?>
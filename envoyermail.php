<?php
$mail=$_POST['email'];
$name=$_POST['name'];

$pass=$_GET['pass'];
  
  $sujet =$_POST['subject'];

  $corp =$_POST['message'];
  $cc=$corp;
   
  $headers = "From:".$mail;
  if (mail("kalboussihazem67@gmail.com", $sujet, $cc, $headers)) {
    echo "success";
  } else {
    echo "echec";
  }
?>
<html>
<a href="https://hazem97.github.io/hazem.com/hazem.html">retour</a>
</html>
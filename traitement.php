<?php
if((!isset($_POST['accepte']))){
    echo 'Veuillez cocher les CGU. ';  
}

if((!empty($_POST['nom']))&&(!empty($_POST['prenom']))&&(!empty($_POST['email']))&&(!empty($_POST['sujet']))){
    echo 'Merci '.$_POST['prenom'].' '.$_POST['nom'].'. Nous allons prendre contact avec vous rapidement.';
    $mail= $_POST['nom'].' '.$_POST['prenom'].' '.$_POST['email'].' '.$_POST['sujet'].' '.$_POST['message'];
    mail('p.pauline017@gmail.com','Contact via le site',$mail);
}else{
    echo 'Veuillez compléter tous les champs.';
}

?>

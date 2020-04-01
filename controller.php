<?php

require_once('connec.php');
$pdo = new \PDO(DSN, USER, PASS);

if ($_POST) {
    $name      = $_POST['contactName'];
    $firstname = $_POST['contactFirstname'];
    $phone     = $_POST['contactPhone'];
    $email     = $_POST['contactEmail'];
    $message   = $_POST['contactMessage'];
    $checkbox   = $_POST['noRobot'];
    $errors    = [];

    if (empty($name)) {
            $errors[] = ' Un nom est requis ';

    }
    if (empty($firstname)) {
            $errors[] = ' Un prénom est requis ';

    }
    if (empty($phone)) {
            $errors[] = ' Un numéro de téléphone est requis ';

    }
    if (empty($email)) {
            $errors[] = ' Une adresse email est requise ';
    }
    if (empty($message)) {
            $errors[] = ' Un message un requis ';
    }
    if (empty($checkbox)) {
    $errors[] = ' checkbox invalide ';
}
   if(count($errors) === 0) {

       header('location: contact.php');
    } else {
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
      }
}

<?php
if ($_POST) {
    $name      = $_POST['ContactName'];
    $firstname = $_POST['contactFirstname'];
    $phone     = $_POST['contactPhone'];
    $email     = $_POST['contactEmail'];
    $message   = $_POST['contactMessage'];
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
            $errors[] = ' Un message un requis '
    }

}
var_dump($_POST);
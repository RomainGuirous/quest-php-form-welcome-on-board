<?php
$errors = [];

if(!empty($_POST)) {
    $name = htmlentities(trim($_POST['name']));
    $email = htmlentities(trim($_POST['email']));
    $message = htmlentities(trim($_POST['message']));
    if(empty($_POST['subject'])) {
        $errors[]="Veuillez saisir un sujet";
    } else {
        $subject=trim(htmlentities($_POST['subject']));
    }

    if (empty($name)) {
        $errors[]= "Le nom est obligatoire";
    }
    if (empty($email)) {
        $errors[]= "L'email est obligatoire";
    }
    
};

if (!empty($errors)) {
    require 'index.php';
    die();
} else {
    require 'recap.php';
    die();
}
?>
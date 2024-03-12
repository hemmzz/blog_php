<?php

if ($_SERVER["REQUEST_METHOD"] ==="POST") {

    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $password = $_POST["password"];
    
    if (empty($lastname)) {
        $error = "Enter Lastname";
    }
    elseif (empty($firstname)) {
        $error = "Enter Firstname";
    }
    elseif (empty($username)) {
        $error = "Enter Username";
    }
    elseif (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $error = "Enter valid email";
    }
    elseif (strlen($password) < 8) {
        $error = "Please, enter minimum of 8 characters for password";
    }
    elseif (! preg_match("/[a-z]/i", $password)) {
        $error = "Password must contain atleast one character";
    }
    else {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        
    }


}
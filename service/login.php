<?php

include __DIR__ . "/../database/db.php";

if (isset($_POST["btn-log"])) {
    $email = $_POST['email'];
    $pass  = $_POST['password'];
    loginUser($email, $pass);
}

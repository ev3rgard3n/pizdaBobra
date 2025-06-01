<?php
session_start();
include __DIR__ . "/connect.php";

function selectAll($table)
{
    global $conn;

    $sql = "select * from $table";
    return mysqli_query($conn, $sql);
}

function loginUser($email, $password)
{
    global $conn;
    $sql        = "select * from users where email='$email' and password='$password'";
    $result_raw = mysqli_query($conn, $sql);

    if ($result_raw->num_rows) {
        $result           = $result_raw->fetch_assoc();
        $_SESSION['user'] = $result["fio"];
        $_SESSION['exp'] = null;
        header("location: index.php");
    } else {
        $_SESSION['exp'] = "Неверный логин или пароль";
    }
    return null;
}

function logout()
{
    $_SESSION['user'] = null;
}

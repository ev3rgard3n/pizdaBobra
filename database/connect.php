<?php

try {
    $conn = mysqli_connect("localhost", "root", "mysql", "demo");
    if (! $conn) {
        throw new Exception("Connsaction failed" . mysqli_connect_error());
    }
} catch (Exception $exception) {
    die($exception->getMessage());
}

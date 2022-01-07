<?php

$hostname   = "localhost";
$username   = "moh_irham";
$password   = "1122334455";
$database   = "db_perpus";

$conn = mysqli_connect($hostname,$username,$password,$database);

function registrasi($data) {
    global $conn;

    $username = mysqli_real_escape_string($conn, $data["username"]);
    $name = mysqli_real_escape_string($conn, $data["nama"]);
    $email = strtolower (stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["pass"]);
    $password2 = mysqli_real_escape_string($conn, $data["re_pass"]);

    mysqli_query($conn, "insert into admin values('$username', '$name', '$email', '$password')");

    return mysqli_affected_rows($conn);
}

?>
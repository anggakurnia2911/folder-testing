<?php

require_once "../config.php";
$name = $_POST["nama"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


$q = $db->prepare("INSERT INTO `users` (`id`, `nama`, `username`, `email`, `password`) VALUES (NULL, ?, ?, ? ,  SHA1(?));");
$q->execute([$nama, $username, $email, $password]);
header("Location: ../login.php");
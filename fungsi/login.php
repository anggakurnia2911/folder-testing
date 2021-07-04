<?php
session_start();
require_once '../config.php';

if (!isset($_SESSION['email']) == 0) {
    header('Location: ../login.php');
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $sql = "SELECT * FROM `users` WHERE email = ? AND password = SHA1(?)";
        $q = $db->prepare($sql);
        $q->execute([$email, $password]);
        $count = $q->rowCount();
        if ($count == 1) {
            $user = $q->fetch(PDO::FETCH_ASSOC);
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['password'] = $password;
            header("Location: ../index.php");
            return;
        } else {
            echo "<script> alert('Email atau Password anda salah !'); </script>";
            header("Location: ../user.php");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
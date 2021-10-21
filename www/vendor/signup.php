<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $password_confirm = $_POST['pass2'];

    if ($password === $password_confirm) {

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`abon`,`phone`, `password`) VALUES ('$login','$phone', '$password')");

        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `abon` = '$login'");
        if (mysqli_num_rows($check_user) > 0) {            
            $_SESSION['message'] = 'signup';
        } else{            
            $_SESSION['message'] = 'error';
        }

        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>

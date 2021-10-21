<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['uname'];
    $password = md5($_POST['psw']);    
    

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `abon` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "abon" => $user['abon'],
            "name1" => $user['name1'],
            "name2" => $user['name2'],
            "phone" => $user['phone'],
            "type" => $user['type'],
            "date" => $user['date']
        ];
        $_SESSION['message'] = 'login';
        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>

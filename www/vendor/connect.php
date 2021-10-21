<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'svoboda');    
    mysqli_set_charset($connect, "utf8");

    if (!$connect) {
        die('Error connect to DataBase');
    }
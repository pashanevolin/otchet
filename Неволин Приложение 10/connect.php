<?php

    $connect = mysqli_connect('localhost', 'root', '', 'ekzamen');

    if (!$connect) {
        die('Error connect to DataBase');
    }
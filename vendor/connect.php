<?php

$connect = mysqli_connect('localhost', 'root', '', 'clients');

if (!$connect) {
    die('Error connect to DataBase');
}

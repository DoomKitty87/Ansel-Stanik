<?php

//Connection File
$host = 'localhost';
$username = 'DoomKitty87';
$pass = '$200^Carrot';
$dbname = 'website';
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);
$conn = new PDO($dsn, $username, $pass, $options);

<?php
session_start();
if ($_SESSION['loggedin'] != "true" || $_SESSION['admin'] != "true") {
    header("Location: login.php");
    die;
}
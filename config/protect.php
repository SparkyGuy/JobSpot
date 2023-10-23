<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['nome'])) {
    header("Location: error.html");
    exit();
}

?>
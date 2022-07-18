<?php
if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['userId'])) {
    session_destroy();
    header("Location: /pages/login"); 
    exit;
}
?>
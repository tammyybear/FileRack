<?php

session_start();
unset($_SESSION['role_type']);
unset($_SESSION['username']);
session_destroy();
header("Location: login.php");

?>
<?php

$_SESSION['login'] = false;
session_destroy();

echo "<script>window.location.replace('http://localhost/php-fred/index.php?page=accueil')</script>";

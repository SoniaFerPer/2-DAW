<?php
include_once 'sesion.php';
session_destroy(); //con esto destruimos la sesion
header('Location: index.php');
exit;



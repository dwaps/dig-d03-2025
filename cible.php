<?php

session_start();
require_once __DIR__ . "/data.php";

$_SESSION['newTitle'] = $_GET["newTitle"] ?? $title;

header('Location: /');

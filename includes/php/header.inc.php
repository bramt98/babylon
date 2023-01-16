<?php

session_start();
require('./config/db.php');

if (isset($_SESSION['userId'])) {

    $userId = $_SESSION['userId'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $user = $stmt->fetch();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Babylon</title>
</head>
<body>

<div class="masthead mb-4">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="text-white">BABYLON VALKENBURG</h1>
                <p1 class="text-white">Pizzaria & Grillroom</p1>
            </div>
        </div>
    </div>
</div>

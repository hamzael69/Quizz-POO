<?php

require_once '../utils/autoloader.php';

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Vous avez eu <?= $_SESSION['score'] ?> bonnes réponses</h1>
</body>
</html>
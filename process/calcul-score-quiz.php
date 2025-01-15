<?php

require_once '../utils/autoloader.php';

$qcmManager = new QcmManager();

// TODO: verification formulaire

$qcmManager->handleQuizSubmission($_POST);

header("Location: ../public/result.php");
<?php

include_once("../utils/autoloader.php");

// Crée une instance Qcm
$qcm = new Qcm("Johnny Halliday");

// Crée une instance Question
$question = new Question("Johnny ou Madison?");

// Crée l'instance de l'objet Answer et la mets dans une variable $answers
$answers =  [
    new Answer(true, "Madison"),
    new Answer(false, "Johnny"),
    new Answer(false, "Ton père")

];

// Appelle les différentes fonctions
$qcm->addQuestion($question);
$question->setAnswers($answers);


var_dump($qcm);

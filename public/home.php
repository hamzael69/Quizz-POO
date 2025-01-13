<?php 

include_once("../utils/autoloader.php");


$qcm = new Qcm("Johnny Halliday");

$question = new Question("Johnny ou Madison?");
$answers =  [new Answer(true, "Madison"),
new Answer(false, "Johnny"),
new Answer(false, "Ton père")];


$qcm->addQuestion($question);
$question->setAnswers($answers);


var_dump($qcm);
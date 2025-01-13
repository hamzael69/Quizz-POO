<?php 

include_once("../utils/autoloader.php");


$qcm = new Qcm("Johnny Halliday");

$question = new Question("Johnny ou Madison?");
$answers =  new Answer(true, "Madison");


$qcm->addQuestion($question);
$question->addAnswer($answer);


var_dump($qcm);
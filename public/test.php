<?php
include_once '../utils/autoloader.php';



$questionRepository = new QuestionRepository();
$questions = $questionRepository->find(2);
var_dump($questions);

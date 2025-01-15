<?php
include_once '../utils/autoloader.php';





// $qcmMapper = new QcmMapper() ;
// $answerRepository = new AnswerRepository();
// $answers = $answerRepository->find(3);
$qcmRepository = new QcmRepository();
$qcm = $qcmRepository->find(2);
// $answerMapper = new AnswerMapper();


// $qcm = $qcmMapper->mapToObject($data) ;
// var_dump($qcm);
// var_dump($answers);
var_dump($qcm);
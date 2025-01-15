<?php
include_once '../utils/autoloader.php';

// $data = [
//     'id' => 1 , 
//     'themeName' => "Renaud"
// ];


// $qcmMapper = new QcmMapper() ;

$qcmRepository = new QcmRepository();

$qcm = $qcmRepository->find(3);
var_dump($qcm);

// $qcm = $qcmMapper->mapToObject($data) ;
// var_dump($qcm);
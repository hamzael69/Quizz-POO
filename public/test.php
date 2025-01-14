<?php
include_once '../utils/autoloader.php';

$data = [
    'id' => 1 , 
    'themeName' => "Renaud"
];


$qcmMapper = new QcmMapper() ;

$qcm = $qcmMapper->mapToObject($data) ;
var_dump($qcm);
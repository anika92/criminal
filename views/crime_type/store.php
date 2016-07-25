<?php
include_once ('../../vendor/autoload.php');
use App\Controller\CrimeType;

$police_info = new CrimeType();
$police_info->prepare($_POST)->store();

//var_dump($police_info);
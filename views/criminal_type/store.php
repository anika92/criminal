<?php
include_once ('../../vendor/autoload.php');
use App\Controller\CriminalType;

$police_info = new CriminalType();
$police_info->prepare($_POST)->store();

//var_dump($police_info);
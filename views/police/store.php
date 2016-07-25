<?php
include_once ('../../vendor/autoload.php');
use App\Controller\RegPolice;

$police_info = new RegPolice();
$police_info->prepare($_POST)->store();

//var_dump($police_info);
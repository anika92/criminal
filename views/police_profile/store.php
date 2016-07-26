<?php
include_once ('../../vendor/autoload.php');
use App\Controller\RegPolice;

$police_info = new RegPolice();
$police_info->prepare($_POST)->policestore();

//var_dump($p
<?php
include_once ('../../vendor/autoload.php');
use App\Controller\User;

$police_info = new User();
$police_info->prepare($_POST)->userstore();

//var_dump($police_info);
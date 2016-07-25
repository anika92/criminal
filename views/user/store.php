<?php
include_once ('../../vendor/autoload.php');
use App\Controller\User;

$user_info = new User();
$user_info->prepare($_POST)->store();

//var_dump($police_info);
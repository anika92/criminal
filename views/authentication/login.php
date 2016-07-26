<?php
session_start();
include_once('../../vendor/autoload.php');

use App\Controller\Auth;
use App\Message\Message;
use App\Utility\Utility;

$auth= new Auth();
$status= $auth->logged_in();

if($status == TRUE) {
    Message::message("logged in");
    Utility::redirect('../welcome.php');
}
else{
    $status= $auth->prepare($_POST)->is_registered();
    if($status){
        $_SESSION['user_email']=$_POST['email'];
        $_SESSION['usertype']=$_POST['userType'];
        return Utility::redirect('../welcome.php');
    }else{
        Message::message("Wrong username or password");
        return Utility::redirect('../../index.php');

    }
}


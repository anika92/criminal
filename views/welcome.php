<?php
include_once('../vendor/autoload.php');

use App\Controller\Auth;
use App\Message\Message;
use App\Utility\Utility;



$auth= new Auth();
$status= $auth->logged_in();

if($status == TRUE) {
    echo "Welcome ".$_SESSION['user_email'];
}
?>
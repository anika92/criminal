<?php
namespace App\Controller;
session_start();
use App\Model\Database as DB;
use App\Utility\Utility;

class Auth extends DB
{
    public $email = "";
    public $password = "";
    public $usertype="";

    public function __construct()
    {
        parent::__construct();
    }

    public function prepare($data = Array())
    {
        if (array_key_exists('email', $data)) {
            $this->email = $data['email'];
        }
        if (array_key_exists('password', $data)) {
            $this->password = md5($data['password']);
        }
        if (array_key_exists('userType', $data)) {
            $this->usertype = $data['userType'];
        }
        return $this;

    }

    public function is_exist()
    {
        $query = "SELECT * FROM `admin` WHERE `email`='" . $this->email . "'";

        $result = mysqli_query($this->conn, $query);
        //$row= mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) > 0) {
            return TRUE;
        } else {
            return FALSE;
        }

    }

    public function is_registered()
    {
        $db="";
        if($this->usertype=="Admin"){
            $db='admin';
        }
        if($this->usertype=="Police"){
            $db='police_info';
        }
        if($this->usertype=="Users"){
            $db='user_info';
        }
        $query = "SELECT * FROM $db WHERE `email`='" . $this->email . "' AND `password`='" . $this->password . "'";

        $result = mysqli_query($this->conn, $query);
        //$row= mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function logged_in()
    {
        if ((array_key_exists('user_email', $_SESSION)) && (!empty($_SESSION['user_email']))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function log_out(){
        $_SESSION['user_email']="";
        return TRUE;
    }







}


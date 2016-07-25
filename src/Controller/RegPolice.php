<?php
namespace App\Controller;
use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
class RegPolice extends DB
{
    public $id = "";
    public $fullName = "";
    public $email = "";
    public $password = "";
    public $n_id="";
    public $police_code="";



    public function __construct()
    {
        parent::__construct();
    }

    public function prepare($data=Array()){
        if(array_key_exists('id',$data)){
            $this->id=$data['id'];
        }
        if(array_key_exists('name',$data)){
            $this->fullName=$data['name'];
        }
        if(array_key_exists('email',$data)){
            $this->email=$data['email'];
        }
        if(array_key_exists('password',$data)){
            $this->password=md5($data['password']);
        }

        if(array_key_exists('police_code',$data)){
            $this->police_code=$data['police_code'];
        }
        if(array_key_exists('nid',$data)){
            $this->n_id=$data['nid'];
        }



        return $this;

    }

    public function store(){
        $query="INSERT INTO `criminaldb`.`police_info` (`name`, `email`, `password`, `police_code`, `nid`) VALUES ('".$this->fullName."', '".$this->email."', '".$this->password."', '".$this->police_code."', '".$this->n_id."')";
        $result=mysqli_query($this->conn,$query);
        if($result){
            Message::message("<div class=\"alert alert-success\">
  <strong>Success!</strong> Sucessfully Registered, you can log in now.
</div>");
            Utility::redirect('../../index.php');

        } else {
            Message::message("<div class=\"alert alert-danger\">
  <strong>Error!</strong> Data has not been stored successfully.
    </div>");
            Utility::redirect('../../index.php');

        }
    }
    public function profilestore(){
        $query="INSERT INTO `criminaldb`.`police_info` (`name`, `email`, `password`, `police_code`, `nid`) VALUES ('".$this->fullName."', '".$this->email."', '".$this->password."', '".$this->police_code."', '".$this->n_id."')";
        $result=mysqli_query($this->conn,$query);
        if($result){
            Message::message("<div class=\"alert alert-success\">
  <strong>Success!</strong> Sucessfully Registered, you can log in now.
</div>");
            Utility::redirect('../../index.php');

        } else {
            Message::message("<div class=\"alert alert-danger\">
  <strong>Error!</strong> Data has not been stored successfully.
    </div>");
            Utility::redirect('../../index.php');

        }
    }

}
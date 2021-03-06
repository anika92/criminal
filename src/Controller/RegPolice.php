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
    public $designation="";
    public $thana="";
    public $address="";
    public $city="";
    public $postal="";
    public $gender="";
    public $phone="";
    public $image="";



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
        if(array_key_exists('designation',$data)){
            $this->designation=$data['designation'];
        }



        if(array_key_exists('thana',$data)){
            $this->thana=($data['thana']);
        }

        if(array_key_exists('address',$data)){
            $this->address=($data['address']);
        }

        if(array_key_exists('city',$data)){
            $this->city=($data['city']);
        }

        if(array_key_exists('postal',$data)){
            $this->postal=($data['postal']);
        }

        if(array_key_exists('radio',$data)){
            $this->gender=($data['radio']);
        }

        if(array_key_exists('phone',$data)){
            $this->phone=($data['phone']);
        }

        if(array_key_exists('image',$data)){
            $this->image=($data['image']);
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
    public function policestore(){
        $query="INSERT INTO `police_profile` (`designation`, `thana`, `city`, `address`, `postal`, `gender`, `phone`, `image`) VALUES ('".$this->designation."', '".$this->thana."', '".$this->city."', '".$this->address."', '".$this->postal."', '".$this->gender."', '".$this->phone."', '".$this->image."')";
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
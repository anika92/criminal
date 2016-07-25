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

    public $gender = "";
    public $street = "";
    public $city = "";
    public $state = "";
    public $postalCode = "";

    public $country = "";
    public $phone = "";
    public $nid = "";
    public $image = "";
    public $policeStation = "";

    public function __construct()
    {
        parent::__construct();
    }

    public function prepare($data=Array()){
        if(array_key_exists('fullName',$data)){
            $this->fullName=$data['fullName'];
        }
        if(array_key_exists('email',$data)){
            $this->email=$data['email'];
        }
        if(array_key_exists('password',$data)){
            $this->password=md5($data['password']);
        }

        if(array_key_exists('gender',$data)){
            $this->gender=$data['gender'];
        }
        if(array_key_exists('address[addr1]',$data)){
            $this->street=$data['address[addr1]'];
        }
        if(array_key_exists('address[city]',$data)){
            $this->city=$data['address[city]'];
        }

        if(array_key_exists('address[state]',$data)){
            $this->state=$data['address[state]'];
        }
        if(array_key_exists('address[zip]',$data)){
            $this->postalCode=$data['address[zip]'];
        }
        if(array_key_exists('address[country]',$data)){
            $this->country=$data['address[country]'];
        }
        if(array_key_exists('phone',$data)){
            $this->phone=$data['phone'];
        }
        if(array_key_exists('nid',$data)){
            $this->nid=$data['nid'];
        }
        if(array_key_exists('image',$data)){
            $this->image=$data['image'];
        }
        if(array_key_exists('policeStation',$data)){
            $this->policeStation=$data['policeStation'];
        }

        return $this;

    }

    public function store(){
        $query="INSERT INTO `loginsignupb21`.`users` (`first_name`, `last_name`, `email`, `password`) VALUES ('".$this->first_name."', '".$this->last_name."', '".$this->email."', '".$this->password."')";
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
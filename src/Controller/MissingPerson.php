<?php
namespace App\Controller;
use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
class MissinPerson extends DB
{
    public $id = "";
    public $name = "";

    public $description = "";
    public $age = "";
    public $gender = "";
    public $image = "";
    public $street = "";
    public $city = "";
    public $state = "";
    public $postalCode = "";

    public $country = "";
    public $date = "";
    public $status = "";

    public $addedBy = "";
    public $updatedBy = "";
    public function __construct()
    {
        parent::__construct();
    }

    public function prepare($data=Array()){
        if(array_key_exists('id',$data)){
            $this->id=$data['id'];
        }
        if(array_key_exists('name',$data)){
            $this->name=$data['name'];
        }
        if(array_key_exists('description',$data)){
            $this->description=$data['description'];
        }

        if(array_key_exists('age',$data)){
            $this->age=$data['age'];
        }
        if(array_key_exists('gender',$data)){
            $this->gender=$data['gender'];
        }
        if(array_key_exists('image',$data)){
            $this->image=$data['image'];
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

        if(array_key_exists('date',$data)){
            $this->date=$data['date'];
        }
        if(array_key_exists('status',$data)){
            $this->status=$data['status'];
        }
        if(array_key_exists('added_by',$data)){
            $this->addedBy=$data['added_by'];
        }
        if(array_key_exists('updated_by',$data)){
            $this->updatedBy=$data['updated_by'];
        }



        return $this;

    }

    public function store(){
        $query="INSERT INTO `criminaldb`.`missingtable` ( `missing_name`, `Description`, `age`, `gender`, `image`, `address`, `status`, `added_by`, `updated_by`) VALUES ( '{$this->name}', '{$this->description}', '{$this->age}', '{$this->gender}', '{$this->image}', '{$this->street}', 'aa', 'aa', 'aa');";
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
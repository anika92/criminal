<?php
namespace App\Controller;
use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
class CriminalType extends DB
{
    public $id = "";
    public $criminalType = "";




    public function __construct()
    {
        parent::__construct();
    }

    public function prepare($data=Array()){
        if(array_key_exists('id',$data)){
            $this->id=$data['id'];
        }
        if(array_key_exists('criminal_type',$data)){
            $this->criminalType=$data['criminal_type'];
        }



        return $this;

    }

    public function store(){
        $query="INSERT INTO `criminaldb`.`criminaltable` ( `c_t_type`) VALUES ('{$this->criminalType}');";
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
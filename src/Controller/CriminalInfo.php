<?php
namespace App\Controller;
use App\Message\Message;
use App\Utility\Utility;
use App\Model\Database as DB;
class CriminalInfo extends DB
{
    public $id = "";
    public $name = "";
    public $crimeType = "";
    public $criminalType = "";
    public $age = "";
    public $height = "";
    public $description = "";
    public $gender = "";
    public $address = "";
    public $image = "";


    public function __construct()
    {
        parent::__construct();
    }

    public function prepare($data = Array())
    {
        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }
        if (array_key_exists('name', $data)) {
            $this->name = $data['name'];
        }
        if (array_key_exists('multiple', $data)) {
            $this->crimeType = $data['multiple'];
        }
        if (array_key_exists('select', $data)) {
            $this->criminalType = $data['select'];
        }
        if (array_key_exists('age', $data)) {
            $this->age = $data['age'];

        }

        if (array_key_exists('height', $data)) {
            $this->height = $data['height'];
        }
        if (array_key_exists('description', $data)) {
            $this->description = $data['description'];
        }
        if (array_key_exists('gender', $data)) {
            $this->gender = $data['gender'];
        }
        if (array_key_exists('address', $data)) {
            $this->address = $data['address'];
        }
        if (array_key_exists('image', $data)) {
            $this->image = $data['image'];
        }


        return $this;

    }

    public function store()
    {
        $query="INSERT INTO `criminal_info` ( `name`, `crime_type`, `c_t_type`, `age`, `height`, `description`, `gender`, `address`, `image`) VALUES ( '".$this->name."', '".$this->crimeType."', '".$this->criminalType."', '".$this->age."', '".$this->height."', '".$this->description."', '".$this->gender."', '".$this->address."', '".$this->image."');";
//        $query="INSERT INTO `criminal_info` (`name`, `crime_type`, `c_t_type`, `age`, `height`, `description`, `gender`, `address`, `image`) VALUES ('".$this->name."', '".$this->crimeType."', '".$this->criminalType."', '".$this->age."', '".$this->height."', '".$this->description."', '".$this->gender."', '".$this->address."', '".$this->image."');";
//        $query = "INSERT INTO `criminaldb`.`criminal_info` ( `name`, `crime_type`, `criminal_type`, `age`, `height`, `description`, `gender`, `address`, `image`) VALUES ( '{$this->name}', '{$this->crimeType}', '{$this->criminalType}', '{$this->age}', '{$this->height}', '{$this->description}', '{$this->gender}', '{$this->address}', '{$this->image}');');";
//        echo $query;
//        die();
        $result = mysqli_query($this->conn, $query);

        if ($result) {
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
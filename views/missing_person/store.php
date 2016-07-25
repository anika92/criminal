<?php
include_once('../../vendor/autoload.php');

use App\Controller\MissingPerson;

$missing= new MissingPerson();

if((isset($_FILES['image']))&& !empty($_FILES['image']['name'])){
    $imageName=time().$_FILES['image']['name'];
    $temporaryLocation= $_FILES['image']['tmp_name'];
    move_uploaded_file($temporaryLocation,'../../Resources/Images/missing_persons/'. $imageName);
    $_POST['image']= $imageName;
}


$missing->prepare($_POST)->store();
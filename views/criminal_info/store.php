<?php
include_once ('../../vendor/autoload.php');
use App\Controller\CriminalInfo;
use App\Utility\Utility;
//Utility::dd($_FILES);
$array_values=$_POST['multiple'];
//Utility::d($_POST['Hobby']);
$comma_separated_value=implode(",",$array_values);


$_POST['multiple']=$comma_separated_value;

if((isset($_FILES['image']))&& !empty($_FILES['image']['name'])){
    $imageName=time().$_FILES['image']['name'];

    $temporaryLocation= $_FILES['image']['tmp_name'];
    move_uploaded_file($temporaryLocation,'../../Resources/images/'. $imageName);
    $_POST['image']= $imageName;


}
$criminal_info = new CriminalInfo();

$criminal_info->prepare($_POST)->store();
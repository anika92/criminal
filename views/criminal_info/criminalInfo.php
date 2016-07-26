<?php
use App\Controller\CrimeType;
use App\Controller\CriminalType;
include_once ('../../vendor/autoload.php');
$_crimetype=new CrimeType();
$allCrimeType=$_crimetype->index();

$_criminaltype=new CriminalType();
$allCriminalType=$_criminaltype->index();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>My form - Formoid jquery form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="store.php" enctype="multipart/form-data"><div class="title"><h2>My form</h2></div>
	<div class="element-input">
		<label class="title"></label><div class="item-cont">
			<input class="large" type="text" name="name" placeholder="Name"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-multiple"><label class="title"></label><div class="item-cont"><div class="large"><select data-no-selected="Nothing selected" name="multiple[]" multiple="multiple" >
					<?php
					foreach($allCrimeType as $crime_type){

					?>
					<option value="<?php $crime_type ?>"><?php echo $crime_type ?></option>
				 <?php } ?> </select><span class="icon-place"></span></div></div></div>
	<div class="element-select"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" >
						<?php
						foreach($allCriminalType as $criminal_type){

						?>
						<option value="<?php $criminal_type ?>"><?php echo $criminal_type ?></option>

						 <?php }?></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-input">
		<label class="title"></label>
		<div class="item-cont">
			<input class="large" type="text" name="age" placeholder="Age"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-number"><label class="title">

		</label><div class="item-cont">
			<input class="large" type="text" min="0" max="100" name="number" placeholder="Height" value=""/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-textarea"><label class="title"></label><div class="item-cont"><textarea class="medium" name="description" cols="20" rows="5" placeholder="Description"></textarea><span class="icon-place"></span></div></div>
	<div class="element-radio"><label class="title">Gender</label>		<div class="column column1"><label><input type="radio" name="gender" value="Male" /><span>Male</span></label><label><input type="radio" name="radio" value="Female" /><span>Female</span></label></div><span class="clearfix"></span>
	</div>
	<div class="element-input">
		<label class="title"></label><div class="item-cont">
			<input class="large" type="text" name="address" placeholder="Address"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-phone">
		<label class="title"></label>
		<div class="item-cont">
			<input class="large file_input" type="file"  name="image" placeholder="Upload image" value=""/>

		</div>
	</div>
	<div class="submit"><input type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">jquery form</a> Formoid.com 2.9</p><script type="text/javascript" src="formoid_files/formoid1/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
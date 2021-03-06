<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>My form - Formoid bootstrap forms</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="../../Resources/formoid_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="../../Resources/formoid_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="store.php"><div class="title"><h2>My form</h2></div>

	<div class="element-select"><label class="title"></label><div class="item-cont">
			<div class="large"><span>
					<select name="thana" >

		<option value="Kotowali">Kotowali</option>
		<option value="Pachlaish">Pachlaish</option>
		<option value="Double Muring">Double Muring</option>
		<option value="Hathazari">Hathazari</option></select><i></i>
					<span class="icon-place"></span></span></div></div>
	</div>
	<div class="element-select"><label class="title"></label><div class="item-cont">
			<div class="large"><span>
					<select name="city" >

		<option value="Chittagong">Chittagong</option>
		<option value="Dhaka">Dhaka</option>
		<option value="Khulna">Khulna</option>
		<option value="Barishal">Barishal</option>
		<option value="Comilla">Comilla</option></select>
					<i></i><span class="icon-place"></span></span>
			</div>
		</div>
	</div>
	<div class="element-input">
		<label class="title"></label>
		<div class="item-cont">
			<input class="large" type="text" name="address" placeholder="Address"/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-number"><label class="title"></label>
		<div class="item-cont">
			<input class="large" type="number" name="postal" placeholder="Postal Code" value=""/>
			<span class="icon-place"></span>
		</div>
	</div>
	<div class="element-radio">
		<label class="title">Gender</label>
		<div class="column column1">
			<label><input type="radio" name="radio" value="Male" />
				<span>Male</span></label>
			<label><input type="radio" name="radio" value="Female" />
				<span>Female</span></label></div><span class="clearfix"></span>
	</div>
	<div class="element-phone">
		<label class="title"></label>
		<div class="item-cont">
			<input class="large" type="number"  maxlength="24" name="phone" placeholder="Phone" value=""/>
			<span class="icon-place"></span>
		</div>
	</div>

	<div class="element-phone">
		<label class="title"></label>
		<div class="item-cont">
			<input class="large file_input" type="file"  name="image" placeholder="Upload image" value=""/>

		</div>
	</div>
<div class="submit">
	<input type="submit" value="Submit"/>
</div></form><p class="frmd">
	<a href="http://formoid.com/v29.php">bootstrap forms</a> Formoid.com 2.9</p>
<script type="text/javascript" src="../../Resources/formoid_files/formoid1/formoid-solid-blue.js">

</script>
<!-- Stop Formoid form-->



</body>
</html>

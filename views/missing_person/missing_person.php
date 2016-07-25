<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <title>Missing Person - Formoid javascript form validation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="store.php"><div class="title"><h2>Missing Person</h2></div>
    <div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="name" required="required" placeholder="Name"/><span class="icon-place"></span></div></div>
    <div class="element-textarea"><label class="title"></label><div class="item-cont"><textarea class="medium" name="description" cols="20" rows="5" placeholder="Description"></textarea><span class="icon-place"></span></div></div>
    <div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="age" placeholder="Age"/><span class="icon-place"></span></div></div>
    <div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="height" placeholder="Height"/><span class="icon-place"></span></div></div>

    <div class="element-radio"><label class="title">Gender</label>		<div class="column column1"><label><input type="radio" name="gender" value="Male" /><span>Male</span></label><label><input type="radio" name="gender" value="Female" /><span>Female</span></label></div><span class="clearfix"></span>
    </div>

    <div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="file" name="image" placeholder="Image"/><span class="icon-place"></span></div></div>
    <div class="element-address">
        <label class="title"></label>
        <span class="addr1"><input placeholder="Address" type="text" name="address[addr1]" /><span class="icon-place"></span></span>
    </div>
    <div class="element-date"><label class="title"></label><div class="item-cont"><input class="large" data-format="yyyy-mm-dd" type="date" name="date" placeholder="Missing Date"/><span class="icon-place"></span></div></div>
    <div class="element-select">
        <label class="title"></label>
        <div class="item-cont">
            <div class="large"><span><select name="select" >

                        <option value="Still Missing" name="status">Still Missing</option>
                        <option value="Found" name="status">Found</option>
                    </select><i></i><span class="icon-place"></span></span>
            </div>
        </div>

    </div>
    <div class="element-input">
        <label class="title"></label>
        <div class="item-cont"><input class="large" type="text" name="added_by" placeholder="Added By"/>
            <span class="icon-place"></span></div></div>
    <div class="element-input">
        <label class="title"></label>
        <div class="item-cont"><input class="large" type="text" name="updated_by" placeholder="Updated By"/>
            <span class="icon-place"></span></div></div>

    <div class="submit"><input type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">javascript form validation</a> Formoid.com 2.9</p><script type="text/javascript" src="formoid_files/formoid1/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
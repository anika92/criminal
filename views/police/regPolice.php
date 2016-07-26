<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Police Registration - Formoid bootstrap forms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="../../Resources/formoid_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="../../Resources/formoid_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="store.php"><div class="title"><h2>Police Registration</h2></div>

    <div class="element-input">
        <label class="title"></label>
        <div class="item-cont">
            <input class="large" type="text" name="name" placeholder="Name"/>
            <span class="icon-place"></span>
        </div>
    </div>
    <div class="element-email">
        <label class="title"><span class="required">*</span>
        </label><div class="item-cont">
            <input class="large" type="email" name="email" value="" required="required" placeholder="Email"/>
            <span class="icon-place"></span>
        </div>
    </div>
    <div class="element-password">
        <label class="title">
            <span class="required">*</span>
        </label><div class="item-cont">
            <input class="large" type="password" name="password" value="" required="required" placeholder="Password"/>
            <span class="icon-place"></span>
        </div>
    </div>

        <div class="element-input">
            <label class="title"></label>
            <div class="item-cont">
                <input class="large" type="text" name="police_code" placeholder="police code"/>
                <span class="icon-place"></span>
            </div>
        </div>

    <div class="element-input">
        <label class="title"></label>
        <div class="item-cont">
            <input class="large" type="text" name="nid" placeholder="NID"/>
            <span class="icon-place"></span>
        </div>
    </div>

    <div class="submit">
        <input type="submit" value="Submit"/>
    </div></form><p class="frmd">
    <a href="http://formoid.com/v29.php">bootstrap forms</a> Formoid.com 2.9</p>
<script type="text/javascript" src="../../Resources/formoid_files/formoid1/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->



</body>
</html>

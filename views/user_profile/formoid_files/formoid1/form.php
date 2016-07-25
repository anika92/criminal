<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>My form</h2></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" >

		<option value="OC">OC</option>
		<option value="SI">SI</option>
		<option value="ASP">ASP</option>
		<option value="SP">SP</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select1"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select1" >

		<option value="Kotowali">Kotowali</option>
		<option value="Pachlaish">Pachlaish</option>
		<option value="Double Muring">Double Muring</option>
		<option value="Hathazari">Hathazari</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select2"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select2" >

		<option value="Chittagong">Chittagong</option>
		<option value="Dhaka">Dhaka</option>
		<option value="Khulna">Khulna</option>
		<option value="Barishal">Barishal</option>
		<option value="Comilla">Comilla</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="Address"/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="number" placeholder="Number" value=""/><span class="icon-place"></span></div></div>
	<div class="element-radio<?php frmd_add_class("radio"); ?>"><label class="title">Gender</label>		<div class="column column1"><label><input type="radio" name="radio" value="Male" /><span>Male</span></label><label><input type="radio" name="radio" value="Female" /><span>Female</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-phone<?php frmd_add_class("phone"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" placeholder="Phone" value=""/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>
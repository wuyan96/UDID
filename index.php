<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" name="viewport" id="viewport" />
<title>获取您的UDID</title>
<body>
<div id="content">
<?php
$UDID =  $_GET['UDID'] ? $_GET['UDID'] : $_POST['UDID'];
?>
UUDI:<input style="" name="" value="$udid" /> 
 
<a class="buttons" href="udid.mobileconfig" target="_blank">1.点击获取您的UDID</a>
 
<a class="buttons" href="yourapp://?function=valid&uuid=$udid">2.验证ipa</a>
 
</div>
</body>
</html>
<?php
$data = file_get_contents('php://input');
//这里可以进行xml解析
//header("Location: http://dev.skyfox.org/udid?data=".rawurlencode($data)); //有人说必须得目录形式才会安装成功
header('HTTP/1.1 301 Moved Permanently');  //这里一定要301跳转,否则设备安装会提示"无效的描述文件"
header("Location: https://test.tosneaker.com/index.php?".$params);
?>
<?php
header("Content-Type:text/html;charset=utf-8");
$time = '8月2日03:05分';
$gengxin  = '已更新';
$gengxinqi = '8月10晚23.50分12.7.R3修复小BUG！更新器更新即可';       
$gengxinqi2 = '修复D-60弹夹无法购买问题！';                      // 文件有效时间，单位秒，可自定义


echo "$gengxinqi</br>";


//<!--JS 页面自动刷新 -->
print "";
//print time();
print "<br>";
//<!--JS 页面自动刷新 -->
print ("<script type=\"text/javascript\">");
print ("function fresh_page()"); 
print ("{");
print ("window.location.reload();");
print ("}"); 
print ("setTimeout('fresh_page()',60000);"); 
print ("</script>");

?>
<?php
	$siteinfo = array(
		"site_name"	=>	"WNGAMEBOX-TKF离线资源",
		"title"		=>	"WNGAMEBOX-TKF离线资源",
		"keywords"	=>	"WNGAMEBOX旗下站点"
		
	);

	//需要忽略的目录
	$ignore	= array(
		".",
		".git",
		".user.ini",
		".htaccess",
		"favicon.ico",
		"functions",
		"config.php",
		"index.php",
		"static",
		"LICENSE",
		"template",
		"cache.php",
		"indexes.php",
		"zdir",
      "EFT-AIO-8642-0820.7z"
	);
	//设置参数
	$config = array(
		//需要读取的目录，如:/data/wwwroot/soft.xiaoz.org
		"thedir"	=>	'',
		"allowip"	=>	array(
			//"0.0.0.0",			//注意设置为0.0.0.0则不限制IP，更多说明请参考帮助文档：https://doc.xiaoz.me/#/zdir/
			"::1",
			"127.0.0.1",
			"192.168.1."
		),
		"username"	=>	"zdir",			//用户名
		"password"	=>	"xiaoz.me",		//密码
		"auth"		=>	FALSE			//是否开启访问验证
	);	
?>
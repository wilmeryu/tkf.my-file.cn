<!DOCTYPE html>
<html lang="zh-cmn-Hans" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title><?php echo $siteinfo['title']; ?></title>
	<meta name="generator" content="EverEdit" />
	<meta name="author" content="xiaoz.me" />
	<meta name="keywords" content="<?php echo $siteinfo['keywords']; ?>" />
	<meta name="description" content="<?php echo $siteinfo['description']; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico"  type="image/x-icon" />
	<link rel="stylesheet" href="./static/layui/css/layui.css">
	<link rel='stylesheet' href='./static/style.css?v=<?php echo $version; ?>'>
	<link rel="stylesheet" href="./static/font-awesome/css/font-awesome.min.css">
	<?php
		//判断统计代码是否存在
		if( file_exists('./static/tongji.js') ) {
	?>
	<script type="text/javascript" src="./static/tongji.js"></script>
	<?php } ?>
</head>
<body>
	<!--全站两侧广告位-->
	
    <!--全站两侧广告位END-->
	<!--顶部导航栏-->
	<div class = "header">
        <div class = "layui-container">
            <div class = "layui-row">
                <div class = "layui-col-lg12">
	                <div class="logo layui-hide-xs layui-hide-sm layui-show-md-block">
		                <h1 style="font-size:1.7em;font-weight:bold;"><a href="./">
			                <?php
			                	if( @$siteinfo['site_name'] ){
				                	echo $siteinfo['site_name'];
			                	}
			                	else {
				                	echo "<i class='fa fa-sitemap' aria-hidden='true'></i> Zdir";
			                	}
			                ?>
		                </a></h1>
	                </div>
	                <div class="logo layui-hide-lg" style = "width:100%;">
		                <h1 style="font-size:1.7em;font-weight:bold;text-align:center;"><a href="./">
			                <?php
			                	if( @$siteinfo['site_name'] ){
				                	echo $siteinfo['site_name'];
			                	}
			                	else {
				                	echo "<i class='fa fa-sitemap' aria-hidden='true'></i> Zdir";
			                	}
			                ?>
		                </a></h1>
	                </div>
                    <div class = "layui-hide-xs">
                        <ul class="layui-nav menu" lay-filter="">
                          
                            <li class="layui-nav-item"><a href="https://wngamebox.cn" target = "_blank"><i class="layui-icon">&#xe60b;</i> 返回主站</a></li>
                        </ul>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 顶部导航栏END -->
<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh_CN" style="overflow: hidden;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta charset="utf-8">
<title><?php echo ($f_siteName); ?> <?php echo ($f_siteTitle); ?></title>

<meta name="description" content="This is page-header (.page-header &gt; h1)">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">

<link href="tpl/static/simpleboot/css/simplebootadmin.css" rel="stylesheet">
<link href="tpl/static/simpleboot/font-awesome/4.1.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
<!--[if IE 7]>
	<link rel="stylesheet" href="tpl/static/simpleboot/simpleboot/font-awesome/4.1.0/css/font-awesome-ie7.min.css{$js_debug}">
<![endif]-->
<link rel="stylesheet" href="tpl/static/simpleboot/themes/flat/simplebootadminindex.min.css?">
<!--[if lte IE 8]>
	<link rel="stylesheet" href="tpl/static/simpleboot/simpleboot/css/simplebootadminindex-ie.css?{$js_debug}" />
<![endif]-->

<script>
//全局变量
var GV = {
	HOST:"{$_SERVER['HTTP_HOST']}",
    DIMAUB: "__ROOT__/",
    JS_ROOT: "statics/js/",
    TOKEN: ""
};
</script>


<?php if(APP_DEBUG): ?><style>
#think_page_trace_open{left: 0 !important;
right: initial !important;}			
</style><?php endif; ?>

</head>

<body style="min-width:900px;" screen_capture_injected="true">
	<div id="loading"><i class="loadingicon"></i><span>正在加载...</span></div>
	<div id="right_tools_wrapper">
		<!--<span id="right_tools_clearcache" title="清除缓存" onclick="javascript:openapp('{:u('admin/setting/clearcache')}','right_tool_clearcache','清除缓存');"><i class="fa fa-trash-o right_tool_icon"></i></span>
		--><span id="refresh_wrapper" title="刷新当前页" ><i class="fa fa-refresh right_tool_icon"></i></span>
	</div>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a href="<?php echo ($f_siteUrl); ?>/index.php" class="brand"> <small> 
				<!--<img src="<?php echo ($f_logo); ?>">-->
						<?php echo ($f_siteName); ?>后台
				</small>
				</a>
				     <div class="pull-left nav_shortcuts" > <a class="btn btn-small btn-success" href="<?php echo U('User/Index/index');?>" title="账号管理"> <i class="fa fa-users"></i> </a> <a class="btn btn-small btn-info" href="javascript:openapp('<?php echo U('Index/useredit');?>','index_postlist','修改密码');" title="修改密码"> <i class="fa fa-cog"></i> </a> <a class="btn btn-small btn-warning" href="<?php echo ($f_siteUrl); ?>/index.php" title="返回首页"  target="_parent"> <i class="fa fa-home"></i> </a> <a class="btn btn-small btn-danger" target="_parent" href="javascript:openapp('<?php echo U('Home/Index/logout');?>','index_clearcache','退出');" title="退出"> <i class="fa fa-play"></i> </a> </div>
				<ul class="nav simplewind-nav pull-right">
					<li class="light-blue" style="background:none;">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							
							<span class="user-info">
								<small>欢迎进入微信操作后台</small>
							</span>
							<i class="fa fa-caret-down"></i>
						</a>
						<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
							<li><a href="javascript:openapp('<?php echo U('Index/add',array('token'=>$token));?>','index_site','添加账号');"><i class="fa fa-cog"></i>添加账号</a></li>
							<li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_kfqq); ?>&site=qq&menu=yes" target="_blank"><i class="fa fa-user"></i>联系客服</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo U('Home/Index/logout');?>"><i class="fa fa-off"></i>退出</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="main-container container-fluid">

		<div class="sidebar" id="sidebar">
			<!-- <div class="sidebar-shortcuts" id="sidebar-shortcuts">
			</div> -->
			<div id="nav_wraper">
			<ul class="nav nav-list">
				<li class="open">
													<a href="#" class="dropdown-toggle">
								<i class="fa fa-caret-right"></i>
								<span class="menu-text">管理平台</span>
								<b class="arrow fa fa-angle-right"></b>
							</a>
							<ul class="submenu" style="display: block; ">
														<li>
						<a href="javascript:openapp('<?php echo U('Index/useredit',array('token'=>$token));?>','1Admin','修改密码');">
								<i class="fa fa-angle-double-right"></i>
								<span class="menu-text">修改密码</span>
							</a>
					</li>
					
									<li>
						<a href="javascript:openapp('<?php echo U('Index/info',array('token'=>$token));?>','2Admin','我的账号');">
								<i class="fa fa-angle-double-right"></i>
								<span class="menu-text">我的账号</span>
							</a>
					</li>
                    	<li>
						<a href="javascript:openapp('<?php echo U('Index/add',array('token'=>$token));?>','3Admin','添加公众账号');">
								<i class="fa fa-angle-double-right"></i>
								<span class="menu-text">添加公众账号</span>
							</a>
					</li>
                    	<li>
						<a href="javascript:openapp('<?php echo U('Alipay/index',array('token'=>$token));?>','4Admin','会员充值');">
								<i class="fa fa-angle-double-right"></i>
								<span class="menu-text">会员充值</span>
							</a>
					</li>
                    	<li>
						<a href="javascript:openapp('<?php echo U('Alipay/vip',array('token'=>$token));?>','5Admin','升降级');">
								<i class="fa fa-angle-double-right"></i>
								<span class="menu-text">升降级</span>
							</a>
					</li>
                    	<li>
						<a href="javascript:openapp('<?php echo U('Sms/index',array('token'=>$token));?>','6Admin','短信管理');">
								<i class="fa fa-angle-double-right"></i>
								<span class="menu-text">短信管理</span>
							</a>
					</li>
                    	<li>
						<a href="javascript:openapp('<?php echo U('Index/invite',array('token'=>$token));?>','7Admin','邀请好友');">
								<i class="fa fa-angle-double-right"></i>
								<span class="menu-text">邀请好友</span>
							</a>
					</li>
					
											</ul>	
												
					</li>
			</ul>
			</div>
			
		</div>

		<div class="main-content">
			<div class="breadcrumbs" id="breadcrumbs">
				<a id="task-pre" class="task-changebt">←</a>
				<div id="task-content">
				<ul class="macro-component-tab" id="task-content-inner">
					<li class="macro-component-tabitem noclose" app-id="0" app-url="/index.php?g=user&m=Index&a=info&token=>$token" app-name="首页">
						<span class="macro-tabs-item-text">首页</span>
					</li>
				</ul>
				<div style="clear:both;"></div>
				</div>
				<a id="task-next" class="task-changebt">→</a>
			</div>

			<div class="page-content" id="content">
				<iframe src="<?php echo U('Index/info',array('token'=>$token));?>" style="width:100%;height: 100%;" frameborder="0" id="appiframe-0" class="appiframe"></iframe>
			</div>
		</div>
	</div>
	
	<script src="tpl/static/simpleboot/js/jquery.js"></script>
	<script src="tpl/static/simpleboot/bootstrap/js/bootstrap.min.js"></script>
	<script>
	var b = $("#sidebar").hasClass("menu-min");
	var a = "ontouchend" in document;
	$(".nav-list").on(
			"click",
			function(g) {
				var f = $(g.target).closest("a");
				if (!f || f.length == 0) {
					return
				}
				if (!f.hasClass("dropdown-toggle")) {
					if (b && "click" == "tap"
							&& f.get(0).parentNode.parentNode == this) {
						var h = f.find(".menu-text").get(0);
						if (g.target != h && !$.contains(h, g.target)) {
							return false
						}
					}
					return
				}
				var d = f.next().get(0);
				if (!$(d).is(":visible")) {
					var c = $(d.parentNode).closest("ul");
					if (b && c.hasClass("nav-list")) {
						return
					}
					c.find("> .open > .submenu").each(
							function() {
								if (this != d
										&& !$(this.parentNode).hasClass(
												"active")) {
									$(this).slideUp(150).parent().removeClass(
											"open")
								}
							})
				} else {
				}
				if (b && $(d.parentNode.parentNode).hasClass("nav-list")) {
					return false;
				}
				$(d).slideToggle(150).parent().toggleClass("open");
				return false;
			});
	</script>
	<script src="tpl/static/simpleboot/index1.js"></script>





</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0031)http:///sign_in -->
<html  style=""  class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms no-csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta  charset="utf-8">
    <meta  http-equiv="X-UA-Compatible"  content="IE=edge">
      
  <title><?php echo C('site_name');?>_微信后台管理系统</title>

    <meta  name="description"  content="">
    <meta  name="viewport"  content="width=device-width, initial-scale=1">
    <link  rel="stylesheet"  href="<?php echo RES;?>/Css/normalize.css">
    <link  rel="stylesheet"  href="<?php echo RES;?>/Css/main.css">
    <link  rel="stylesheet"  href="<?php echo RES;?>/Css/anythingslider.css">
    <script  src="<?php echo RES;?>/Css/com-5cdb71a4da6f82e1769453d6007639a1.js"  type="text/javascript"></script>
    <script  src="<?php echo RES;?>/Css/modernizr-2.6.2.min.js"></script>
</head>
<body  class="bg-blue login-body">
  

  
<div  class="login-main">
  <div  class="mod-form form-login">
    <a  href="<?php echo C('site_url');?>/index.php?m=Index&a=reg"  class="btn-register"></a>
    <div  class="clearfix">
      <p  class="logo">
       <a href="/" style="background:none;width:160px;height:40px;margin: 5px 0;"><img src="<?php echo C('site_logo');?>" style="width:100%;height:100%;" /></a>
      </p>
    </div>
    <form  accept-charset="UTF-8"  action="<?php echo U('Users/checklogin');?>"  class="form-hor clearfix J-tips"  data-remote="true"  id="session_form"  method="post">
      <div  class="form-li">
        <div  class="li-lable">用户名</div>
        <div  class="li-input">
          <input  class="input"  id=""  name="username"  type="text">
        </div>
      </div>
      <div  class="form-li">
        <div  class="li-lable">密码</div>
        <div  class="li-input">
          <input  class="input"  id=""  name="password"  type="password">
        </div>
      </div>
      <div  class="login-tips">
      </div>
      <div  class="form-li">
        <div  class="li-lable w100">
          <label  class="checkbox">
            <input  type="checkbox">自动登录
          </label>
        </div>
        <div  class="li-input li-login">
          <input  type="hidden"  name="agent_name"  value="">
          <input  class="btn btn-green btn-submit"  data-disable-with="提交中..."  name="commit"  type="submit"  value="登录">
        </div>
      </div>
</form>  </div>
</div>
<div  class="bg-form">
  <span>微信营销解决方案领导品牌</span>
  <small>Micro-channel marketing solutions for leading brands</small>
</div>

<style>
.dingxiangred{
  width: 350px;
  margin: -35px auto 50px;
  padding-bottom: 15px;
  color: red;
  position: relative;
  left: 40px;
}
</style>

  
  
  <script  src="<?php echo RES;?>/Js/jquery.anythingslider.min.js"></script>
  <script  src="<?php echo RES;?>/Js/affix.js"></script>
  <script  src="<?php echo RES;?>/Js/scrollspy.js"></script>
  <script  src="<?php echo RES;?>/Js/plugins.js"></script>
  <script  src="<?php echo RES;?>/Js/main.js"></script>
	<script>
		$("#change_verify_code").click(function() {
			$image_code = $('#image_code');
			$image_code.attr("src", $image_code.attr("src") + Math.random());
			$('#verify_code').val('').focus();
			return false;
		});
	</script>


  
	<script>
		var frm = $("#session_form")
    // frm.submit( function(ev) {
		// 	ev.preventDefault();

		$("#session_form").bind("ajax:success", function(event, xhr, settings) {
			if(xhr["code"]==0){
				location.href="/console";
			}else{
			  $(".login-tips").html('<div class="li-error">' + xhr["message"] + '</div>')
			}
    });
	</script>
</body></html>
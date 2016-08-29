<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo ($f_siteTitle); ?> <?php echo ($f_siteName); ?></title>
<meta name="keywords" content="<?php echo ($f_metaKeyword); ?>" />
<meta name="description" content="<?php echo ($f_metaDes); ?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
</head>
<body id="nv_member" class="pg_CURMODULE">



<div id="wp" class="wp"><link href="./tpl/User/default/common/css/style.css" rel="stylesheet" type="text/css">
 <div class="contentmanage">
    <div class="developer">
       <div class="appTitle normalTitle" style="padding: 20px;">
        <h2>会员充值</h2>
        <div class="accountInfo">
        
        </div>
        <div class="clr"></div>
      </div>
      <div class="tableContent">
        <!--左侧功能菜单-->
        
<script src="./tpl/static/jquery-1.4.2.min.js" type="text/javascript"></script>

<div class="content">
<style>
.usercontent ul li{
float:none;
line-height:50px;
padding-left:10px;
}
input{border: 1px solid #DDDDDD;height:30px;width:200px;margin-left:10px;}
.new-btn-login{
    background-color: transparent;
    background-image: url("<?php echo RES;?>/images/img/new-btn-fixed.png");
    border: medium none;
	border:1px solid red;
	
}
.new-btn-login{
    background-position: 0 -198px;
    width: 82px;
	color: #FFFFFF;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0 10px 3px;
	
}
.new-btn-login:hover{
	background-position: 0 -167px;
	width: 82px;
	color: #FFFFFF;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0 10px 3px;
}
.bottonbox{
border: 1px solid #D74C00;
padding: 1px;
display: inline-block;
}
</style>
<script>

$(function(){

});
function checkcz(){
	return true;
}
</script>
<div class="usercontent">
<ul>
<form action="<?php if(C('pay_type') == 'tenpay'): echo U('Tenpay/recharge'); else: echo U('Alipay/recharge'); endif; ?>" method="post" onsubmit="return checkcz()">
	<li style="display:none"> <b>充值用户名: </b><input type="text" name="uname" value="<?php echo (session('uname')); ?>" size="60" > <b>充值帐号,默认即可请勿修改</b></li>
	<li> <b>账户余额: </b><input type="text" style="border:none;width:30px;" name="moneybalance" value="<?php echo ($thisUser["moneybalance"]); ?>" id="needmoneybalanceprice" size="10" disabled> 元<b></b></li>
	<li> <b>充值金额: </b><input type="text" name="price" style="width:50px;" value="<?php echo ($user["price"]); ?>" id="price" size="10"> 元 <b></b></li>

	<li><span class="bottonbox"><button class="new-btn-login" type="submit" style="text-align:center;">确 认</button></span></li>
</ul>
        <div class="clr"></div>
      </div>
          <div class="cLine">
            <div class="pageNavigator right">
              <div class="pages"></div>
            </div>
            <div class="clr"></div>
          </div>
        </div>
        
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <!--底部-->
  	</div>



<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
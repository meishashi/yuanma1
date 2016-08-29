<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if IE 10]>         <html class="no-js ie10"> <![endif]-->
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      
  <title><?php echo C('site_name');?>_微信营销推广,微信代理运营,公众号支付方案|微营销行业领导品牌</title>
  <meta name="keywords"  content="<?php echo C('site_name');?>,<?php echo C('site_name');?>官网,微信营销,微信推广,微信代理,微信支付,微信公众平台,微商,微店,微信公众号,微信客服,微信运营"/>
  <meta name="description"  content="<?php echo C('site_name');?>,专业的微信营销行业领导品牌,旨于提供微信营销、微信推广、微信运营等解决方案,助力企业微营销,是投资加盟项目的最佳选择.招商热线：<?php echo C('site_tel');?>"/>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo RES;?>/Css/normalize.css">
    <link rel="stylesheet" href="<?php echo RES;?>/Css/main.css">
    <link rel="stylesheet" href="<?php echo RES;?>/Css/anythingslider.css">
    <script src="<?php echo RES;?>/Js/com-5cdb71a4da6f82e1769453d6007639a1.js" type="text/javascript"></script>
    <script src="<?php echo RES;?>/Js/modernizr-2.6.2.min.js"></script>
</head>
<body data-spy="scroll" data-target="#page-index"  id="index-0">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<div class="html">
    <div class="header">
	<div class="wrap">
		<div class="logo">
			<a href="/" style="background:none;width:190px;height:60px;margin: 5px 0;"><img src="<?php echo C('site_logo');?>" style="width:100%;height:100%;" /></a>
		</div>
		
		<div class="header-nav">
			<ul>
				<li></li>
				<li>
					<a href="/" class="active">首页</a>
				</li>
				<li>
					<a href="<?php echo U('Index/solution');?>" class="">经典案例</a>
				</li>
				<li>
					<a href="<?php echo U('Index/spread');?>" class="">渠道代理</a>
				</li>
				
				<li>
					<a href="<?php echo U('Index/about');?>" class="">关于我们</a>
				</li>
			</ul>
		</div>
		<div class="header-btns">
			<?php if($_SESSION['uid']==false): ?><a href="<?php echo U('Index/login');?>" class="btn btn-text">登录</a>
			<?php else: ?>
				<a href="<?php echo U('System/Admin/logout');?>" class="btn btn-text">注销</a><?php endif; ?>
			<?php if($_SESSION['uid']==false): ?><a href="<?php echo U('Index/reg');?>" class="btn btn-green">注册</a>
			<?php else: ?>
				<a href="<?php echo U('User/Index/index');?>" class="btn btn-green">用户中心</a><?php endif; ?>
			
		</div>
	</div>
</div>

<div class="body">
  <div class="flash relative h446">
    <ul id="slider-index" class="slider">
	  <li><a href="#" style="background-image:url(<?php echo RES;?>/Images/banner01.jpg);"></a></li>
      <li><a href="#" style="background-image:url(<?php echo RES;?>/Images/banner_life.jpg);"></a></li>
      <li><a href="#" style="background-image:url(<?php echo RES;?>/Images/banner00.jpg);"></a></li>
      <li><a href="#" style="background-image:url(<?php echo RES;?>/Images/banner04.jpg);"></a></li>
      <li><a href="#" style="background-image:url(<?php echo RES;?>/Images/banner05.jpg);"></a></li>
      <li><a href="#" style="background-image:url(<?php echo RES;?>/Images/banner_fans_games.jpg);"></a></li>
    </ul>
  </div>
  <!--短广告
  <div class="note">
    <div class="slider-note wrap">
      <ul id="slider-note">
          <li><a href="#">短广告1</a></li>
          <li><a href="#" >短广告2</a></li>
          <li><a href="#" >短广告3</a></li>
          <li><a href="#" >短广告4</a></li>
      </ul>
    </div>
  </div>
  -->
  
  <!--
  <div class="clearfix index" id="index-5">
    <div class="wrap">
      <h4></h4>
      <small>我们时时在进步，每周<i>大</i>更新，每天<i>小</i>更新</small>
    </div>
    <div class="speed">
      <div class="wrap">
        <ul>
         <li>
            <a href="#"  title="微信支付">
               <img src="<?php echo RES;?>/Images/speed_08.png">
              <span>2014年8月</span>
              <em></em><i></i>
              <span class="tip">微信支付</span>
            </a>
          </li>
           <li>
            <a href="#"  title="微政务">
               <img src="<?php echo RES;?>/Images/speed_07.png">
              <span>2014年7月</span>
              <em></em><i></i>
              <span class="tip">微政务</span>
            </a>
          </li>

          <li>
            <a href="#" title="微小区">
               <img src="<?php echo RES;?>/Images/speed_06.png">
              <span>2014年6月</span>
              <em></em><i></i>
              <span class="tip">微小区</span>
            </a>
          </li>

          <li>

      <a href="#"  title="微商圈_微信营销">
              <img src="<?php echo RES;?>/Images/speed_01.png">
              <span>2014年5月</span>
              <em></em><i></i>
              <span class="tip">微商圈3.0</span>
            </a>
          </li>
          <li>

      <a href="#" title="微信VIP">
              <img src="<?php echo RES;?>/Images/speed_02.png">
              <span>2014年4月</span>
              <em></em><i></i>
              <span class="tip">会员卡套餐</span>
            </a>
          </li>
      
         
        </ul>
      </div>
      <div class="line"></div>
    </div>
  </div>
  
  -->
  <div class="clearfix index index-1 bg-shadow" id="index-1">
    <div class="wrap">
      <h4>V-领先服务</h4>
      <small>超过<i>30</i>个行业解决方案，超过<i>80</i>个业务模块</small>
      <ul class="clearfix">
        <li class="index-1-1">
          <a href="#" title="微官网">
            <span></span>
            <small>微官网</small>
          </a>
            <p>5分钟轻松建站<br>打造酷炫微官网</p>
        </li>
        <li class="index-1-2">
          <a href="#" title="微会员">
            <span>
              <i class="icon-span icon-new"></i>
            </span>
            <small>微会员卡</small></a>
            <p>方便携带 永不挂失<br>消费积分 一卡配备</p>

        </li>
        <li class="index-1-3">
          <a href="#" title="微wifi">
            <span>
              <i class="icon-span icon-hot"></i>
            </span>
            <small>微wifi</small></a>
            <p>加粉神器<br>轻松让过客成为您的粉丝</p>
        
        </li>
        <li class="index-1-4">
          <a href="#" title="微团购_微团购微信公众平台">
            <span></span>
            <small>微团购</small></a>
            <p>拇指微团<br>将优惠装入客户口袋</p>
        
        </li>
        <li class="index-1-5">
          <a href="#" title="微照片">
            <span></span>
            <small>微照片</small></a>
            <p>时尚美照 微信增粉<br>在体验中感受企业魅力</p>
       
        </li>
        <li class="index-1-6">
          <a href="#" title="微信墙">
            <span>

              <i class="icon-span icon-hot"></i>
            </span>
            <small>微信墙</small></a>
            <p>活跃现场气氛<br>让粉丝涨起来</p>
        
        </li>
        <li class="index-1-7">
          <a href="#" title="微支付_微信支付平台">
            <span>

            </span>
            <small>微支付</small></a>
            <p>整合多种在线支付<br>支付就这么简单</p>
        
        </li>
        <li class="index-1-8">
          <a href="#" title="微商圈_微信营销">
            <span>

              <i class="icon-span icon-hot"></i>
            </span>
            <small>微商圈</small></a>
            <p>手机逛街最方便<br>轻松把线下CBD搬入微信</p>
       
        </li>
        <li class="index-1-9">
          <a href="#" title="微生活_微信公众号">
            <span>

              <i class="icon-span icon-hot"></i>
            </span>
            <small>微生活</small></a>
            <p>微信公众号建立生活门户<br>吃喝玩乐应有尽有</p>
       
        </li>
        <li class="index-1-10">
          <a href="#" title="微电商_微信服务号">
            <span></span>
            <small>微电商</small></a>
            <p>小微信也有大商城<br>电商轻松就能走入微信</p>
      
        </li>
        <li class="index-1-11">
          <a href="#" title="微餐饮_微信小店">
            <span></span>
            <small>微餐饮</small></a>
            <p>扫一扫<br>微信也能够实时点餐</p>
      
        </li>
        <li class="index-1-12">
          <a href="#" title="微汽车_微信汽车营销">
            <span></span>
            <small>微汽车</small></a>
            <p>预约试驾或保养 车主关怀<br>360度看车应有尽有</p>

        </li>
        <li class="index-1-13">
          <a href="#" title="微酒店_微信公共号">
            <span>

              <i class="icon-span icon-new"></i>
            </span>
            <small>微酒店</small></a>
            <p>在线订房融入微信<br>酒店营销多一条有力途径</p>

        </li>
        <li class="index-1-14">
          <a href="#" title="微房产_微信房产营销">
            <span></span>
            <small>微房产</small></a>
            <p>全景看房 楼盘印象 预约看房<br> 有效助力微信营销</p>

        </li>
        <li class="index-1-15">
          <a href="#" title="微客服_微客服平台">
            <span></span>
            <small>微客服</small></a>
            <p>沟通6亿用户<br>创造无限商机</p>
      
        </li>
        <li class="index-1-16">
          <a href="#" title="微活动_微信微活动">
            <span></span>
            <small>微活动</small></a>
            <p>吸引用户参与<br>增强用户沉淀</p>
      
        </li>
        <li class="index-1-17">
          <a href="#" title="微预约_微信平台">
            <span></span>
            <small>微预约</small></a>
            <p>各种预约 一键即可<br>短信邮件会立即通知商户</p>
     
        </li>
        <li class="index-1-18">
          <a href="#" title="微统计_微信平台">
            <span>

              <i class="icon-span icon-new"></i>
            </span>
            <small>数据魔方</small></a>
            <p>精准分析用户行为<br>轻松了解买家</p>
   
        </li>
        <li class="index-1-19">
          <a href="#" title="微渠道_微信推广渠道">
            <span>

              <i class="icon-span icon-new"></i>
            </span>
            <small>微渠道</small></a>
            <p>二维码轻松一扫<br>有效统计粉丝来源</p>
     
        </li>
        <li class="index-1-20">
          <a href="#" title="微定制_微信定制开发">
            <span></span>
            <small>自定制</small></a>
            <p>立足客户个性化需求,为品<br>牌企业占领微信营销高地</p>
    
        </li>
      </ul>
    </div>
  </div>
  <div class="clearfix index index-2" id="index-2">
    <div class="wrap">
      <h4>谁使用了<?php echo C('site_name');?></h4>
      <small>超过<i>329658</i>品牌客户选择了<?php echo C('site_name');?>，支持深度定制</small>
      <ul class="clearfix list-case">
          <li>
            <a>
              <span><img src="<?php echo RES;?>/Images/永安保险1.jpg"></span>
              <small>永安保险</small>
              <div class="case-hover" panel_id=0>
                <b>扫一扫</b>
                <span>
                  <img src="<?php echo RES;?>/Images/永安保险.jpg" width="106px" height="106px">
                </span>
                <i class="case-btn">更多详情</i>
              </div>
            </a>
          </li>
          <li>
            <a>
              <span><img src="<?php echo RES;?>/Images/洋河1号1.jpg"></span>
              <small>洋河1号</small>
              <div class="case-hover" panel_id=1>
                <b>扫一扫</b>
                <span>
                  <img src="<?php echo RES;?>/Images/洋河1号.jpg" width="106px" height="106px">
                </span>
                <i class="case-btn">更多详情</i>
              </div>
            </a>
          </li>
          <li>
            <a>
              <span><img src="<?php echo RES;?>/Images/锦江旅游在线1.png"></span>
              <small>锦江旅游在线</small>
              <div class="case-hover" panel_id=2>
                <b>扫一扫</b>
                <span>
                  <img src="<?php echo RES;?>/Images/锦江旅游在线.jpg" width="106px" height="106px">
                </span>
                <i class="case-btn">更多详情</i>
              </div>
            </a>
          </li>
          <li>
            <a>
              <span><img src="<?php echo RES;?>/Images/福馨西饼1.jpg"></span>
              <small>福馨西饼</small>
              <div class="case-hover" panel_id=3>
                <b>扫一扫</b>
                <span>
                  <img src="<?php echo RES;?>/Images/福馨西饼.jpg" width="106px" height="106px">
                </span>
                <i class="case-btn">更多详情</i>
              </div>
            </a>
          </li>

      </ul>
      <div class="text-center padding">
        <a href="<?php echo U('Index/solution');?>" class="btn btn-green btn-big"  >更多案例</a>
      </div>
    </div>
  </div>
</div><style>
.tools-qrd.active{background:rgba(0,0,0,.5) url(<?php echo C('site_ewm');?>) no-repeat center center;background-size:120px 120px;height:140px;}
</style>   
   <div class="footer">
	<div class="footer-nav clearfix">
		<div style="float: none; margin: 0 auto; width: 600px;" >
		
			<dl style="width:500px;margin-left: auto;margin-right: auto;" class="list-arrow-square">
				<dt>关于<?php echo C('site_name');?></dt>
				<dt>联系电话：<?php echo C('ipc');?></dt>
				<dt>联系地址：<?php echo C('keyword');?></dt>
				<dt>客服QQ：<?php echo C('site_qq');?></dt>
				
				
				<!--<dd><a href="#" >联系电话：<?php echo C('ipc');?></a></dd>
				<dd><a href="#" >联系地址：<?php echo C('keyword');?></a></dd>
				<dd><a href="#" >客服QQ：<?php echo C('site_qq');?></a></dd>-->
			</dl>
			
			
			
		</div>
	</div>
	<div class="footer-copyright">
		<div class="wrap clearfix">
			<div style="text-align:center;">
				Copyright (c) 2014-2015 All Rights Reserved <?php echo C('site_name');?> 版权所有
			</div>
		</div>
	</div>
</div>


<script src="<?php echo RES;?>/Js/kf.js"></script>
<div class="mod-tools" id="tools">
    <a href="tencent://message/?uin=<?php echo C('site_qq');?>&&Site=sc.admin5.com&&Menu=yes" class="tools-qq" id="launch_qq">QQ交谈</a>
    <a class="tools-phone"><?php echo C('ipc');?></a>
    <!-- <a class="tools-spread" href="/spread">申请代理</a>

    <a class="tools-qrd" ></a> -->
</div>


<style>
  .pop{width:427px;height:143px;position:fixed;left:50%;top:50%;margin:-72px 0 0 -213px;background:url(<?php echo RES;?>/<?php echo RES;?>/Images/kefu.png) no-repeat;z-index: 1050;display: none;}
  .pop-text{margin-left:180px;font-size:14px;color:#999;}
  .pop-text h1{color:#566f72;font-size:18px;}
  .pop-btn{margin-left:180px;}
  .pop-btn a{display:inline-block;width:90px;height:30px;line-height:30px;text-align:center;color:#fff;text-decoration:none;-webkit-border-radius:5px;
  -moz-border-radius:5px;
  border-radius:5px;}
  .pop-ok{background:#e8645a;-webkit-box-shadow:inset 2px 2px 2px rgba(0,0,0,.2);-moz-box-shadow:inset 2px 2px 2px rgba(0,0,0,.2);box-shadow:inset 2px 2px 2px rgba(0,0,0,.2);}
  .pop-cancel{background:#cccccc;}
</style>
<!-- <div class="pop" id="qq_talk">
  <script>
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 79177618, selector: 'BizQQWPA'});
  </script>
	<div class="pop-text">
		<h1>尊敬的用户：</h1>
		<p>您好，请问有什么可以帮到您？</p>
	</div>
	<div class="pop-btn">
    <a class="pop-ok" id="BizQQWPA" href="javascript:void(0);">QQ交谈</a>
    <a onclick="hideModal('qq_talk');return false;" href="javascript:void(0);" class="pop-cancel">下次再说</a>
	</div>
</div> 


  <div class="mod-page-circle page-index" id="page-index">
    <ul class="nav">
      <li><a href="#index-0">0</a></li>
      <li><a href="#index-1">1<i></i><span>V-领先服务</span></a></li>
      <li><a href="#index-2">2<i></i><span>谁用了<?php echo C('site_name');?></span></a></li>
    </ul>
  </div>
-->

  <div class="modal fade" id="modalCase">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <a class="modal-close"></a>
          <ul id="slider-case" class="slider">
            <li>
              <h4>永安保险</h4>
              <p></p>
              <div class="slider-case-box">
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/Images/永安保险1.jpg">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/Images/永安保险2.jpg">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/Images/永安保险.jpg" width="180">
                  <span>扫描二维码即可查看详情</span>
                  .                          
                  <p>雷锋无忧首创微信保险</p>
                </div>
              </div>
            </li>
            <li>
              <h4>洋河1号</h4>
              <p></p>
              <div class="slider-case-box">
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/Images/洋河1号1.jpg">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/Images/洋河1号2.jpg">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/Images/洋河1号.jpg" width="180">
                  <span>扫描二维码即可查看详情</span>
                  .                          
                  <p>白酒行业微信营销领跑者</p>
                </div>
              </div>
            </li>
            <li>
              <h4>锦江旅游在线</h4>
              <p></p>
              <div class="slider-case-box">
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/Images/锦江旅游在线1.png">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/Images/锦江旅游在线2.png">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/Images/锦江旅游在线.jpg" width="180">
                  <span>扫描二维码即可查看详情</span>
                  .                          
                  <p>展示、评论、支付，功能完备</p>
                </div>
              </div>
            </li>
            <li>
              <h4>福馨西饼</h4>
              <p></p>
              <div class="slider-case-box">
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/Images/福馨西饼1.jpg">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/Images/福馨西饼2.jpg">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/Images/福馨西饼.jpg" width="180">
                  <span>扫描二维码即可查看详情</span>
                  .                          
                  <p>高端西饼品牌连锁</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
</div>

<!--  js  -->
  <script src="<?php echo RES;?>/Js/jquery.anythingslider.min.js"></script>
  <script src="<?php echo RES;?>/Js/affix.js"></script>
  <script src="<?php echo RES;?>/Js/scrollspy.js"></script>
	<script src="<?php echo RES;?>/Js/plugins.js"></script>
	<script src="<?php echo RES;?>/Js/main.js"></script>
  <script src="<?php echo RES;?>/Js/jquery.cookie.js"></script>
	<script>
		$(function(){
			$('#slider-spread').anythingSlider({
				theme:"minimalist-round",
				buildStartStop:false,
				pauseOnHover: true,
				startPanel:0,
        hashTags: false
			});
		});
	</script>
	<script>
		$("#change_verify_code").click(function() {
			$image_code = $('#image_code');
			$image_code.attr("src", $image_code.attr("src") + Math.random());
			$('#verify_code').val('').focus();
			return false;
		});
	</script>


  
<script>
  $(function(){
    $("#page-index").affix({
        offset: {
            top: 200,
            bottom: 300
        }
    });
    $.fn.scrollspy.Constructor.DEFAULTS = {
        offset: 100
    }
  });
</script>

<script>
    $(function(){
        $(window).resize(function(){
            $('#slider-index').anythingSlider({
                theme:"cs-portfolio",
                buildStartStop:false,
                autoPlay:true,
                pauseOnHover: true,
                buildArrows:false,
                startPanel:0,
                hashTags: false
            });
        });
        $('#slider-index').anythingSlider({
            theme:"cs-portfolio",
            buildStartStop:false,
            autoPlay:true,
            pauseOnHover: true,
            buildArrows:false,
            startPanel:0,
            hashTags: false
        });
        $('#slider-note').anythingSlider({
            mode: "vertical",
            buildNavigation: false,
            theme:"cs-portfolio",
            buildStartStop:false,
            autoPlay:true,
            pauseOnHover: true,
            buildArrows:false,
            startPanel:0,
            hashTags: false
        });
        $('#slider-index-4').anythingSlider({
            theme:"minimalist-square",
            buildStartStop:false,
            autoPlay:true,
            pauseOnHover: true,
            expand : true,
            showMultiple : 5,
            startPanel:0,
            hashTags: false
        });

        $('#slider-case').anythingSlider({
            theme:"minimalist-square",
            autoPlay: false,
            buildStartStop:false,
            pauseOnHover: true,
            expand : true,
            showMultiple : 1,
            startPanel:3,
            hashTags: false
        });

    });

    /*$(function(){
     if (window.location.pathname == '/'){ //是根目录(index)
        //清除 用户不要显示 qq 的 cookie
        $.removeCookie('close_qq', { path: '/' });
      }

      // var delay_time =
      //判断是否超过1分钟
      setTimeout(function(){
        if($.cookie('close_qq') == 'true'){
          //用户已经关闭 qq 了, 不要再显示了
        }else{
          showModal("qq_talk");
        }
      }, 15000);
    });*/

    function getSecondsDiff(date1, date2){
      var diff = (date2-date1)/86400000*24*60*60
      return  Math.abs(parseInt(diff));
    }
</script>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 980334950;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="<?php echo RES;?>/Js/conversion.js">
</script>

<!-- WPA Button Begin -->

<!-- WPA Button END -->

<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="<?php echo RES;?>/Images/下载.gif"/>
</div>
</noscript>


</body>
</html>
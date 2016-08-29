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
					<a href="/" class="">首页</a>
				</li>
				<li>
					<a href="<?php echo U('Index/solution');?>" class="">经典案例</a>
				</li>
				<li>
					<a href="<?php echo U('Index/spread');?>" class="active">渠道代理</a>
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
  <div class="flash h460 border-1" style="background: url(<?php echo RES;?>/Images/ad-spread.jpg) no-repeat center 0 #f4f9ff;">
    <div class="wrap relative">
      <div class="spread-flash">
        <h4>诚邀全国小伙伴代理加盟</h4>
        <h3><?php echo C('site_tel');?></h3>
        <p><a href="#" class="btn btn-green btn-big">在线申请代理</a></p>
        <div class="spread-flash-top">
          <div class="anythingSlider anythingSlider-minimalist-round activeSlider" style="width: 310px; height: 200px;">
		  <div class="anythingWindow"><ul id="slider-spread" class="slider anythingBase horizontal" style="width: 1240px; left: -310px;">
		  <ul id="slider-spread" class="slider">
            <li>
              <div class="list-comment">
                  <div class="comment-title">
                      <div class="comment-img ">
                          <img src="<?php echo RES;?>/Images/portrait.jpg" style="width:53px;height:55px;margin-top: -4px;margin-left: -2px;">
                      </div>
                      <div class="comment-name">
                          <h5>黄先生</h5>
                          <span><?php echo C('site_name');?> | 公司董事长</span>
                      </div>
                  </div>
                  <div class="comment-content">随着微信大门的敞开，微信商机也向每一个人走来。月赚50万不再是梦，一个月帮您签约50家客户不再是奇迹，微信生意就找<?php echo C('site_name');?>。</div>
              </div>
            </li></ul></div><div class="anythingControls"><ul class="thumbNav"><li class="first"><a class="panel1 cur" href="#"><span>1</span></a></li><li class="last"><a class="panel2" href="#"><span>2</span></a></li></ul></div><span class="arrow back"><a href="#"><span><<</span></a></span><span class="arrow forward"><a href="#"><span>>></span></a></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="spread spread-1">
    <div class="wrap">
      <a class="spread-1-1">
        <i></i>
        <span>权威机构</span>
        <p>拥有中国微营销品牌研究中心及社会化媒体消费行为分析模型和社会化网络行为智能匹配系统两项专利。</p>
        <em><i></i></em>
      </a>
      <a class="spread-1-2">
        <i></i>
        <span>专业技术</span>
        <p>团队拥有Twitter、facebook、微博、微信多年营销实战经验的专家、移动互联网行业精英、及复旦大学研究力量。</p>
        <em><i></i></em>
      </a>
      <a class="spread-1-3">
        <i></i>
        <span>回报率高</span>
        <p>面向代理商提供360度产品、营销、培训立体支持，帮助企业突破瓶颈，成功转型，未投入先盈利，零风险超值回报。</p>
        <em></em>
      </a>
    </div>
  </div>
  <div class="clearfix index spread spread-2">
    <div class="wrap">
      <h4>总部支持</h4>
      <small>已有<i>230</i>个城市，<i>325682</i>家品牌企业成功进驻<?php echo C('site_name');?></small>
      <div class="table">
        <table border="0" cellpadding="0" cellspacing="0">
          <tbody><tr>
            <td width="50%">
              <span class="icon-span icon-new">产品层面</span>
              <p><?php echo C('site_name');?>提供最完备的微信营销行业化解决方案，并提供快速、高效的个性化定制解决方案，全功能账号免费使用。</p>
              <i></i>
            </td>
            <td>
              <span class="icon-span icon-hot">渠道运营</span>
              <p>拥有各类丰富的厂商资源、拥有完整的渠道支撑体系，全方位支持服务代理商公司建设，全程关注代理商成长等。</p>
            </td>
          </tr>
          <tr>
            <td>
              <span>整合资源</span>
              <p>提供旗下微力公社（weiligongshe.com）平台资源支持（国内微信营销厂商基本无此特色资源），CPC 模式；并提供微客本地化生活服务平台(vcoolife)支持；以及其他营销所需硬件资源整合。 物料支持</p>
              <i></i>
              <em></em>
            </td>
            <td>
              <span>物料支持</span>
              <p>包括但不限于产品彩页、产品手册、营销宝典、易拉宝、会议物料、促销礼品等。</p>
            </td>
          </tr>
          <tr>
            <td>
              <span>业务拓展</span>
              <p>总部不对代理区域进行直销，并提供网络媒体免费宣传，将获得的资源免费分配给代理商，代理商无需承担推广费用。</p>
              <i></i>
              <em></em>
            </td>
            <td>
              <span>技术支持</span>
              <p>提供专业的研发团队，优先处理和研发代理商反馈的需求，定制模块开发支持。</p>
            </td>
          </tr>
          <tr>
            <td>
              <span>私人定制</span>
              <p>总部协助大客户洽谈，并提供统一的行业微营销策划方案，可根据大客户个性化需求成立项目，独立运作支持。</p>
              <i></i>
              <em></em>
            </td>
            <td>
              <span>服务支持</span>
              <p><?php echo C('site_name');?>提供专职渠道客服随时响应，7*12小时的全方位支持。</p>
            </td>
          </tr>
          <tr>
            <td>
              <span>会议营销</span>
              <p>十年会销经验传授，细化流程安排，并提供会议营销特邀培训讲师支持（杜子健智囊团核心成员），以及会销所需物料设计支持。</p>
              <i></i>
              <em></em>
            </td>
            <td>
              <span>市场监察</span>
              <p>严格执行<?php echo C('site_name');?>市场监察条例，对代理商予以支持同时维护市场秩序。</p>
            </td>
          </tr>
        </tbody></table>
      </div>
    </div>
  </div>
</div>
<style>
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
</div> -->
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/stylet.css" rel="stylesheet" type="text/css" />
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/global.js"></script>
  <link rel="stylesheet" href="/tpl/User/default/common/css/cymain.css" />
  <link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<script src="/tpl/static/upyun.js"></script>

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>

<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />



<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>



<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>



<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>

<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#content2', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
        'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
        'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage',
        'flash', 'media', 'insertfile', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
        'anchor', 'link', 'unlink', '|', 'about'
],
afterBlur: function(){this.sync();}
});
});
</script>
<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#content1', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
        'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
        'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage',
        'flash', 'media', 'insertfile', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
        'anchor', 'link', 'unlink', '|', 'about'
],
afterBlur: function(){this.sync();}
});
});
</script>
<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#content', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items :[
        'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
        'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage',
        'flash', 'media', 'insertfile', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
        'anchor', 'link', 'unlink', '|', 'about'
],
afterBlur: function(){this.sync();}
});
});
</script>
<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#intro', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','clearhtml','hr',
'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
'insertunorderedlist', '|', 'emoticons','fontname', 'fontsize','forecolor','hilitecolor','bold','image','link', 'unlink','baidumap','lineheight','table','anchor','preview','print','template','code','cut', 'music', 'video','map'],
afterBlur: function(){this.sync();}
});
});
</script>


<style>
.content {
 background:none; margin-left:30px; margin-top:20px; border:none; margin-bottom:30px;
}
</style>
</head>

<body>


<script type="text/javascript" src="<?php echo RES;?>/css/bootstrap.min.css"></script>
<link href="<?php echo RES;?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<style>
#sideBar ul .ckit{display:none;}
.ListProduct input {
    display: none;
}

.ListProduct td a img {
    border: 0 none;
    vertical-align: middle;
    width: 32px;
}
.btn btn-primary btn_submit  J_ajax_submit_btn, .btn btn-primary btn_submit  J_ajax_submit_btn {
border: 1px solid #3D810C;
box-shadow: 0 1px #CCC;
-moz-box-shadow: 0 1px #CCCCCC;
-webkit-box-shadow: 0 1px #CCC;
cursor: pointer;
display: inline-block;
text-align: center;
vertical-align: bottom;
overflow: visible;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
vertical-align: middle;
background-color: #F1F1F1;
background-image: -webkit-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%);
background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, white 97%, white 100%);
background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, white 97%, white 100%);
color: #000;
padding: 2px 8px 2px 8px;
text-shadow: 0 1px #FFF;
font-size: 14px;
line-height: 1.5;
}
</style>    
<div class="content" style="width:95%; background:none; margin-left:25px; border:none; margin-bottom:10px; margin-top:30px;" >

  <div class="alert">
  <p><span class="bold">拷贝工具的网址和图标网址，粘帖到你需要的地方，所有支持链接的地方均可添加。</span></p>
            </div>
            </div>
        <div class="msgWrap" style="width:95%; background:none; margin-left:25px; border:none;">
          <div class="cLineD"><h4 class="left">查询工具</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://m.hao123.com/a/tianqi"><img src="/tpl/User/default/img/ceshi/c01.png">
                      <p>天气报告</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.kuaidi100.com/uc/index.html"><img src="/tpl/User/default/img/ceshi/c03.png" />
    <p>查快递证</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.46644.com/tool/idcard/?tpltype=uc"><img src="/tpl/User/default/img/ceshi/c07.png" >
                <p>查身份证</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://baidu365.duapp.com/uc/Calendar.html"><img src="/tpl/User/default/img/ceshi/c09.png" >
                      <p>万年历/黄历</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.wochacha.com/search?gcsid=a54dc4be344dcc0ecd1ed8df68fc5e8f"><img src="/tpl/User/default/img/ceshi/c11.png" />
                        <p>查商品价</p>
                      </a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.46644.com/tool/aqi/?tpltype=uc"><img src="/tpl/User/default/img/ceshi/c02.png" />
                        <p>查PM2.5</p>
                      </a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.46644.com/tool/shouji/?tpltype=uc"><img src="/tpl/User/default/img/ceshi/c08.png" />
                        <p>手机归属地</p>
                      </a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.46644.com/tool/translate/?tpltype=uc"><img src="/tpl/User/default/img/ceshi/c10.png" />
                        <p>在线翻译</p>
                      </a></td>
                    </tr>
                    <tr>
                      <td align="center"><a target="99" href="http://m.hao123.com/n/v/dianhua">常用电话</a></td>
                      <td align="center"><a target="99" href="http://m.46644.com/tool/zipcode/?tpltype=uc">查邮编</a></td>
                      <td align="center"><a target="99" href="http://m.dabizi.cn/wapsite">查购物返利</a></td>
                      <td align="center"><a target="99" href="http://m.46644.com/tool/areacode/?tpltype=uc">查区号</a></td>
                      <td align="center"><a target="99" href="http://health.sohu.com/eden/anquanqi/jump.html"><i></i>安全期</a></td>
                      <td align="center"><a href="http://fanyi.baidu.com/" target="99">翻译</a></td>
                      <td align="center"><a target="99" href="http://m.mtime.cn/">影讯</a></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
<div class="cLineD"><h4 class="left">商旅 & 旅游</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://12306.uodoo.com"><img src="/tpl/User/default/img/ceshi/a04.png" ><p>抢火车票</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://hao.uc.cn/bst/flight?uc_param_str=prdnfrpfbivelabtbmntpvsscp"><img src="/tpl/User/default/img/ceshi/a01.png" ><p>机票预订</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://wx.133.cn/hbrobot/wap"><img src="/tpl/User/default/img/ceshi/a02.png" >
            <p>航班动态</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.zhuna.cn/?agent_id=194"><img src="/tpl/User/default/img/ceshi/a03.png" >
            <p>酒店查询</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.tuniu.com"><img src="/tpl/User/default/img/ceshi/a07.png" >
            <p>旅游线路</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://wap.yikuaiqu.com/?s=uc"><img src="/tpl/User/default/img/ceshi/a06.png" >
            <p>景点门票</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://lvyou.baidu.com/main/webapp/index"><img src="/tpl/User/default/img/ceshi/a05.png" >
            <p>景点导览</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.mafengwo.cn/mdd"><img src="/tpl/User/default/img/ceshi/a08.png" >
                      <p>攻略游记</p></a></td>
                    </tr>
                  </tbody>
                </table>
                
    <div class="cLineD"><h4 class="left">交通出行</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://cha.weiche.me/uc"><img src="/tpl/User/default/img/ceshi/b08.png">
            <p>违章查询</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.46644.com/tool/bus/?tpltype=uc"><img src="/tpl/User/default/img/ceshi/b03.png">
            <p>长途客运</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://gj.aibang.com"><img src="/tpl/User/default/img/ceshi/b01.png">
            <p>公交换乘</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.8684.cn/dt_switch"><img src="/tpl/User/default/img/ceshi/b02.png">
            <p>地铁线路</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/index/index/foo=bar/vt=map/?third_party=ucsearchbox"><img src="/tpl/User/default/img/ceshi/b05.png">
            <p>地图导航</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/index/index/foo=bar/vt=map&amp;traffic=on&amp;viewmode=no_ad/?third_party=ucsearchbox"><img src="/tpl/User/default/img/ceshi/b04.png">
            <p>交通路况</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E5%8A%A0%E6%B2%B9%E7%AB%99/needloc=1?third_party=ucsearchbox"><img src="/tpl/User/default/img/ceshi/b07.png">
            <p>附近加油站</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E5%81%9C%E8%BD%A6%E5%9C%BA/needloc=1?third_party=ucsearchbox"><img src="/tpl/User/default/img/ceshi/b06.png">
            <p>附近停车场</p></a></td>
                    </tr>
                  </tbody>
                </table>
          
          <div class="cLineD"><h4 class="left">健康医疗</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://3g.39.net/sex"><img src="/tpl/User/default/img/ceshi/f08.png">
            <p>两性知识</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.39.net/man"><img src="/tpl/User/default/img/ceshi/f05.png">
            <p>男性健康</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.39.net/woman"><img src="/tpl/User/default/img/ceshi/f03.png">
            <p>女性健康</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.soujibing.com"><img src="/tpl/User/default/img/ceshi/f01.png">
            <p>问医生</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.39.net/care"><img src="/tpl/User/default/img/ceshi/f06.png">
            <p>养生保健</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.39.net/fitness/ydjf"><img src="/tpl/User/default/img/ceshi/f07.png">
            <p>运动减肥</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.yao.xywy.com"><img src="/tpl/User/default/img/ceshi/f02.png">
            <p>用药指南</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.yaolan.com/"><img src="/tpl/User/default/img/ceshi/f04.png">
            <p>孕产妇婴</p></a></td>
                    </tr>
                    <tr>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E5%8C%BB%E9%99%A2/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近医院</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E8%8D%AF%E5%BA%97/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近药店</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E5%81%A5%E8%BA%AB%E5%9B%AD/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近健身苑</a></td>
                      <td align="center"><a target="99" href="http://3g.dxy.cn/">医疗论坛</a></td>
                      <td align="center"><a target="99" href="http://tv.uc.cn/#!/detail/5606">养生堂</a></td>
                      <td align="center"><a target="99" href="http://tv.uc.cn/#!/detail/1286381">我是大医生</a></td>
                      <td align="center"><a target="99" href="http://tv.uc.cn/#!/detail/109469">健康之路</a></td>
                      <td align="center"><a target="99" href="http://tv.uc.cn/#!/detail/129036">健康100FUN</a></td>
                    </tr>
                  </tbody>
                </table>
          
          <div class="cLineD"><h4 class="left">运势占卜</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://m.lnka.cn"><img src="/tpl/User/default/img/ceshi/h03.png">
            <p>占卜算命</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://infoapp.3g.qq.com/g/s?aid=astro&amp;g_ut=3&amp;g_f=20585#home"><img src="/tpl/User/default/img/ceshi/h01.png">
            <p>星座运势</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.d1xz.net/sx"><img src="/tpl/User/default/img/ceshi/h02.png">
            <p>生肖运势</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.d1xz.net/jm"><img src="/tpl/User/default/img/ceshi/h04.png">
            <p>周公解梦</p></a></td>
                      <td width="12%" align="center">&nbsp;</td>
                      <td width="12%" align="center">&nbsp;</td>
                      <td width="12%" align="center">&nbsp;</td>
                      <td width="12%" align="center"></td>
                    </tr>
                  </tbody>
                </table>
                
          <div class="cLineD"><h4 class="left">彩票购买</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/ssq.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true"><img src="/tpl/User/default/img/ceshi/l01.png">
            <p>双色球</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/dlt.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true"><img src="/tpl/User/default/img/ceshi/l02.png">
            <p>大乐透</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/k3.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true"><img src="/tpl/User/default/img/ceshi/l03.png">
            <p>快3</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/syydj.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true"><img src="/tpl/User/default/img/ceshi/l04.png">
            <p>11选5</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/jczq_ht.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true">竞足</a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/3d.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true">福彩3D</a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/ssc.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true">时时彩</a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/notice/index.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true">开奖</a></td>
                    </tr>
                  </tbody>
                </table>
                
          <div class="cLineD"><h4 class="left">便民服务</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://m.58.com/ershouche"><img src="/tpl/User/default/img/ceshi/e02.png">
            <p>二手车辆</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.51job.com/?partner=uc3"><img src="/tpl/User/default/img/ceshi/e05.png">
            <p>找工作</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.58.com/jianzhi.shtml"><img src="/tpl/User/default/img/ceshi/e06.png">
            <p>找兼职</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.baihe.com/search.php"><img src="/tpl/User/default/img/ceshi/e08.png">
            <p>去相亲</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.58.com/sale.shtml"><img src="/tpl/User/default/img/ceshi/e01.png">
            <p>二手物品</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.soufun.com/zf?sf_source=ucbrowser04"><img src="/tpl/User/default/img/ceshi/e03.png">
            <p>租房买房</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.58.com/zhongdiangong"><img src="/tpl/User/default/img/ceshi/e04.png">
            <p>家政/钟点工</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.dianping.com/promo/shanghai"><img src="/tpl/User/default/img/ceshi/e07.png">
            <p>优惠券</p></a></td>
                    </tr>
                    <tr>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E9%93%B6%E8%A1%8C/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近银行</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E8%90%A5%E4%B8%9A%E5%8E%85/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近营业厅</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E9%82%AE%E5%B1%80/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近邮局</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E7%BE%8E%E5%AE%B9/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近美容</a></td>
                      <td align="center"></td>
                      <td align="center"></td>
                      <td align="center"></td>
                      <td align="center"></td>
                    </tr>
                  </tbody>
                </table>   
                
          <div class="cLineD"><h4 class="left">快乐休闲</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://m.46644.com/tool/tv/?tpltype=u"><img src="/tpl/User/default/img/ceshi/j01.png">
            <p>电视节目</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://infoapp.3g.qq.com/g/s?aid=astro&amp;g_ut=3&amp;g_f=20585#toplist?tab=new"><img src="/tpl/User/default/img/ceshi/j11.png">
            <p>心理测试</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.pengfu.com"><img src="/tpl/User/default/img/ceshi/j09.png">
            <p>幽默笑话</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://sms.waptw.com/lifesearch/ucsms/index?tpl=ucm_sms_index"><img src="/tpl/User/default/img/ceshi/j12.png">
            <p>祝福短信</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://now.3g.cn?fr=uciapp"><img src="/tpl/User/default/img/ceshi/j02.png">
            <p>节目直播</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.taoying.com/"><img src="/tpl/User/default/img/ceshi/j03.png">
            <p>电影资讯</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.weibo.cn/pubs/radio?pos=63&amp;vt=4&amp;from=bst&amp;s2w=bst&amp;wm=ig_0001_bst"><img src="/tpl/User/default/img/ceshi/j05.png">
            <p>在线广播</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://manhua.yicha.cn"><img src="/tpl/User/default/img/ceshi/j08.png">
            <p>搞笑漫画</p></a></td>
                    </tr>
                    <tr>
                      <td align="center"><a target="99" href="http://douban.fm/partner/uc">音乐电台</a></td>
                      <td align="center"><a target="99" href="http://duopao.com">玩小游戏</a></td>
                      <td align="center"><a target="99" href="http://m.damai.cn">演出门票</a></td>
                      <td align="center"><a target="99" href="http://tuan.uc.cn/?keyword=%E7%94%B5%E5%BD%B1#!/index">电影票团购</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=ktv/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近KTV</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E7%BD%91%E5%90%A7/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近网吧</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E7%94%B5%E5%BD%B1%E9%99%A2/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近电影院</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E8%B6%B3%E7%96%97/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近足疗</a></td>
                    </tr>
                  </tbody>
                </table>  
                       
          <div class="cLineD"><h4 class="left">吃货天地</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://home.meishichina.com/wap.php?ac=recipe&amp;t=3&amp;fr=ucapp#utm_source=wap3_popnav_recipe_0"><img src="/tpl/User/default/img/ceshi/i01.png">
            <p>好吃菜谱</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.meishij.net/html5/list.php?cid=9"><img src="/tpl/User/default/img/ceshi/i04.png">
            <p>食疗养生</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://tuan.uc.cn/?keyword=%E7%BE%8E%E9%A3%9F#!/index"><img src="/tpl/User/default/img/ceshi/i03.png">
            <p>美食团购</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E7%BE%8E%E9%A3%9F/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox"><img src="/tpl/User/default/img/ceshi/i02.png">
            <p>附近美食</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://tv.uc.cn/#!/detail/530114">美食地图</a></td>
                      <td width="12%" align="center"><a target="99" href="http://tv.uc.cn/#!/detail/1540713">爱尚美食</a></td>
                      <td width="12%" align="center"><a target="99" href="http://tv.uc.cn/#!/detail/13166">蔡澜叹名菜</a></td>
                      <td width="12%" align="center"><a target="99" href="http://tv.uc.cn/#!/detail/646165">名人厨房</a></td>
                    </tr>
                  </tbody>
                </table>
                
         <div class="cLineD"><h4 class="left">充值支付</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://wvs.m.taobao.com"><img src="/tpl/User/default/img/ceshi/d01.png">
            <p>话费充值</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://wvs.m.taobao.com/game_card.htm?&amp;pds=qq%23h%23zhichong&amp;type=3&amp;unid=null"><img src="/tpl/User/default/img/ceshi/d02.png">
            <p>QQ充值</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://wvs.m.taobao.com/game_card.htm?&amp;pds=qq%23h%23zhichong&amp;type=1&amp;unid=null"><img src="/tpl/User/default/img/ceshi/d03.png">
            <p>游戏充值</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://pay.uc.cn"><img src="/tpl/User/default/img/ceshi/d04.png">
            <p>U点充值</p></a></td>
                      <td width="12%" align="center"></td>
                      <td width="12%" align="center"></td>
                      <td width="12%" align="center"></td>
                      <td width="12%" align="center"></td>
                    </tr>
                  </tbody>
                </table>
                
          <div class="cLineD"><h4 class="left">教育培训</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://m.jxedt.com"><img src="/tpl/User/default/img/ceshi/g04.png">
            <p>学车考驾照</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://app.sso56.com/webapp.html?dm=guoxue&amp;fr=uc"><img src="/tpl/User/default/img/ceshi/g03.png">
            <p>国学经典</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.dm005.com/ergeshipin"><img src="/tpl/User/default/img/ceshi/g01.png">
            <p>儿歌视频</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://www.gaokao.com/touch"><img src="/tpl/User/default/img/ceshi/g02.png">
            <p>备战高考</p></a></td>
                      <td width="12%" align="center"></td>
                      <td width="12%" align="center"></td>
                      <td width="12%" align="center"></td>
                      <td width="12%" align="center"></td>
                    </tr>
                  </tbody>
                </table>
                
           <div class="cLineD"><h4 class="left">理财计算</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://dp.sina.cn/dpool/tools/money/single.php?flag=old_per&amp;pos=63&amp;vt=4"><img src="/tpl/User/default/img/ceshi/k01.png">
            <p>养老险计算</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://auto.sina.com.cn/calculator/"><img src="/tpl/User/default/img/ceshi/k07.png">
            <p>购车计算</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://house.sina.cn/touch/tools/house_loan.html"><img src="/tpl/User/default/img/ceshi/k06.png">
            <p>房贷计算</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://dp.sina.cn/dpool/tools/money/single.php?flag=house_per&amp;pos=63&amp;vt=4"><img src="/tpl/User/default/img/ceshi/k04.png">
            <p>公积金计算</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://dp.sina.cn/dpool/tools/money/single.php?city_id=1&amp;flag=per_tax&amp;pos=63&amp;vt=4">个税计算</a></td>
                      <td width="12%" align="center"><a target="99" href="http://dp.sina.cn/dpool/tools/money/single.php?flag=health_per&amp;pos=63&amp;vt=4">医疗险计算</a></td>
                      <td width="12%" align="center"><a target="99" href="http://dp.sina.cn/dpool/tools/money/single.php?flag=lose_per&amp;pos=63&amp;vt=4">失业险计算</a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.wap.soso.com/app/forex/index.jsp?g_ut=3&amp;biz=newHome">汇率换算</a></td>
                    </tr>
                  </tbody>
                </table>              
<div class="cLineD"><h4 class="left">网页小游戏 <span class="red">（点击复制按钮，拷贝网址）</span></h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <thead>
                    <tr>
                      <th class="span2">小游戏</th>
                      <th class="span5">操作</th>
                      <th class="span2">其他工具</th>
                      <th class="span5">操作</th>
                      <th class="span2">其他工具</th>
                      <th class="span5">操作</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>问答游戏</td>
                      <td><input type='text' id='textid1_text' value='http://u.3g.cn/qasuperman/?fr=wdcr' />
                        <div id='textid1' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>爱星座</td>
                      <td><input type='text' id='textid301_text' value='http://infoapp.3g.qq.com/g/s?g_f=22207&amp;aid=astro#home' />
                        <div id='textid301' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>租房</td>
                      <td><input type='text' id='textid201_text' value='http://m.soufun.com' />
                        <div id='textid201' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                    </tr>
                    <tr>
                      <td>画画游戏</td>
                      <td><input type='text' id='textid2_text' value='http://hc.3g.cn/Index.aspx?fr=grzx' />
                        <div id='textid2' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>中国天气网</td>
                      <td><input type='text' id='textid302_text' value='http://mobile.weather.com.cn/' />
                        <div id='textid302' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>运势</td>
                      <td><input type='text' id='textid202_text' value='http://dp.sina.cn/dpool/astro/starent/xingyun.php' />
                        <div id='textid202' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                    </tr>
                    <tr>
                      <td>神器泡泡</td>
                      <td><input type='text' id='textid3_text' value='http://m.edianyou.com/h5game/bubbleHit.html' />
                        <div id='textid3' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>下厨房</td>
                      <td><input type='text' id='textid303_text' value='http://m.xiachufang.com/' />
                        <div id='textid303' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>算命</td>
                      <td><input type='text' id='textid203_text' value='http://www.aqioo.cn/free' />
                        <div id='textid203' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                    </tr>
                    <tr>
                      <td>一笔一划</td>
                      <td><input type='text' id='textid4_text' value='http://line.3g.cn/?fr=grzx' />
                        <div id='textid4' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>好大夫</td>
                      <td><input type='text' id='textid304_text' value='http://m.haodf.com/touch' />
                        <div id='textid304' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>解梦</td>
                      <td><input type='text' id='textid204_text' value='http://www.aqioo.cn/dream' />
                        <div id='textid204' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                    </tr>
                    <tr>
                      <td>你被点名了</td>
                      <td><input type='text' id='textid5_text' value='http://ltldev.sinaapp.com/wx_apps/dianming/index.php?from=wx_xlnl' />
                        <div id='textid5' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>艺龙酒店预订</td>
                      <td><input type='text' id='textid305_text' value='http://m.elong.com/hotel/' />
                        <div id='textid305' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>房贷计算</td>
                      <td><input type='text' id='textid205_text' value='http://house.sina.cn/touch/tools/house_loan.html' />
                        <div id='textid205' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                    </tr>
                    <tr>
                      <td>谁是卧底</td>
                      <td><input type='text' id='textid6_text' value='http://fanzhuo.sinaapp.com/wodiwx/creater.html' />
                        <div id='textid6' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>彩票开奖查询</td>
                      <td><input type='text' id='textid306_text' value='http://loto.sina.cn/index.do?vt=5&amp;sid=fc055b3a-d72c-41bf-96bc-b8e436ea79ea&amp;agentId=233258' />
                        <div id='textid306' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>股票</td>
                      <td><input type='text' id='textid206_text' value='http://finance.sina.cn/?sa=t60d13v512&amp;pos=63&amp;vt=4' />
                        <div id='textid206' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                    </tr>
                    <tr>
                      <td>斗地主</td>
                      <td><input type='text' id='textid7_text' value='http://h.lexun.com/game/DouDiZhu/play.aspx' />
                        <div id='textid7' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>快递查询</td>
                      <td><input type='text' id='textid307_text' value='http://m.kuaidi100.com/' />
                        <div id='textid307' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>个税计算</td>
                      <td><input type='text' id='textid207_text' value='http://dp.sina.cn/dpool/tools/money/single.php?city_id=1&amp;flag=per_tax&amp;pos=63&amp;vt=4' />
                        <div id='textid207' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                    </tr>
                    <tr>
                      <td>大家来找同</td>
                      <td><input type='text' id='textid8_text' value='http://resource.duopao.com/duopao/games/small_games/blueseagame/sameclick/sameclick.htm' />
                        <div id='textid8' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>航班查询</td>
                      <td><input type='text' id='textid308_text' value='http://wx.133.cn/hbrobot/wap' />
                        <div id='textid308' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>医疗保险计算</td>
                      <td><input type='text' id='textid208_text' value='http://dp.sina.cn/dpool/tools/money/single.php?flag=health_per&amp;pos=63&amp;vt=4' />
                        <div id='textid208' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                    </tr>
                    <tr>
                      <td>神秘方块</td>
                      <td><input type='text' id='textid9_text' value='http://resource.duopao.com/duopao/games/small_games/blueseagame/unitem/Unitem.htm' />
                        <div id='textid9' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>火车余票查询</td>
                      <td><input type='text' id='textid309_text' value='http://12306.uodoo.com/#!/index' />
                        <div id='textid309' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>养老保险</td>
                      <td><input type='text' id='textid209_text' value='http://dp.sina.cn/dpool/tools/money/single.php?flag=old_per&amp;pos=63&amp;vt=4' />
                        <div id='textid209' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                    </tr>
                    <tr>
                      <td>梦幻农场连连看</td>
                      <td><input type='text' id='textid10_text' value='http://resource.duopao.com/duopao/games/small_games/blueseagame/DreamFarmLink/DreamFarmLink.htm' />
                        <div id='textid10' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>住房公积金计算</td>
                      <td><input type='text' id='textid210_text' value='http://dp.sina.cn/dpool/tools/money/single.php?flag=house_per&amp;pos=63&amp;vt=4' />
                        <div id='textid210' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                    </tr>
                    <tr>
                      <td>小怪物吃饼干</td>
                      <td><input type='text' id='textid11_text' value='http://resource.duopao.com/duopao/games/small_games/blueseagame/bouffecookie/bouffecookie.htm' />
                        <div id='textid11' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>常用电话</td>
                      <td><input type='text' id='textid211_text' value='http://m.46644.com/tool/tel/' />
                        <div id='textid211' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>塔罗占卜</td>
                      <td><input type='text' id='textid212_text' value='http://ast.sina.cn/?sa=t282d771v166&amp;pos=19&amp;vt=4' />
                        <div id='textid212' onmouseover='move_swf(this)' class='btn btn-primary btn_submit  J_ajax_submit_btn'>复制</div></td>
                    </tr>
                  </tbody>
                </table>
                <div class="clr"></div>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>
<script src="http://www.wxapi.cn/index/js/ZeroClipboard.js" type="text/javascript"></script> 
<script language="JavaScript">
////copy to clip
    var clip = null;
   
    ZeroClipboard.setMoviePath("http://www.wxapi.cn/index/js/ZeroClipboard.swf")
      clip = new ZeroClipboard.Client();
      clip.setHandCursor( true );
   
 
   function move_swf(ee)
   {    
      copything = document.getElementById(ee.id+"_text").value;
      clip.setText(copything);
 
         if (clip.div)
         {    
            clip.receiveEvent('mouseout', null);
            clip.reposition(ee.id);
         }
         else{ clip.glue(ee.id);   }
  
         clip.receiveEvent('mouseover', null);
   }    
   clip.addEventListener( "complete", function(){  
    alert("复制网址成功,请粘帖到您需要的地方！");   
});  
</script> 
<!--底部-->
</div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
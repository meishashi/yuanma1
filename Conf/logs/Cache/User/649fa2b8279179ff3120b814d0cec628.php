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
 



<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />



<div class="content"  >



<div class="cLineB">



<h4 class="left">房源信息管理 (<?php echo ($page); ?> ) </h4></div>

<div class="tab">
<ul>
<li class="current tabli" id="tab2"><a href="<?php echo U('Fangchan/index');?>">房源信息管理</a></li>

<li class=" tabli" id="tab20"><a href="<?php echo U('Fangchan/reply');?>">回复信息配置</a></li>
</ul>
</div>

<div class="searchbar right">



<form method="post" action="">



<input type="text" id="msgSearchInput" class="txt left" placeholder="输入关键词搜索" name="searchkey" value="<?php echo ($key); ?>">



<input type="submit" value="搜索" id="msgSearchBtn" href="" class="btnGrayS" title="搜索">



</form>







<div class="clr"></div>



</div>







<div class="cLine">

<div class="pageNavigator left" style=" margin-right:30px"> <a href="<?php echo U('Fangchan/exportForms',array('token'=>$token));?>" title="导出招聘信息" class="btn btn-primary btn_submit  J_ajax_submit_btn">导出房源信息</a></div>

<div class="pageNavigator left"> <a href="<?php echo U('Fangchan/add',array('token'=>$token));?>" title="添加" class="btn btn-primary btn_submit  J_ajax_submit_btn"><img src="<?php echo RES;?>/images/product/add.png" width="16" class="vm">添加</a></div>



<div class="clr"></div>



</div>



<div class="msgWrap">



<form method="post" action="" id="info">



<input name="delall" type="hidden" value="">



<input name="wxid" type="hidden" value="">



<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">



<thead>



<tr>



<th width="140">类别</th>



<th width="160">户型</th>
<th width="160">地区</th>




<th width="140">标题</th>



<th width="130">联系人</th>
<th width="130">联系电话</th>
<th width="130">浏览量</th>







<th width="250" class="norightborder">操作</th>



</tr>



</thead>



<tbody>



<tr></tr>



<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>



<td><?php echo ($item["type"]); ?></td>



<td><?php echo ($item["houseType"]); ?></td>
<td><?php echo ($item["area"]); ?></td>
<td><?php echo ($item["title"]); ?></td>



<td ><?php echo ($item["contacter"]); ?></td>



<td style="color:#F00"><?php echo ($item["phone"]); ?></td>
<td ><?php echo ($item["click"]); ?></td>











<td class="norightborder"><!--<a href="<?php echo U('Fangchan/infos',array('pid'=>$item['id'],'token'=>$token));?>">应聘者管理</a>-->&nbsp;&nbsp;<a href="<?php echo U('Fangchan/set',array('id'=>$item['id'],'token'=>$token));?>">修改</a>&nbsp;&nbsp;<a href="<?php echo U('Fangchan/del',array('aid'=>$item['pid'],'id'=>$item['id'],'token'=>$token));?>">删除</a></td>



</tr><?php endforeach; endif; else: echo "" ;endif; ?>



</tbody>



</table>



</form>







</div>



<div class="cLine">



<div class="pageNavigator right">



<div class="pages"><?php echo ($page); ?></div>



</div>



<div class="clr"></div>



</div>



</div>



<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
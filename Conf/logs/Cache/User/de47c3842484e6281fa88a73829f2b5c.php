<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<script type="text/javascript" src="/tpl/static/audioplayer/inc/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="/tpl/static/audioplayer/inc/jquery.mb.miniPlayer.js"></script>
    <link rel="stylesheet" type="text/css" href="/tpl/static/audioplayer/css/miniplayer.css" title="style" media="screen"/>
 <script type="text/javascript">
        $(function () {

            $(".audio").mb_miniPlayer({
                width: 200,
                inLine: false,
                onEnd: playNext
            });

            function playNext(player) {
                var players = $(".audio");
                document.playerIDX = player.idx + 1 <= players.length - 1 ? player.idx + 1 : 0;
                players.eq(document.playerIDX).mb_miniPlayer_play();
            }
        });
    </script>
<div class="content">

<div class="cLineB">
  <h4>微场景应用设置 </h4><a href="javascript:history.go(-1);" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a>
 </div>
 <div class="alert" style="background: #3393C0;">
    <p><span class="bold">温馨提示：</span>具体需要添加几张图片以及图片类型，请更具模板设置</p>
    </div>
<div class="tab">
<ul>
<li class="current tabli" id="tab2"><a href="<?php echo U('Yingyong/index');?>">微应用设置</a></li>

<li class="tabli" id="tab20"><a href="<?php echo U('Yingyong/reply');?>">回复信息配置</a></li>
</ul>
</div>

<!--tab end-->        
    <div class="msgWrap bgfc" style="margin-top:10px;">
    
	  <form class="form" method="post" action="" enctype="multipart/form-data">	 
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
             <tr> 



        <th ><span class="red">*</span>场景应用模板选择：</th> 



        <td> <select name="type" id="auth2nd"  class="input-medium">
                                      <option value="1" <?php if(($info["type"]) == "1"): ?>selected="selected"<?php endif; ?>>动态展示场景应用（需要设置5篇场景）</option>
                                      <option value="2" <?php if(($info["type"]) == "2"): ?>selected="selected"<?php endif; ?>>擦出效果场景应用（只需要设置背景图片）</option>
  <option value="3" <?php if(($info["type"]) == "3"): ?>selected="selected"<?php endif; ?>>苍井空SHOW模板（设置较复杂，效果很牛逼）</option>
                                     
                                    </select></td> 



       </tr> 
           <tr>
					<th>背景音乐：</th>
					<td>
					<table><tr><?php if($info["musicurl"] != ''): ?><td><a style="width:120px;float:left" id="musicurl_src" class="audio {skin:'blue'}" href="<?php echo ($info["musicurl"]); ?>">音乐播放</a></td><?php endif; ?><td> <input class="px" name="musicurl" value="<?php echo ($info["musicurl"]); ?>" id="musicurl" style="width:200px;float:left" onchange="$('#musicurl_src').attr('href',this.value"> <a href="###" onclick="upyunPicUpload('musicurl',0,0,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;<a href="###" onclick="chooseFile('musicurl','music')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a></td></tr></table>
					 </td>
				</tr>
                 <tr>
					<th>视频地址：</th>
					<td>
					<table><tr><input class="px" name="videourl" value="<?php echo ($info["videourl"]); ?>" id="videourl" style="width:550px;" > </td></tr></table>
					 </td>
				</tr>
            
                 <tr>
					<th><span style="color:red">第一篇背景图片①：</span></th>
					<td><input type="text" id="p1" value="<?php echo ($info["p1"]); ?>" name="p1" class="px" style="width:550px;">  
<script src="/tpl/static/upyun.js"></script>
<a href="javascript:void(0)" onclick="upyunPicUpload('p1',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p1')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>第一篇图片②：</th>
					<td><input type="text" id="p2" value="<?php echo ($info["p2"]); ?>" name="p2" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p2',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p2')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                <tr>
					<th><span style="color:red">第二篇背景图片①：</span></th>
					<td><input type="text" id="p3" value="<?php echo ($info["p3"]); ?>" name="p3" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p3',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p3')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>第二篇图片②：</th>
					<td><input type="text" id="p4" value="<?php echo ($info["p4"]); ?>" name="p4" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p4',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p4')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                <tr>
					<th>第二篇图片③：</th>
					<td><input type="text" id="p5" value="<?php echo ($info["p5"]); ?>" name="p5" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p5',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p5')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>第二篇图片④：</th>
					<td><input type="text" id="p20" value="<?php echo ($info["p20"]); ?>" name="p20" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p20',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p20')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th><span style="color:red">第三篇背景图片①：</span></th>
					<td><input type="text" id="p6" value="<?php echo ($info["p6"]); ?>" name="p6" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p6',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p6')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>第三篇图片②：</th>
					<td><input type="text" id="p7" value="<?php echo ($info["p7"]); ?>" name="p7" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p7',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p7')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>第三篇图片③：</th>
					<td><input type="text" id="p8" value="<?php echo ($info["p8"]); ?>" name="p8" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p8',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p8')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                  <tr>
					<th><span style="color:red">第四篇背景图片①：</span></th>
					<td><input type="text" id="p9" value="<?php echo ($info["p9"]); ?>" name="p9" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p9',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p9')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                  <tr>
					<th>第四篇图片②：</th>
					<td><input type="text" id="p10" value="<?php echo ($info["p10"]); ?>" name="p10" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p10',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p10')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>第四篇图片③：</th>
					<td><input type="text" id="p11" value="<?php echo ($info["p11"]); ?>" name="p11" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p11',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p11')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                  <tr>
					<th>第四篇图片④：</th>
					<td><input type="text" id="p12" value="<?php echo ($info["p12"]); ?>" name="p12" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p12',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p12')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                  <tr>
					<th><span style="color:red">第五篇背景图片①：</span></th>
					<td><input type="text" id="p13" value="<?php echo ($info["p13"]); ?>" name="p13" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p13',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p13')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>第五篇图片②：</th>
					<td><input type="text" id="p14" value="<?php echo ($info["p14"]); ?>" name="p14" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p14',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p14')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>第五篇图片③：</th>
					<td><input type="text" id="p15" value="<?php echo ($info["p15"]); ?>" name="p15" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p15',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p15')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>第五篇图片④：</th>
					<td><input type="text" id="p16" value="<?php echo ($info["p16"]); ?>" name="p16" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p16',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p16')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                  <tr>
					<th><span style="color:red">第六篇背景图片①：</span></th>
					<td><input type="text" id="p17" value="<?php echo ($info["p17"]); ?>" name="p17" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p17',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p17')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>第六篇图片②：</th>
					<td><input type="text" id="p18" value="<?php echo ($info["p18"]); ?>" name="p18" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p18',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p18')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>第六篇图片③：</th>
					<td><input type="text" id="p19" value="<?php echo ($info["p19"]); ?>" name="p19" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p19',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p19')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
  <tr>
					<th>第六篇图片④：</th>
					<td><input type="text" id="p21" value="<?php echo ($info["p21"]); ?>" name="p21" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p21',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p21')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                              <tr>
					<th>第六篇图片⑤：</th>
					<td><input type="text" id="p22" value="<?php echo ($info["p22"]); ?>" name="p22" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p22',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p22')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th><span style="color:red">第七篇背景图片①：</span></th>
					<td><input type="text" id="p23" value="<?php echo ($info["p23"]); ?>" name="p23" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p23',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p23')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th><span style="color:red">第八篇背景图片①：</span></th>
					<td><input type="text" id="p24" value="<?php echo ($info["p24"]); ?>" name="p24" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p24',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p24')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th><span style="color:red">第九篇背景图片①：</span></th>
					<td><input type="text" id="p25" value="<?php echo ($info["p25"]); ?>" name="p25" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p25',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p25')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th><span style="color:red">第十篇背景图片①：</span></th>
					<td><input type="text" id="p26" value="<?php echo ($info["p26"]); ?>" name="p26" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p26',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p26')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th><span style="color:red">第十一篇背景图片①：</span></th>
					<td><input type="text" id="p27" value="<?php echo ($info["p27"]); ?>" name="p27" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p27',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p27')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>链接提示文字：</th>
					<td><input type="text" id="tip" value="<?php echo ($info["tip"]); ?>" name="tip" class="px" style="width:550px;">  

					</td>
				</tr>
                 <tr>
					<th>跳转地址：</th>
					<td><input type="text" id="tipurl" value="<?php echo ($info["tipurl"]); ?>" name="tipurl" class="px" style="width:550px;">  <a href="###" onclick="addLink('tipurl',0)" class="btn btn-primary btn_submit  J_ajax_submit_btn">从功能库添加</a>

					</td>
				</tr>
                 <tr>
					<th><span style="color:red">第十二篇背景图片①：</span></th>
					<td><input type="text" id="p28" value="<?php echo ($info["p28"]); ?>" name="p28" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p28',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p28')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>地址：</th>
					<td><input type="text" id="tip1" value="<?php echo ($info["tip1"]); ?>" name="tip1" class="px" style="width:550px;">  

					</td>
				</tr>
                <tr>
					<th>地址链接（请选择街景导航）：</th>
					<td><input type="text" id="tip1url" value="<?php echo ($info["tip1url"]); ?>" name="tip1url" class="px" style="width:550px;">   <a href="###" onclick="addLink('tip1url',0)" class="btn btn-primary btn_submit  J_ajax_submit_btn">从功能库添加</a>

					</td>
				</tr>
                 <tr>
					<th><span style="color:red">第十三篇背景图片①：</span></th>
					<td><input type="text" id="p29" value="<?php echo ($info["p29"]); ?>" name="p29" class="px" style="width:550px;">  <a href="javascript:void(0)" onclick="upyunPicUpload('p29',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
<a href="###" onclick="viewImg('p29')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>
					</td>
				</tr>
                 <tr>
					<th>分享提示语：</th>
					<td><input type="text" id="tip2" value="<?php echo ($info["tip2"]); ?>" name="tip2" class="px" style="width:550px;">  

					</td>
				</tr>
                
				
			
			
				

          
           
              
          
				<th>&nbsp;</th>
					<td>
						<button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
						<a href="javascript:history.go(-1);" class="btn">取消</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
  </div> 
 
  
        </div>
<link rel="stylesheet" href="/static/js/editor/themes/default/default.css" />
<script charset="utf-8" src="/static/js/editor/kindeditor-min.js"></script>
<script charset="utf-8" src="/static/js/editor/zh_CN.js"></script>
<script>
	KindEditor.ready(function(K) {
		var uploadbutton = K.uploadbutton({
			button : K('#uploadBtn')[0],
			fieldName : 'imgFile',
			url : '/index.php?g=User&m=Attachment&a=upload&type=reply',
			afterUpload : function(data) {
				if (data.error === 0) {
					K('#picurl').val(data.url);
				} else {
					alert(data.message);
				}
			},
			afterError : function(str) {
				alert('自定义错误信息: ' + str);
			}
		});
		uploadbutton.fileBox.change(function(e) {
			uploadbutton.submit();
		});
	});
</script>
<script language="javascript">
function countChar(textareaName,spanName){
 document.getElementById(spanName).innerHTML=400-document.getElementById(textareaName).value.length;
 if(document.getElementById(textareaName).value.length>=400){
  window.alert("已经是最大字数了哦！")
  return false;
 }
}
</script>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
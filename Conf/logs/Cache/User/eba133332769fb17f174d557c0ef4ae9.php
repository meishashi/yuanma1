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
<script src="<?php echo ($staticPath); ?>/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo ($staticPath); ?>/tpl/static/artDialog/plugins/iframeTools.js"></script>
<div class="content" <?php if(session('isQcloud') == true): ?>style="float:center;"<?php endif; ?>>
<div class="cLineB">
<h4 class="left"></h4>
<div class="searchbar right">
<script>
function selectall(name) {
	var checkItems=$('.cbitem');
	if ($("#check_box").attr('checked')==false) {
		$.each(checkItems, function(i,val){
			val.checked=false;
		});
		
	} else {
		$.each(checkItems, function(i,val){
			val.checked=true;
		});
	}
}
</script>
</div>
<div class="clr"></div>
</div>
<!--tab start-->
<div class="tab">
<ul>
<li class="<?php if($tabid == 1): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Invite/index',array('token'=>$token,'yid'=>$yid));?>">配置信息</a></li>
<li class="<?php if($tabid == 2): ?>current<?php endif; ?> tabli" id="tab1"><a href="<?php echo U('Invite/user',array('token'=>$token,'yid'=>$yid));?>">主要人物</a></li>
<li class="<?php if($tabid == 3): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Invite/meeting',array('token'=>$token,'yid'=>$yid));?>">活动安排</a></li>
<li class="<?php if($tabid == 5): ?>current<?php endif; ?> tabli" id="tab4"><a href="<?php echo U('Invite/partner',array('token'=>$token,'yid'=>$yid));?>">合作伙伴</a></li>
<li class="<?php if($tabid == 7): ?>current<?php endif; ?> tabli" id="tab6"><a href="<?php echo U('Invite/enroll',array('token'=>$token,'yid'=>$yid));?>">自愿报名</a></li> 
</ul>
</div>
<div class="cLineB">
  <h4>邀请函回复配置 </h4><a href="javascript:history.go(-1);" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a>
 </div>
         
    <div class="msgWrap bgfc">
	  <form class="form" method="post" action="" enctype="multipart/form-data">	 
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
		
			<tbody>
				<tr>
				  <th valign="top"><span class="red">*</span>关键词　　　:</th>
				  <td>
					<span class="red"><input type="text" name="keyword" value="<?php echo ($Invite["keyword"]); ?>" class="px" style="width:550px;">当用户输入该关键词时，将会触发此回复。<br>多个关键词间用空格。</span></td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>回复标题　　:</th>
					<td><input type="text" name="title" value="<?php echo ($Invite["title"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th><span class="red">*</span>回复图片　　:</th>
					<td><input type="text" name="replypic" value="<?php echo (($Invite["replypic"])?($Invite["replypic"]):$staticPath.'/tpl/static/attachment/focus/wedding/10.jpg'); ?>" class="px" style="width:550px;" id="pic" onblur="document.getElementById('pic_src').src=document.getElementById('pic').value;document.getElementById('zpic2').src=document.getElementById('pic').value;" onchange="document.getElementById('pic_src').src=document.getElementById('pic').value;document.getElementById('zpic2').src=document.getElementById('pic').value;">
                    <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>内容介绍　　:</th>
					<td><textarea style="width:550px;height:75px" name="content" id="info" class="px"><?php echo ($Invite["content"]); ?></textarea>最多填写120个字</td>
				</tr>
				<tr><td colspan="2"><div style="width:100%;border-bottom:1px solid lightgray;"></div></td></tr>
				<tr><th colspan="2"><h4>活动配置信息</h4></th></tr>
				<tr>
					<th><span class="red">*</span>封面图片　　:</th>
					<td><input type="text" name="cover" id="cover" value="<?php echo (($Invite["cover"])?($Invite["cover"]):$staticPath.'/tpl/static/attachment/background/wedding/1.jpg'); ?>" class="px" style="width:550px;"><script src="/tpl/static/upyun.js?<?php echo date('YmdHis',time());?>"></script> <a href="###" onclick="upyunPicUpload('cover',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('cover')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td>
				</tr>
				<tr>
					<th><span class="red">*</span>背景图片　　:</th>
					<td><input type="text" name="inback" id="inback" value="<?php echo (($Invite["inback"])?($Invite["inback"]):$staticPath.'/tpl/static/attachment/background/wedding/8.jpg'); ?>" class="px" style="width:550px;">   <script src="/tpl/static/upyun.js?<?php echo date('YmdHis',time());?>"></script><a href="###" onclick="upyunPicUpload('inback',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('inback')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td>
				</tr>
				<tr>
					<th width="120">&nbsp&nbsp注意事项　　:</th>
					<td><input type="text" name="warn" value="<?php echo ($Invite["warn"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>主办方电话　:</th>
					<td><input type="text" name="photo" value="<?php echo ($Invite["photo"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th width="120">&nbsp&nbsp主办方邮箱　:</th>
					<td><input type="text" name="email" value="<?php echo ($Invite["email"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>主办方地址　:</th>
					<td><input type="text" name="site" value="<?php echo ($Invite["site"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th width="120"><span class="red">*</span>主办方邀请人:</th>
					<td><input type="text" name="linkman" value="<?php echo ($Invite["linkman"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th><span class="red">*</span>活动介绍图片:</th>
					<td><input type="text" name="meetpic" id="meetpic" value="<?php echo (($Invite["meetpic"])?($Invite["meetpic"]):$staticPath.'/tpl/static/attachment/background/wedding/14.jpg'); ?>" class="px" style="width:550px;">   <script src="/tpl/static/upyun.js?<?php echo date('YmdHis',time());?>"></script><a href="###" onclick="upyunPicUpload('meetpic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('meetpic')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td>
				</tr>
				<tr>
					<th>&nbsp&nbsp主办方二维码:</th>
					<td><input type="text" name="twopic" id="twopic" value="<?php echo ($Invite["twopic"]); ?>" class="px" style="width:550px;">   <script src="/tpl/static/upyun.js?<?php echo date('YmdHis',time());?>"></script><a href="###" onclick="upyunPicUpload('twopic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('twopic')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td>
				</tr>
				<tr>
					<th width="120">&nbsp;&nbsp;活动网站链接:</th>
					<td><input type="text" name="themeurl" value="<?php echo ($Invite["themeurl"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr>
					<th width="120">&nbsp;&nbsp;活动网站名称:</th>
					<td><input type="text" name="theme" value="<?php echo ($Invite["theme"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<th>&nbsp;</th>
					<td>
						<button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
						<a href="javascript:history.go(-1);" class="btn">取消</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
  </div>
</div>
<?php if(session('isQcloud') != true): ?><div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div><?php endif; ?>
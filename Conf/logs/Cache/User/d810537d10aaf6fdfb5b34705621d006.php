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



<style>

.msgWrap .control-group {

margin-bottom: 20px;

}

.msgWrap .control-label {

text-align: left;

width: 140px;

font-weight: bold;

padding-top: 5px;

float: left;

display: block;

margin-bottom: 5px;

}

.msgWrap .controls {

margin-left: 160px;

}

.msgWrap .form-actions {

padding: 19px 20px 20px 160px;

margin-top: 20px;

}

.span4, .span1, .option, .valid, .input-large{

	background: url(../images/px.png) repeat-x scroll 0 0 #FFFFFF;

    border-color: #848484 #E0E0E0 #E0E0E0 #848484;

    border-style: solid;

    border-width: 1px;

	border-radius: 2px 2px 2px 2px;

	padding:5px;

	width: 210px;

}

.alert {

padding: 8px 35px 0 10px;

text-shadow: none;

-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);

-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);

box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);

background-color: #f9edbe;

border: 1px solid #f0c36d;

-webkit-border-radius: 2px;

-moz-border-radius: 2px;

border-radius: 2px;

color: #333333;

margin-top: 5px;

}

.alert p {

margin: 0 0 10px;

display: block;

}

.alert .bold{

font-weight:bold;

}

</style>

<div class="content" >

  <div class="cLineB">

              <h4 class="left">微美拍设备管理</h4>

              <div class="clr"></div>

          </div>

          

          <div class="cLine">

    <div class="alert">

    <p><span class="bold">使用方法：</span>请先更新username和secret(申请地址:http://www.yinmeili.com/index.php?c=member&a=login)。</p>

    </div>

</div>

          

          <div class="cLine">

            <div class="pageNavigator left">

			<form method="post" action="">

			<label for="username" class="control-label">username：</label><input type="text" name="username" value="<?php echo ($yml["username"]); ?>" id="username" class="px" style="width:200px;">&nbsp;<label for="secret" class="control-label">secret：</label><input type="text" name="secret" value="<?php echo ($yml["secret"]); ?>" id="secret" class="px" style="width:200px;">&nbsp;<button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-success">保存</button>

			</form>

            </div>

            <div class="clr"></div>

          </div>

          <div class="msgWrap">

            <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">

              <thead>

                <tr>

					<th>设备编号</th>

					<th>设备激活时间</th>

					<th>授权有效时间</th>

					<th>上次访问时间</th>

					<th>备注</th>

					<th class="norightborder">操作</th>

                </tr>

              </thead>

              <tbody>

			  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><tr>

                  <td><?php echo ($info["client_num"]); ?></td>

                  <td><?php echo ($info["create_time"]); ?></td>

                  <td><?php echo ($info["expire_time"]); ?></td>

                  <td><?php echo ($info["update_time"]); ?></td>

                  <td><?php echo ($info["remark"]); ?></td>

                  <td class="norightborder">

						<a href="<?php echo U('Wmp/config',array('mid'=>$info['mid']));?>">配置</a>　

				   </td>

                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                 <tr>



                </tr>

              </tbody>

            </table>

          </div>



<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
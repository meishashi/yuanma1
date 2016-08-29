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

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<div class="content" >  
<div class="cLineB"><h4>摇一摇设置</h4><a href="javascript:history.go(-1);"  class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px" >返回</a></div> 
<div class="msgWrap">
<form class="form" method="post" enctype="multipart/form-data" >
<TABLE class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellSpacing="0" cellPadding="0" width="100%">
  <THEAD>
<TR>
  <TH valign="top"><label for="acttitle">活动名称：</label></TH>
  <TD><input type="input" class="px" id="title"  name="title" style="width:500px"  value="<?php echo ($info["title"]); ?>" >    </TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TH valign="top"><label for="acttitle">关键词：</label></TH>
  <TD><input type="input" class="px" id="keyword"  name="keyword" style="width:500px"  value="<?php echo ($info["keyword"]); ?>" >    </TD>
  <TD>&nbsp;</TD>
</TR>
 <tr> 
        <th>图文回复图片：</th>
        <td><input type="text" name="thumb" value="<?php echo ($info["thumb"]); ?>" class="px" id="thumb" style="width:400px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('thumb',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('thumb')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td> 
       </tr>
<tr> 
  <TR>
  <TH valign="top"><label for="text">Logo：</label></TH>
  <TD>
    <input type="input" class="px" id="logo" value="<?php if($info['logo'] == ''): ?>./tpl/static/wall/images/default_logo.png<?php else: echo ($info["logo"]); endif; ?>" name="logo" style="width:350px"> 
    <a href="###" onclick="upyunPicUpload('logo',400,400,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>
    <a href="###" onclick="viewImg('logo')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>[280*75]
</TD>
</TR>
        <th><span class="red"></span>简介：</th> 
        <td><textarea name="intro" class="px" style="width:400px;height:80px;"><?php echo ($info["intro"]); ?></textarea></td> 
       </tr>
<TR style="display:none">
  <TH valign="top">类型：</TH>
  <TD><label for="radio1"><input id="radio1" class="radio" type="radio" name="shaketype" value="1"  <?php if(($info["shaketype"]) == "1"): ?>checked="checked"<?php endif; ?> /> 以手机竖直中轴线垂直地面的为临界点，左右摇省力</label><br /><label for="radio2"><input class="radio" id="radio2" type="radio" name="shaketype" value="2" <?php if(($info["shaketype"]) == "2"): ?>checked="checked"<?php endif; ?> /> 以手机摇晃时达到一定的加速度值为一次来计算，较费力，但不用考虑方向</label></TD>
</TR>
</THEAD>
  <TBODY>
<TR>
  <TH valign="top"><label for="text">手机端传输间隔：</label></TH>
  <TD><input type="input" class="px" id="clienttime"  name="clienttime" style="width:50px" value="<?php echo ($info["clienttime"]); ?>" >  数字越大大屏幕上更新的越慢!
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR> 
<TR>
  <TH valign="top"><label for="text">大屏幕页面传输间隔：</label></TH>
  <TD><input type="input" class="px" id="showtime"  name="showtime" style="width:50px" value="<?php echo ($info["showtime"]); ?>" >  数字越大大屏幕上更新的越慢!
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<TR>
  <TH valign="top"><label for="text">游戏开始倒数计时：</label></TH>
  <TD><input type="input" class="px" id="starttime"  name="starttime" style="width:50px" value="<?php echo ($info["starttime"]); ?>" > 
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<TR>
  <TH valign="top"><label for="text">摇晃时间：</label></TH>
  <TD><input type="input" class="px" id="usetime"  name="usetime" style="width:50px" value="<?php echo ($info["usetime"]); ?>" > 秒  每个用户只能摇约定秒数，尽量设置时间长一点。
</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<TR>
  <TH valign="top"><label for="text">最多次数：</label></TH>
  <TD><input type="input" class="px" id="endshake"  name="endshake" style="width:50px" value="<?php echo ($info["endshake"]); ?>" > 下  第一个用户达到这个数字时活动就停止。
</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<TR>
  <TH valign="top"><label for="text">大屏幕页面展示人数：</label></TH>
  <TD><input type="input" class="px" id="shownum"  name="shownum" style="width:100px" value="<?php echo ($info["shownum"]); ?>" >  摇晃成绩在大屏幕上显示最前面的人数
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<TR>
  <TH valign="top"><label for="text">大屏幕背景：</label></TH>
  <TD>
    <input type="input" class="px" id="background" value="<?php if($info['background'] == ''): ?>./tpl/static/wall/images/default_bg.jpg<?php else: echo ($info["background"]); endif; ?>" name="background" style="width:250px" > 
    <script src="/tpl/static/upyun.js"></script>
    <a href="###" onclick="upyunPicUpload('background',1500,1000,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;
    <a href="###" onclick="viewImg('background')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a> 
 
<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>

<TR>
  <TH valign="top"><label for="text">大屏幕背景音乐：</label></TH>
  <TD><input type="input" class="px" id="backgroundmusic" value="<?php if($info["backgroundmusic"] == ''): ?>/tpl/static/wall/music/v2.mp3<?php else: echo ($info["backgroundmusic"]); endif; ?>" name="backgroundmusic" style="width:250px" value="" >  <a href="###" onclick="chooseFile('backgroundmusic','music')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a> 定义大屏幕背景音乐，为URL地址
</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<!--
<TR>
  <TH valign="top"><label for="text">客户端起始音效：</label></TH>
  <TD><input type="input" class="px" id="music" value="<?php echo ($info["music"]); ?>" name="music" style="width:250px" value="" > <a href="###" onclick="chooseFile('music','music')" class="a_upload">选择</a> 提醒用户开始摇一摇的音效效果
</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
-->
<TR>
  <TH valign="top"><label for="text">二维码图片地址：</label></TH>
  <TD><input type="input" class="px" id="qrcode" value="<?php echo ($info["qrcode"]); ?>" name="qrcode" style="width:250px" value="" >  <a href="###" onclick="chooseFile('qrcode','my')" class="btn btn-primary btn_submit  J_ajax_submit_btn">选择</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="upyunPicUpload('qrcode',1500,1000,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a>&nbsp;&nbsp;&nbsp;<a href="###" onclick="viewImg('qrcode')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a> 大屏幕显示的二维码
 

</TD>
  <TD rowspan="2" valign="top"></TD>
</TR>
<tr> 
        <th><span class="red"></span>头部喊话文字：</th>
        <td>
          <span>游戏过程中屏幕上面的加油呐喊文字,多个词使用“|”隔开(使用：shift+\)</span><br />
          <textarea name="cheer" class="px" style="width:400px;height:80px;"><?php if($info['cheer'] == ''): ?>再大力！|再大力，再大力!|摇，大力摇！|小心手机，别飞出去伤到花花草草|看灰机～～～<?php else: echo ($info["cheer"]); endif; ?></textarea>
        </td> 
       </tr>  
<tr> 
    <th><span class="red"></span>规则说明：</th> 
    <td>
      <textarea name="rule" class="px" style="width:300px;height:80px;"><?php echo ($info["rule"]); ?></textarea>
    </td> 
</tr>    
<tr> 
  
<tr> 
        <th><span class="red"></span>活动介绍：</th> 
        <td><textarea name="info" class="px" style="width:400px;height:80px;"><?php echo ($info["info"]); ?></textarea></td> 
       </tr>
<TR>
  <TH valign="top">活动状态：</TH>
  <TD><label for="radio3"><input id="radio3" class="radio" type="radio" name="isopen" value="1"  <?php if(($info["isopen"]) == "1"): ?>checked="checked"<?php endif; ?> /> 开启</label><br /><label for="radio4"><input class="radio" id="radio4" type="radio" name="isopen" value="0" <?php if(($info["isopen"]) == "0"): ?>checked="checked"<?php endif; ?> /> 关闭</label></TD>
</TR>
<!--
<TR>
  <TH valign="top">游戏开始：</TH>
  <TD><label for="radio5"><input id="radio5" class="radio" type="radio" name="isact" value="1"  <?php if(($info["isact"]) == "1"): ?>checked="checked"<?php endif; ?> /> 开始</label><br /><label for="radio6"><input class="radio" id="radio6" type="radio" name="isact" value="0" <?php if(($info["isact"]) == "0"): ?>checked="checked"<?php endif; ?> /> 关闭</label></TD>
</TR>
-->   
<TR>
  <TH></TH>
  <TD><button type="submit"  name="button"  class="btn btn-primary btn_submit  J_ajax_submit_btn" >保存</button>　
  	</TD>
  </TR>
  </TBODY>
</TABLE>
  </form>



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
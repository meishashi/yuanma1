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
<div class="cLineB"><h4>微现场设置</h4><a href="javascript:history.go(-1);"  class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px" >返回</a></div> 
<div class="msgWrap">
<form class="form" method="post" enctype="multipart/form-data" >
<TABLE class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellSpacing="0" cellPadding="0" width="100%">
  <THEAD>
<TR>
  <TH valign="top"><span class="red">*</span><label for="acttitle">现场名称：</label></TH>
  <TD><input type="input" class="px" id="title"  name="title" style="width:400px"  value="<?php echo ($info["title"]); ?>" >    </TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TH valign="top"><span class="red">*</span><label for="acttitle">关键词：</label></TH>
  <TD><input type="input" class="px" id="keyword"  name="keyword" style="width:400px"  value="<?php echo ($info["keyword"]); ?>" >    </TD>
  <TD>&nbsp;</TD>
</TR>

 <tr> 
        <th><span class="red"></span>图文回复图片：</th>
        <td><input type="text" name="pic" value="<?php echo ($info["pic"]); ?>" class="px" id="pic" style="width:320px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td> 
       </tr>
   
   <tr> 
        <th><span class="red"></span>LOGO：</th>
        <td>
          <input type="text" name="logo" value="<?php if($info['logo'] == ''): ?>./tpl/static/wall/images/default_logo.png<?php else: echo ($info["logo"]); endif; ?>" class="px" id="logo" style="width:320px;" />  
        <script src="/tpl/static/upyun.js"></script>
        <a href="###" onclick="upyunPicUpload('logo',280,75,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> 
        <a href="###" onclick="viewImg('logo')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>[280*75]</td> 
       </tr>
        <tr> 
        <th><span class="red"></span>背景图：</th>
        <td><input type="text" name="background" value="<?php if($info['background'] == ''): ?>./tpl/static/wall/images/default_bg.jpg<?php else: echo ($info["background"]); endif; ?>" class="px" id="background" style="width:320px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('background',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('background',700,420)" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td> 
       </tr>
      <tr> 
        <th><span class="red"></span>二维码：</th>
        <td><input type="text" name="qrcode" value="<?php echo ($info["qrcode"]); ?>" class="px" id="qrcode" style="width:320px;" />  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('qrcode',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('qrcode')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a></td> 
      </tr>     
      
      <tr> 
        <th><span class="red"></span>简介：</th> 
        <td><textarea name="intro" class="px" style="width:400px;height:80px;"><?php echo ($info["intro"]); ?></textarea></td> 
      </tr>
      <tr> 
        <th><span class="red"></span>微信墙：</th> 
        <td>
            <select name="wall_id" id="">
              <option value="">请选择活动...</option>
              <?php if(is_array($wall)): $i = 0; $__LIST__ = $wall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wall): $mod = ($i % 2 );++$i;?><option value="<?php echo ($wall["id"]); ?>" <?php if($wall['id'] == $info['wall_id']): ?>selected<?php endif; ?>><?php echo ($wall["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <a  class="btn btn-primary btn_submit  J_ajax_submit_btn"  href="<?php echo U('Wall/add');?>">添加微信墙</a>
            只能选择已经开启的微信墙活动
        </td> 
      </tr>

      <tr> 
        <th><span class="red"></span>摇一摇：</th> 
        <td>
            <select name="shake_id" id="">
              <option value="">请选择活动...</option>
              <?php if(is_array($shake)): $i = 0; $__LIST__ = $shake;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shake): $mod = ($i % 2 );++$i;?><option value="<?php echo ($shake["id"]); ?>" <?php if($shake['id'] == $info['shake_id']): ?>selected<?php endif; ?>><?php echo ($shake["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <a class="btn btn-primary btn_submit  J_ajax_submit_btn" href="<?php echo U('Shake/add');?>">添加摇一摇</a>
            只能选择已经开启的摇一摇活动
        </td> 
      </tr>
      <!--
      <tr> 
        <th><span class="red"></span>选择投票：</th> 
        <td> 
          <?php if(is_array($vote_list)): $key = 0; $__LIST__ = $vote_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vote_list): $mod = ($key % 2 );++$key;?><input type="checkbox" name="vote_id[]" value="<?php echo ($vote_list["id"]); ?>" <?php if(in_array(($vote_list["id"]), is_array($info['vote_id'])?$info['vote_id']:explode(',',$info['vote_id']))): ?>checked<?php endif; ?>><?php echo ($vote_list["title"]); ?>&nbsp;|&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
          <a href="<?php echo U('Vote/add',array('type'=>'scene'));?>"  class="a_upload" >添加投票</a>
        </td> 
      </tr>-->
  <TH valign="top"><label for="keyword">选择投票：</label></TH>
  <TD> <a href="###" onclick="addVote()" class="btn btn-primary btn_submit  J_ajax_submit_btn">添加现场投票</a>&nbsp;&nbsp;<a href="###" onclick="clearVote()" class="btn btn-primary btn_submit  J_ajax_submit_btn">清空重选</a>
     
<script>
  function addVote(){
  art.dialog.data('titledom', 'titledom');
  art.dialog.data('vote_id', 'vote_id');
  art.dialog.open('?g=User&m=Scene&a=vote_add',{lock:true,title:'投票',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.45});
}
 function clearVote(){
  document.getElementById('titledom').innerHTML='';
  document.getElementById('vote_id').value='';
}
</script> 
      <div class="media mediaFullText" id="titledom" style="margin-top:5px;">
        <?php if(is_array($vote)): $key = 0; $__LIST__ = $vote;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vote_list): $mod = ($key % 2 );++$key; echo ($vote_list["title"]); ?>&nbsp;|&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
      </div> 
      <input type="hidden" id="vote_id" name="vote_id" value="<?php echo ($info['vote_id']); ?>">   
      <tr> 
        <th><span class="red"></span>投票开关：</th> 
        <td>
          <input type="radio" name="open_vote" value="1" <?php if($info["open_vote"] != '0'): ?>checked<?php endif; ?>>开启
          <input type="radio" name="open_vote" value="0" <?php if($info["open_vote"] == '0'): ?>checked<?php endif; ?>>关闭
        </td> 
      </tr>  
      <tr> 
        <th><span class="red"></span>抽奖开关：</th> 
        <td>
          <input type="radio" name="open_lottery" value="1" <?php if($info["open_lottery"] != '0'): ?>checked<?php endif; ?>>开启
          <input type="radio" name="open_lottery" value="0" <?php if($info["open_lottery"] == '0'): ?>checked<?php endif; ?>>关闭
        </td> 
      </tr> 
      <tr> 
        <th><span class="red"></span>对对碰开关：</th> 
        <td>
          <input type="radio" name="open_zzle" value="1" <?php if($info["open_zzle"] != '0'): ?>checked<?php endif; ?>>开启
          <input type="radio" name="open_zzle" value="0" <?php if($info["open_zzle"] == '0'): ?>checked<?php endif; ?>>关闭
        </td> 
      </tr>   
      <tr> 
        <th><span class="red">*</span>现场开关：</th> 
        <td>
            <input type="radio" name="is_open" value="1" <?php if($info["is_open"] != '0'): ?>checked<?php endif; ?>>开启
            <input type="radio" name="is_open" value="0" <?php if($info["is_open"] == '0'): ?>checked<?php endif; ?>>关闭
            <input type="hidden" id="sid" name="id" value="<?php echo ($info["id"]); ?>">
        </td> 
      </tr>
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
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
<div class="cLineB">
  <h4>微现场管理<span class="FAQ"></span></h4>
 </div>
<div class="cLineC" style="line-height: 32px;">
 <a href="<?php echo U('Scene/set');?>" class="btnGrayS btn btn-primary btn_submit  J_ajax_submit_btn" >添加现场活动</a>　   
</div>
<div style="background:#fefbe4;border:1px solid #f3ecb9;color:#993300;padding:10px;margin-bottom:5px;font-size:12px;">温馨提示：现场活动是综合类微现场应用，包含摇一摇、微信墙、对对碰、抽奖和投票功能
</div>
 <div class="msgWrap form">
<div class="bdrcontent">
<div id="div_ptype">
<table class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
<thead>
<tr>
  <th style=" width:110px;">现场名称</th>
  <th style=" width:60px;">关键词</th>
  <th style=" width:100px;">活动简介</th>
  <th style=" width:60px;">状态</th>             
  <th style=" width:250px;" class="norightborder">操作</th>
</tr>
</thead>
<?php if(is_array($scene_list)): $i = 0; $__LIST__ = $scene_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
  <td>
    <a href="<?php echo U('Scene/wall',array('sceneid'=>$list['id'],'id'=>$list['wall_id'],'token'=>$_SESSION['token']));?>">
      <?php echo ($list["title"]); ?>
    </a>  
  </td>
  <td><?php echo ($list["keyword"]); ?></td>
  <td><?php echo ($list["intro"]); ?></td>
  <td><?php if($list['is_open'] == 0): ?><span style="color:red">关闭中</span>
      <?php else: ?><span style="color:green">开启中</span><?php endif; ?></td>
  <td class="norightborder">
      <a target="_blank" href="<?php echo U('Scene/wall',array('sceneid'=>$list['id'],'id'=>$list['wall_id'],'token'=>$_SESSION['token']));?>">大屏幕</a>
        |
      <?php if($list['shake_id'] != ''): ?><a href="<?php echo U('Scene/show_fans',array('id'=>$list['id'],'token'=>$_SESSION['token']));?>">参与粉丝</a>
        |<?php endif; ?>
      <?php if($list["wall_id"] > 0): ?><a href="<?php echo U('Wall/check_msg',array('token'=>$token,'id'=>$list['wall_id'],'sceneid'=>$list['id']));?>">微信墙消息</a>
        |<?php endif; ?>
      <?php if($list['open_lottery'] == '1'): ?><a href="<?php echo U('Scene/prize',array('id'=>$list['id'],'token'=>$_SESSION['token']));?>">抽奖设置</a>
        |<?php endif; ?>
      <?php if($list['open_vote'] == '1'): ?><a href="<?php echo U('Vote/index',array('type'=>'scene','id'=>$list['vote_id'],'token'=>$_SESSION['token']));?>">查看投票</a><?php endif; ?>
      <!--
      <?php if($list['open_zzle'] == '1'): ?>|
        <a href="javascript:supperzzle_log(<?php echo ($list['id']); ?>);">对对碰结果</a><?php endif; ?>-->
        |  
        <a href="<?php echo U('Scene/set',array('id'=>$list['id'],'token'=>$_SESSION['token']));?>" >编辑</a>  
        |
        <a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Scene/del',array('token'=>$token,'id'=>$list['id']));?>');">删除</a>
  </td><?php endforeach; endif; else: echo "" ;endif; ?>
</tr>

</table>

</div>
</div>
<div class="cLine">
  <div class="pageNavigator right">
    <div class="pages"><?php echo ($page); ?></div>
  </div>
  <div class="clr"></div>
</div>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div> 
  <!--底部-->
    </div>
<script>
/*
function supperzzle_log(sceneid){
    art.dialog.open('<?php echo U('Scene/supperzzle_log',array('token'=>$token));?>&id='+sceneid,{lock:false,title:'信息详情',width:1100,height:600,yesText:'关闭',background: '#000',opacity: 0.87});
}
*/

function showFans(sceneid){
    art.dialog.open('<?php echo U('Scene/show_fans',array('token'=>$token));?>&sceneid='+sceneid,{lock:false,title:'信息详情',width:1100,height:600,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
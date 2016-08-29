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

<link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }

</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if(ACTION_NAME == 'index'): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('School/index',array('token'=>$token,'type'=>'semester'));?>">分类管理</a></li>
<li class="<?php if((ACTION_NAME == 'assess') OR (ACTION_NAME == 'assess_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('School/assess',array('token'=>$token));?>">教师管理</a></li>
<li class="<?php if(ACTION_NAME == 'students'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('School/students',array('token'=>$token));?>">学员管理</a></li>
<!-- <li class="<?php if(ACTION_NAME == 'paycost'): ?>current<?php endif; ?> tabli" id="tab2">
<a href="<?php echo U('School/paycost',array('token'=>$token));?>">缴费管理</a></li> -->
<li class="<?php if(ACTION_NAME == 'scoresearch' ): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('School/scoresearch',array('token'=>$token));?>">成绩查询</a></li>
<!-- <li class="<?php if(ACTION_NAME == 'campusnews'): ?>current<?php endif; ?> tabli" id="tab6"><a href="<?php echo U('School/campusnews',array('token'=>$token));?>">校内新闻</a></li> -->
<li class="<?php if((ACTION_NAME == 'curriculum') OR (ACTION_NAME == 'assess_course')): ?>current<?php endif; ?> tabli" id="tab3"><a href="<?php echo U('School/curriculum',array('token'=>$token));?>">课程安排</a></li>
<li class="<?php if(ACTION_NAME == 'subscribe' OR (ACTION_NAME == 'subscribe_add')): ?>current<?php endif; ?> tabli" id="tab4"><a href="<?php echo U('School/subscribe',array('token'=>$token));?>">课程预约</a></li>
<li class="<?php if(ACTION_NAME == 'cookbook'): ?>current<?php endif; ?> tabli" id="tab6"><a href="<?php echo U('School/cookbook',array('token'=>$token));?>">食谱安排</a></li>
<li class="<?php if(ACTION_NAME == 'introduction'): ?>current<?php endif; ?> tabli" id="tab7"><a href="<?php echo U('School/introduction',array('token'=>$token));?>">微教育配置</a></li>
<li class="<?php if(ACTION_NAME == 'cat'): ?>current<?php endif; ?> tabli" id="tab7"><a href="<?php echo U('School/cat',array('token'=>$token));?>">首页版块</a></li>
</ul>
</div>

<div class="content">

<div class="cLineB">
  <h4>您的位置: 分类管理 >
  <?php if($type == 'semester'): ?>学期管理|== <a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'semester'));?>">学期管理</a>||<a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'theclass'));?>">班级管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'score'));?>">成绩管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'subject'));?>">科目管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'timeframe'));?>">时段管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'week'));?>">星期管理</a>
  <?php elseif($type == 'theclass'): ?>
   班级管理 |== <a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'semester'));?>">学期管理</a>||<a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'theclass'));?>">班级管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'score'));?>">成绩管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'subject'));?>">科目管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'timeframe'));?>">时段管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'week'));?>">星期管理</a>
  <?php elseif($type == 'score'): ?>
  成绩管理|== <a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'semester'));?>">学期管理</a>||<a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'theclass'));?>">班级管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'score'));?>">成绩管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'subject'));?>">科目管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'timeframe'));?>">时段管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'week'));?>">星期管理</a>
  <?php elseif($type == 'subject'): ?>
  科目管理|== <a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'semester'));?>">学期管理</a>||<a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'theclass'));?>">班级管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'score'));?>">成绩管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'subject'));?>">科目管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'timeframe'));?>">时段管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'week'));?>">星期管理</a>
  <?php elseif($type == 'timeframe'): ?>
  时段管理|== <a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'semester'));?>">学期管理</a>||<a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'theclass'));?>">班级管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'score'));?>">成绩管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'subject'));?>">科目管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'timeframe'));?>">时段管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'week'));?>">星期管理</a>
  <?php elseif($type == 'week'): ?>
  星期管理|== <a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'semester'));?>">学期管理</a>||<a href="<?php echo U('School/index',array('token'=>$token ,'type'=>'theclass'));?>">班级管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'score'));?>">成绩管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'subject'));?>">科目管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'timeframe'));?>">时段管理</a>||<a href="<?php echo U('School/index',array('token'=>$token,'type'=>'week'));?>">星期管理</a><?php endif; ?>
   </h4>  <a href="javascript:window.location.reload();" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">刷新</a>
 </div>
 <style>
.cLine {
    overflow: hidden;
    padding: 5px 0;
  color:#000000;
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
<div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
    <?php if($type == 'semester'): ?>填写学期,如 2014第一学期,2014第二学期,2015第一学期....<br/>
   <strong><font color='red'>特别提醒: 当你删除该学期项的时候,该学期项下相关的所有数据都会被删除,请谨慎操作!以免丢失数据!</font></strong>
  <?php elseif($type == 'theclass'): ?>
   填写班级,如 一年级,二年级,三年级....
  <?php elseif($type == 'score'): ?>
   填写成绩分类,如 第一期,第二期,第三期....
  <?php elseif($type == 'subject'): ?>
   填写科目,如 语文,数学,英语....
  <?php elseif($type == 'timeframe'): ?>
   填写时段,如 09:00-09:45 , 10:00-10:45 , 11:00-11:45....
  <?php elseif($type == 'week'): ?>
   填写班级,如 星期一,星期二,星期三....<?php endif; ?>
    </p>
    </div>
</div>

<div class="msgWrap bgfc" style="margin-top:-10px;">
      <form class="form" method="post" action="" enctype="multipart/form-data">
        <div class="bdrcontent">
<div id="div_ptype">
<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
<thead>
<tr>
	<th>序列号</th>
    <th width="260">名称</th>
    <th width="50">排序</th>
    <th class="norightborder">操作</th>
</tr>
</thead>
<?php if($semester != ''): if(is_array($semester)): $key = 0; $__LIST__ = $semester;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ivo): $mod = ($key % 2 );++$key;?><tbody class="item<?php echo ($ivo["sid"]); ?>">
<tr>
	<td width="20"><?php echo ($ivo["sid"]); ?></td>
    <input type="hidden" name="add[sid][]"   value="<?php echo ($ivo["sid"]); ?>" style="width:20px;">
    <td width="120"><input type="text" name="add[sname][]" value="<?php echo ($ivo["sname"]); ?>" class="px" style="width:120px;"></td>
    <td width="20"><input type="text" name="add[ssort][]" value="<?php echo ($ivo["ssort"]); ?>" style="width:20px;" class="px"></td>
    <td width="50" class="norightborder"><a href="javascript:void(0);" class="del"  sid="<?php echo ($ivo["sid"]); ?>">删除</a></td>
</tr>
 </tbody><?php endforeach; endif; else: echo "" ;endif; endif; ?>
</table>
<table  border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
    	<td>        
    		<button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>
       		<a href="<?php echo U('Vote/index');?>" class="btn btn-primary btn_submit  J_ajax_submit_btn">取消</a>
        </td>
    	<td></td>
    	<td><a href="javascript:;" id="add" class="btn btn-primary btn_submit  J_ajax_submit_btn">添加</a></td>
    </tr>
</table>
<script>

$(function(){
	$('#add').click(function(){
		  var str 	= "";
		  	  str  += '<tbody class="item"><tr><input type="hidden" name="add[sid][]" readonly="readonly" disabled="disabled" value="" style="width:20px;">';
		  	  str  += '<td></td><td width="120"><input type="text" name="add[sname][]" value="" placeholder="请填写选项标题" class="px" style="width:120px;">';
		  	  str  += '</td><td><input type="text" name="add[ssort][]" id="addssort_1" value="1" style="width:20px;" class="px"></td>';
	  		  str  += '<td width="50" class="norightborder"><a href="javascript:void(0);" sid="0" class="del">删除</a></td></tr></tbody>';
	  	 $('.ListProduct').append(str);
	 });

	$(".ListProduct").on('click','.del',function(data){
		var sid = $(this).attr('sid');
		if(sid == 0){
			$(this).parents('.item').remove();
		}else{
			if(confirm('确定要删除吗？')){
				var obj = {sid:sid}
				$.post("<?php echo U('School/del_item',array('deltype'=>$type));?>", obj,function(data) {
				if(data.errno==1)
					$('.del').parents('.item'+sid).remove();
				},"json");
			}
		}
		
		
	});
});  	

</script>
</div>
</div>
    </form>
  </div>

        </div>

<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
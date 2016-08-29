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

<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo ($staticPath); ?>/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo ($staticPath); ?>/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
<script src="<?php echo ($staticPath); ?>/tpl/User/default/common/js/cart/jscolor.js" type="text/javascript"></script>
<script>
var editor;
KindEditor.ready(function(K) {
editor = K.create('#info', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
'insertunorderedlist', '|', 'emoticons', 'image', 'link', 'music', 'video']
});
});
</script>

<form class="form" method="post" enctype="multipart/form-data" >
<div class="content">
<!--活动开始-->
<div class="cLineB">
  <h4>设置活动信息</h4><a href="javascript:history.go(-1);" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a></div>
<div class="msgWrap bgfc">

<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
  <th valign="top"><span class="red">*</span>活动名称：</th>
  <td><input type="input" class="px" id="title" value="<?php echo ($set["title"]); ?>" name="title" style="width:400px">
  	<br>
  	请不要多于40字!
  	</td>
<td rowspan="10" valign="top">
  
  <div style="margin-left:20px">
  <img id="pic2_src" src="<?php if($set['msg_pic'] == ''): echo ($staticPath); ?>/tpl/static/packet/images/msg_pic.png<?php else: echo ($set["msg_pic"]); endif; ?>" style="max-width:373px;">
<br>
<input class="px" name="msg_pic" value="<?php if($set['msg_pic'] == ''): echo ($staticPath); ?>/tpl/static/packet/images/msg_pic.png<?php else: echo ($set["msg_pic"]); endif; ?>" onclick="document.getElementById('pic2_src').src=this.value;" style="width:363px;" id="pic2">
<br> 
<script src="<?php echo ($staticPath); ?>/tpl/static/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('pic2',1000,500,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic2')" class="btn btn-primary btn_submit  J_ajax_submit_btn">预览</a>&nbsp;消息回复图片
  </div>

</td>
  	
</tr>
<tr>
  <th valign="top"><span class="red">*</span>关键词：</th>
  <td><input type="input" class="px" id="keyword" value="<?php echo ($set["keyword"]); ?>" name="keyword" style="width:400px"><br>
  	<span class="red">只能写一个关键词</span>，用户输入此关键词将会触发此活动。</td>
</tr>
<tr>

<TR style="display:none">
  	<th valign="top">成功抢到券说明：</th>
  	<td><input type="input" class="px" id="sttxtt" value="<?php echo ($set["sttxt"]); ?>" name="sttxtt" style="width:400px" />
  		<br />
  		成功抢到优惠券的提示信息</td>
</TR>
<tr>
  	<th valign="top"><span class="red">*</span>活动介绍：</th>
  	<td><textarea class="px" id="desc" name="desc" style="width:400px; height: 200px;"><?php echo ($set["desc"]); ?></textarea>
  		 </td>
</tr>
</TR>
<tr>
	<th><span class="red">*</span>活动时间：</th>
	<td><input type="input" class="px" id="start_time" value="<?php if($set['start_time'] != ''): echo (date("Y-m-d",$set["start_time"])); else: echo date('Y-m-d',mktime(0, 0, 0, date("m") , date("d"), date("Y"))); endif; ?>" onClick="WdatePicker()" name="start_time" />
		到
		<input type="input" class="px" id="end_time" value="<?php if($set['end_time'] != ''): echo (date("Y-m-d",$set["end_time"])); else: echo date('Y-m-d',mktime(0, 0, 0, date("m") , date("d")+3, date("Y"))); endif; ?>" name="end_time" onClick="WdatePicker()"  />
	</td>
</tr>

</tbody>
</table>

  	<table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
  		<tbody>
  			<tr>
          <th valign="top"><span class="red">*</span>活动规则说明：</th>
          <td>
            <textarea class="px" id="info" name="info" style="width: 400px; height: 200px;"><?php echo ($set["info"]); ?></textarea>
          </td>
        </tr>
        
        <tr>
          <th valign="top"><span class="red">*</span>领取人数：</th>
          <td>
            <input type="input" class="px" id="people" name="people"   value="<?php if($set["people"] == ''): ?>0<?php else: echo ($set["people"]); endif; ?>"> 领取人数，0表示不限制
          </td>
        </tr>    
        <tr>
          <th valign="top"><span class="red">*</span>领取次数：</th>
          <td><input class="px" id="daynums" name="get_number"  value="<?php if($set["get_number"] == ''): ?>1<?php else: echo ($set["get_number"]); endif; ?>" type="input">
          用户可以领取红包的次数,超过后无法领取。
          </td>
        </tr>
        
        <tr>
            <th valign="top">红包类型：</th>
            <td>
              <input  type="radio" class="px packet_type" id="daynums" name="packet_type" value="1" <?php if($set["packet_type"] != '2'): ?>checked<?php endif; ?>>手气红包&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input  type="radio" class="px packet_type" id="daynums" name="packet_type" value="2" <?php if($set["packet_type"] == '2'): ?>checked<?php endif; ?>>普通红包
              &nbsp;
              （手气红包会根据红包的属性发放随机面额红包，普通红包只能发放固定面额的红包）
            </td>
        </tr>

        <tr>
          <th>红包属性：</th>
          <td>
              <span class="change1" <?php if($set["packet_type"] == '2'): ?>style="display:none"<?php endif; ?>>
                <input type="text" class="px" name="item_sum" value="<?php echo ($set["item_sum"]); ?>"> 活动资金 （被领取的红包总额度超过活动资金后将无法领取红包）<br/>
                <input type="text" class="px" name="item_max" value="<?php echo ($set["item_max"]); ?>"> 面额上限 （单个红包可被抽取的最大值）<br/>
                <select name="deci" style="width:140px;">
	          		<option value="0" <?php if($set["deci"] == 0): ?>selected<?php endif; ?>>整数</option>
	          		<option value="1" <?php if($set["deci"] == 1): ?>selected<?php endif; ?>>一位小数</option>
	          		<option value="2" <?php if($set["deci"] == 2): ?>selected<?php endif; ?>>两位小数</option>
	          	</select>
	         	面额属性，整数格式：11，一位小数格式：11.1,，两位小数格式：11.11
              </span>
              <span class="change2"  <?php if($set["packet_type"] != '2'): ?>style="display:none"<?php endif; ?>>
                <input type="text" class="px" name="item_num" value="<?php echo ($set["item_num"]); ?>"> 发放个数 （可被领取的红包个数，超过后将无法领取红包）<br/>
                <input type="text" class="px" name="item_unit" value="<?php echo ($set["item_unit"]); ?>"> 红包面额（请填写整数或者不大于2位的小数）
              </span>
          </td>
        </tr>
<script>
  $(function(){
    $('.packet_type').change(function(){
      if($(this).val() == 1){
        $('.change1').css('display','');
        $('.change2').css('display','none');
      }else if($(this).val() == 2){
        $('.change1').css('display','none');
        $('.change2').css('display','');
      }
    });
  });
</script>
        <tr style="display:none;">
          <th valign="top"><span class="red">*</span>活动资金上限：</th>
          <td>
            <input type="input" class="px" id="value_count" name="value_count"   value="<?php if($set["value_count"] == ''): ?>0<?php else: echo ($set["value_count"]); endif; ?>" /> 红包发放总价值上限，0表示不限制
          </td>
          </tr>
      <tr>
          <th>线下兑换密码</th>
          <td>
            <input type="text" class="px" name="password" value="<?php echo ($set["password"]); ?>"> 兑换红包时选择线下兑换需要用到
          </td>
        </tr>
  			<tr>
  				<th>是否开启活动</th>
  				<td>
	  				<input type="radio" name="is_open" value="1" <?php if($set["is_open"] != '0'): ?>checked<?php endif; ?>>开启&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  				<input type="radio" name="is_open" value="0" <?php if($set["is_open"] == '0'): ?>checked<?php endif; ?>>关闭
  				</td>
  			</tr>
  		
  			<tr>
  				<th></th>
  				<td>
  					<input type="hidden" name="id" value="<?php echo ($set["id"]); ?>">
					<button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>　
					<a href="" class="btn btn-primary btn_submit  J_ajax_submit_btn">取消</a>
				</td>
  			</tr>
  			
  			</tbody>
  		</table>
 </div>
 
</div>
</form>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
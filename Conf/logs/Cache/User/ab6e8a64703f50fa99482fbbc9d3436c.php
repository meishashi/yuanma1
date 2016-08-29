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
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
<form class="form" method="post" action=""    enctype="multipart/form-data" >
<div class="content">
<!--活动开始-->
<div class="cLineB">
  <h4>编辑优惠券活动开始内容</h4><a href="javascript:history.go(-1);" class="right btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a></div>  
<div class="msgWrap bgfc">
 
<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
<tr>
  <th valign="top"><span class="red">*</span>关键词：</th>
  <td><input type="text" class="px" id="keyword" value="<?php echo ($vo["keyword"]); ?>" name="keyword" style="width:400px"><br>
  	<span class="red">只能写一个关键词</span>，用户输入此关键词将会触发此活动。</td>
  <td rowspan="7" valign="top"><div style="margin-left:20px"><img id="pic2_src" src="<?php if($vo['starpicurl'] == ''): echo ($f_siteUrl); ?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg<?php else: echo ($vo["starpicurl"]); endif; ?>" width="373px">
<br>
<input class="px" name="starpicurl" value="<?php if($vo['starpicurl'] == ''): echo ($f_siteUrl); ?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg<?php else: echo ($vo["starpicurl"]); endif; ?>" onclick="document.getElementById('pic2_src').src=this.value;" style="width:363px;" id="pic2">
<br> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic2',1000,500,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic2')">预览</a>&nbsp;活动开始图片
  </div><div style="margin-left:20px"><img id="pic1_src" src="<?php if($vo['zjpic'] == ''): echo ($f_siteUrl); ?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg<?php else: echo ($vo["zjpic"]); endif; ?>" width="373px">
<br>
<input class="px" name="zjpic" value="<?php if($vo['zjpic'] == ''): echo ($f_siteUrl); ?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg<?php else: echo ($vo["zjpic"]); endif; ?>" onclick="document.getElementById('pic1_src').src=this.value;" style="width:363px;" id="pic1">
<br> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic1',1000,500,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic1')">预览</a>&nbsp; 中奖后显示的头部图片
     <br>

  </div></td>
</tr>
<tr>
  <th valign="top"><span class="red">*</span>活动名称：</th>
  <td><input type="text" class="px" id="title" value="<?php echo ($vo["title"]); ?>" name="title" style="width:400px">
  	<br>
  	请不要多于50字!
  	</td>
  </tr>
<TR style="display:none">
  	<th valign="top">成功抢到券说明：</th>
  	<td><input type="text" class="px" id="sttxtt" value="<?php echo ($vo["sttxt"]); ?>" name="sttxtt" style="width:400px" />
  		<br />
  		成功抢到优惠券的提示信息</td>
                                    </TR>
<tr>
  	<th valign="top"><span class="red">*</span>优惠券介绍：</th>
  	<td><textarea class="px" id="sttxt" name="sttxt" style="width:400px; height: 125px;"><?php echo ($vo["sttxt"]); ?></textarea>
  		 </td>
</tr>
</TR>
<tr>
	<th><span class="red">*</span>活动时间：</th>
	<td><input type="text" class="px" id="statdate" value="<?php if($vo['statdate'] != ''): echo (date("Y-m-d",$vo["statdate"])); else: echo date('Y-m-d',mktime(0, 0, 0, date("m") , date("d"), date("Y"))); endif; ?>" onClick="WdatePicker()" name="statdate" />                
		到
		<input type="text" class="px" id="enddate" value="<?php if($vo['enddate'] != ''): echo (date("Y-m-d",$vo["enddate"])); else: echo date('Y-m-d',mktime(0, 0, 0, date("m") , date("d")+3, date("Y"))); endif; ?>" name="enddate" onClick="WdatePicker()"  /> 
	</td>
</tr>
<tr>
<th valign="top"><span class="red">*</span>优惠券活动说明：</th>
<td><textarea class="px" id="info" name="info" style="width: 400px; height: 125px;"><?php echo ($vo["info"]); ?></textarea>
活动说明. </td>
</tr>
<tr>
<th><span class="red">*</span>兑换券使用说明：</th>
<td><textarea id="aginfo" class="px" name="aginfo" style="width: 400px; height: 125px;"><?php echo ($vo["aginfo"]); ?></textarea>用户获取优惠券后显示的提示信息
</td>
</tr>
</tbody>
</table>
 </div> 
  
<!--活动结束-->
<div class="cLineB"><h4>活动结束内容</h4></div> 
<div class="msgWrap bgfc">
 
  	<table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
  		<tbody>
  			<tr>
  				<th valign="top"><span class="red">*</span>活动结束公告主题：</th>
  				<td><input type="text" class="px" id="endtite" value="<?php echo ($vo["endtite"]); ?>" name="endtite" style="width:400px">
  					<br>
  					请不要多于50字! </td>
  				<td rowspan="4" valign="top"><div style="margin-left:20px"><img id="pic3_src" src="<?php if($vo['endpicurl'] == ''): echo ($f_siteUrl); ?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg<?php else: echo ($vo["endpicurl"]); endif; ?>" width="373px"> <br>
  					<input class="px" id="pic3" name="endpicurl" onchange="document.getElementById('pic3_src').src=this.value;" value="<?php if($vo['endpicurl'] == ''): echo ($f_siteUrl); ?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg<?php else: echo ($vo["endpicurl"]); endif; ?>" style="width:363px;">
  					<br> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic3',1000,500,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('pic3')">预览</a>&nbsp;活动结束图片 </div></td>
  				</tr>
  			<tr>
  				<th valign="top">活动结束说明：</th>
  				<td valign="top"><textarea class="px" id="endinfo" name="endinfo" style="width: 400px; height: 125px;"><?php echo ($vo["endinfo"]); ?></textarea>活动结束显示
  				 </td>
  				</tr>
  			</tbody>
  		</table>
  </div> 
  
  
<!--奖项设置-->
<div class="cLineB">
          	<h4>优惠券设置</h4></div> 
<div class="msgWrap bgfc">

<table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
<tr>
<th valign="top"><span class="red">*</span>优惠券名称1：</th>
<td><input type="text" class="px" id="fist" name="fist" value="<?php echo ($vo["fist"]); ?>" style="width:250px">
请不要多于50字! </td>
  <td rowspan="9" valign="top">&nbsp;</td>
</tr>
<tr>
<th valign="top"><span class="red">*</span>优惠券数量：</th>
<td><input type="text" class="px" id="fistnums" name="fistnums" value="<?php echo ($vo["fistnums"]); ?>" style="width:60px">
</td>
                                    </tr>
<tr>
<th valign="top">优惠券名称2：</th>
<td><input type="text" class="px" id="second" name="second" value="<?php echo ($vo["second"]); ?>" style="width:250px">
请不要多于50字! </td>
                                        </tr>
<tr>
<th valign="top">优惠券数量：</th>
<td><input type="text" class="px" id="secondnums" name="secondnums" value="<?php echo ($vo["secondnums"]); ?>" style="width:60px">
</td>
                                        </tr>
<tr>
<th valign="top">优惠券名称3：</th>
<td><input type="text" class="px" id="third" name="third" value="<?php echo ($vo["third"]); ?>" style="width:250px">
请不要多于50字! </td>
                                        </tr>
<tr>
<th valign="top">优惠券数量：</th>
<td><input type="text" class="px" id="thirdnums" name="thirdnums" value="<?php echo ($vo["thirdnums"]); ?>" style="width:60px">
 </td>

  </tbody>

<tbody>
<tr>
<th valign="top"><span class="red">*</span>预计活动的人数：</th>
<td><input type="text" class="px" id="allpeople" name="allpeople"   value="<?php echo ($vo["allpeople"]); ?>" style="width:150px"/>  预估活动人数直接影响抽奖概率：中奖概率 = 奖品总数/(预估活动人数*每人抽奖次数) 如果要确保任何时候都100%中奖建议设置为1人参加!<span class='red'>如果要确保任何时候都100%中奖建议设置为1人参加!并且奖项只设置一等奖.</span></td>
  </tr>
<tr>
<th valign="top"><span class="red">*</span>每人最多允许抽奖次数：</th>
<td><input type="text" class="px" id="canrqnums" name="canrqnums"   value="<?php echo ($vo["canrqnums"]); ?>" style="width:150px"/>
必须1-5之间的数字</td>
 </tr>
<tr>
<th valign="top"><span class="red"></span>每天最多抽奖次数：</th>
<td><input class="px" id="daynums" name="daynums" style="width:150px" value="<?php echo ($vo["daynums"]); ?>" type="text">
必须小于总抽奖次数！ 0 为不限制 抽完总数就不能抽了! 可以抽奖天数 = 总数/每天抽奖次数!</td>
</tr>                                 
<tr style="display:none">
<th valign="top">SN码生成设置：</th>
<td>
    <input class="radio" type="radio" checked name="snimport" value="0">自动生成  
    <input class="radio" type="radio" name="snimport" value="1">手动生成(SN码管理)
</td> 
</tr>
<tr>
<th valign="top"><span class="red">*</span>兑奖密码：</th>
<td><input class="px" id="parssword" name="parssword" value="<?php echo ($vo["parssword"]); ?>" style="width:150px" type="text">
消费确认密码长度小于15位</td>
                                        </tr>
                                                                       <tr>
<th valign="top">SN码重命名为：</th>
<td><input class="px" id="renamesn" name="renamesn" value="<?php if($vo.renamesn): echo ($vo["renamesn"]); else: ?>SN码<?php endif; ?>" style="width:150px" type="text"> 例如：CND码,充值密码,SN码 这个主意用于修改SN码的名称，不懂请别修改</td>
                                        </tr>
                                         <tr>
<th valign="top">手机号重命名：</th>
<td><input class="px" id="renametel" name="renametel" value="<?php if($vo.renametel): echo ($vo["renametel"]); else: ?>手机号<?php endif; ?>" style="width:150px" type="text"> 例如：QQ号,微信号,手机号等其他联系方式，不懂请别修改</td> 
                                        </tr>
                                        <tr>
<th valign="top">是否显示奖品数量：</th>
<td><input class="radio" type="radio" name="displayjpnums" value="1"  <?php if($vo['displayjpnums'] == 1): ?>checked<?php endif; ?> >显示  <input class="radio" type="radio" name="displayjpnums" value="0"  <?php if($vo['displayjpnums'] == 0): ?>checked<?php endif; ?>>不显</td> 
        <TR>
	<th valign="top">注册后才能参与：</th>
	<td><input class="radio" type="radio" name="needreg" value="1"  <?php if($vo['needreg'] == 1): ?>checked<?php endif; ?> > 需要先注册  <input class="radio" type="radio" name="needreg" value="0"  <?php if($vo['needreg'] == 0): ?>checked<?php endif; ?>> 不需要先注册</td> 
</TR>                                 </tr>


<tr>
<th>&nbsp;</th>
<td><button type="submit" name="button" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button>　<a href="" class="btn">取消</a>　<span class="red">请确认功能管理已开启优惠券功能</span></td>
                                    </tr>
</tbody>
</table>
</div> 
</div>
</form>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
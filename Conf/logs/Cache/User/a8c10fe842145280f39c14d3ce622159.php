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



<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>



<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>



<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />



<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />










<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>



<script type="text/javascript" src="<?php echo RES;?>/js/formCheck/formcheck.js"> </script>







<script>



	KindEditor.ready(function(K){



		var editor = K.editor({



			allowFileManager:true



		});



		K('#upload_pic').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#pic').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#pic').val(url);



						}else{



							K('#pic').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_opening_animation').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#opening_animation').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#opening_animation').val(url);



						}else{



							K('#opening_animation').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_small_pic').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#small_pic').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#small_pic').val(url);



						}else{



							K('#small_pic').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_1').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_1').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_1').val(url);



						}else{



							K('#site_map_1').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_2').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_2').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_2').val(url);



						}else{



							K('#site_map_2').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_3').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_3').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_3').val(url);



						}else{



							K('#site_map_3').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_4').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_4').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_4').val(url);



						}else{



							K('#site_map_4').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



		K('#upload_site_map_5').click(function() {



			editor.loadPlugin('image', function() {



				editor.plugin.imageDialog({



					fileUrl : K('#site_map_5').val(),



					clickFn : function(url, title) {



						if(url.indexOf("http") > -1){



							K('#site_map_5').val(url);



						}else{



							K('#site_map_5').val("<?php echo C('site_url');?>"+url);



						}



						editor.hideDialog();



					}



				});



			});



		});



	});



</script>







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



function setlatlng(longitude,latitude){



	art.dialog.data('longitude', longitude);



	art.dialog.data('latitude', latitude);



	// 此时 iframeA.html 页面可以使用 art.dialog.data('test') 获取到数据，如：



	// document.getElementById('aInput').value = art.dialog.data('test');



	art.dialog.open('<?php echo U('Map/setLatLng',array('token'=>$token,'id'=>$id));?>',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});



}



</script>



<div class="content"  >



   <div class="cLineB"> 



    <h4>预约设置</h4> 



    <a href="<?php echo U($type.'/index',array('token'=>$token));?>" class="right  btn btn-primary btn_submit  J_ajax_submit_btn" style="margin-top:-27px">返回</a> 



   </div> 







   <form class="form" method="post" id="form" action="" enctype="multipart/form-data"> 



<?php if($isUpdate == 1): ?><input type="hidden" name="id" value="<?php echo ($set["id"]); ?>" /><?php endif; ?>



    <div class="msgWrap bgfc"> 



     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 



      <tbody> 



       



	   <tr> 



        <th><span class="red">*</span>关键词：</th>



        <td><input type="text" name="keyword" id="keyword" value="<?php echo ($set["keyword"]); ?>" class="px" style="width:400px;" /></td> 



       </tr>



	   <tr> 



        <th ><span class="red">*</span>标题：</th> 



        <td><input  type="text" id="name" name="title" value="<?php echo ($set["title"]); ?>" class="px require" style="width:400px;" /></td> 



       </tr> 



	   



	   <tr> 



        <th><span class="red"></span>订单页头部图片：</th>



        <td><input type="text" name="topic" value="<?php echo ($set["topic"]); ?>" id="small_pic" class="px" style="width:400px;"  readonly="readonly"/><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('small_pic',700,420,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btn">上传</a> <a href="###" onclick="viewImg('small_pic')">预览</a>   &nbsp; 大小为720x400</td></td> 



       </tr>



	   <tr>



	   <th>是否调用LBS信息：</th>



	   <td><?php if($act == ''): ?><input type="radio" name="lbs" value="1" checked="true" /><?php else: ?><input type="radio" name="lbs" value="1" /><?php endif; ?><font size="4px">调用</font> &nbsp; <?php if($act == ''): ?><input type="radio" name="lbs" value="0" /><?php else: ?><input type="radio" name="lbs" value="0" checked="true" /><?php endif; ?><font size="4px">自己填写</font></td>



	   </tr>



	   <?php if($act == ''): ?><tr name="lbb"><?php else: ?><tr name="lbb" style="display:none" ><?php endif; ?>



        <th><span class="red">*</span>选择公司地址</th>



        <td><select name="cid" id="cid" onchange='javascript:ShowInfo(this.value);' style="width:412px; height:30px" class="px">



					<?php if(is_array($arr)): $k = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($k % 2 );++$k;?><option value="<?php echo ($k); ?>"><?php echo ($i["address"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>



			</select>



		</td> 



	   </tr>



	   <?php if($act == ''): ?><tr name="lbss" style="display:none"><?php else: ?><tr name="lbss"><?php endif; ?>



        <th><span class="red">*</span>订单电话：</th>



        <td><input type="text" name="phone" value="<?php echo ($set["phone"]); ?>" class="px" style="width:400px;" /></td> 



	   </tr>



	   <?php if($act == ''): ?><tr name="lbss" style="display:none"><?php else: ?><tr name="lbss"><?php endif; ?>



        <th><span class="red"></span>地址：</th>



        <td><input type="text" name="address" value="<?php echo ($set["address"]); ?>" class="px" style="width:400px;" /></td> 



       </tr>



	   <?php if($act == ''): ?><tr name="lbss" style="display:none"><?php else: ?><tr name="lbss"><?php endif; ?> 



        <th><span class="red">*</span>经纬度：</th> 



        <td>经度 <input type="text" id="longitude"  name="longitude" size="14" class="px" value="<?php echo ($set["longitude"]); ?>" /> 纬度 <input type="text" name="latitude" size="14" id="latitude" class="px" value="<?php echo ($set["latitude"]); ?>" /> <a href="###" onclick="setlatlng($('#longitude').val(),$('#latitude').val())">在地图中查看/设置</a></td> 



       </tr>



	   <?php if(is_array($arr)): $k = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($k % 2 );++$k; if(($act == '') AND ($i['catid'] == 0)): ?><tr name="lbbb" id="la<?php echo ($k); ?>">



	   <?php else: ?><tr name="lbbb" id="la<?php echo ($k); ?>" style="display:none"><?php endif; ?>



        <th><span class="red">*</span>订单电话：</th>



        <td><input type="text" name="phone" value="<?php echo ($i["phone"]); ?>" class="px" style="width:400px;" /></td> 



	   </tr>



	   <?php if(($act == '') AND ($i['catid'] == 0)): ?><tr name="lbbb" id="lb<?php echo ($k); ?>">



	   <?php else: ?><tr name="lbbb" id="lb<?php echo ($k); ?>" style="display:none"><?php endif; ?>



        <th><span class="red"></span>地址：</th>



        <td><input type="text" name="address" value="<?php echo ($i["address"]); ?>" class="px" style="width:400px;" /></td> 



       </tr>



	   <?php if(($act == '') AND ($i['catid'] == 0)): ?><tr name="lbbb" id="lc<?php echo ($k); ?>">



	   <?php else: ?><tr name="lbbb" id="lc<?php echo ($k); ?>" style="display:none"><?php endif; ?>



        <th><span class="red">*</span>经纬度：</th> 



        <td>经度 <input type="text" id="longitude"  name="longitude" size="14" class="px" value="<?php echo ($i["longitude"]); ?>" /> 纬度 <input type="text"  name="latitude" size="14" id="latitude" class="px" value="<?php echo ($i["latitude"]); ?>" /> <a href="###" onclick="setlatlng($('#longitude').val(),$('#latitude').val())">在地图中查看/设置</a></td> 



       </tr><?php endforeach; endif; else: echo "" ;endif; ?>



		<TR>



			<th><span class="red">*</span>活动时间：</th>



			<td><input type="text" class="px" id="statdate" value="<?php if($set['statdate'] != ''): echo ($set["statdate"]); else: echo date('Y-m-d',mktime(0, 0, 0, date("m") , date("d"), date("Y"))); endif; ?>" onClick="WdatePicker()" name="statdate" />                



			到



			<input type="text" class="px" id="enddate" value="<?php if($set['enddate'] != ''): echo ($set["enddate"]); else: echo date('Y-m-d',mktime(0, 0, 0, date("m") , date("d")+3, date("Y"))); endif; ?>" name="enddate" onClick="WdatePicker()"  /> 



			</td>



		</TR>


          <tr> 



			<th ><span class="red">*</span>版权：</th> 



			<td><input  type="text" id="copyrigh" name="copyright" value="<?php echo ($set["copyright"]); ?>" class="px require" style="width:400px;" /></td> 



		</tr> 



        <TR>



			<TH valign="top"><label for="info">订单说明：</label></TH>



            <TD><textarea name="info" id="content"  rows="5" style="width:590px;height:360px"><?php echo ($set["info"]); ?></textarea></TD>

			


        </TR>  



		



       <tr>         



       <th>&nbsp;</th>



       <td>



		<!--input type="hidden" name="time" value="<?php echo ($set["time"]); ?>" /-->



       <button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">保存</button> &nbsp; <a href="<?php echo U($type.'/index',array('token'=>$token));?>" class="btn">取消</a></td> 



       </tr> 



	   



      </tbody> 



     </table> 



     </div>



    



   </form> 



  </div> 



<script language="javascript">



$(function(){



	$("#form").valid([



	{ name:"name",simple:"名称",require:true},



	{ name:"keyword",simple:"关键词",require:true}



		



	],true,true);







});



</script>



<script language="javascript">



function ShowInfo(Id){



	



	$('[name="lbbb"]').attr("style","display:none");



	$("#la"+Id).attr("style","");



	$("#lb"+Id).attr("style","");



	$("#lc"+Id).attr("style","");



	



}



</script>



<script language="javascript">



$("input[type='radio']").click(function(){



	var i = $(this).val();



	if(i==1){



		$('[name="lbss"]').attr("style","display:none");



		$('[name="lbb"]').attr("style","");



		$("#la1").attr("style","");



		$("#lb1").attr("style","");



		$("#lc1").attr("style","");



	}else{



		$('[name="lbss"]').attr("style","");



		$('[name="lbb"]').attr("style","display:none");



		$('[name="lbbb"]').attr("style","display:none");



	}



})



</script>



  <div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
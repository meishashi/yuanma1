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

<div class="content">
         
          <div class="cLineB">
              <h4 class="left">"<?php echo ($thisLottery["title"]); ?>"SN码发放管理</h4>
                  <div>
         
          <a href="javascript:history.go(-1);" class="right btn btn-primary btn_submit  J_ajax_submit_btn">返回</a>
          
          </div>
              <div class="clr"></div> 
          </div>
        
  <div class="cLineB">
            本次活动奖品总数：<span class="redamount"><?php echo ($datacount); ?></span>个　　　中奖人数：<span class="redamount"><?php echo ($recordcount); ?> </span>个　　已发奖品：<span class="redamount"><?php echo ($sendCount); ?></span>个          </div>
            <div style="margin-top:20px;"><a href="###" onclick="$('#import').css('display','')" class="btn btn-primary btn_submit  J_ajax_submit_btn">导入SN码</a>&nbsp;&nbsp;<a href="?g=User&m=Lottery&a=exportSN&id=<?php echo ($thisLottery["id"]); ?>" class="btn btn-primary btn_submit  J_ajax_submit_btn">导出中奖数据</a>&nbsp;&nbsp;<a href="/tpl/User/default/common/images/sndemo.xls" class="btn btn-primary btn_submit  J_ajax_submit_btn">下载导入Excel模板</a></div>
             <div style="margin-top:20px;display:none" id="import"><form enctype="multipart/form-data" action="?g=User&m=Upyun&a=localUploadSNExcel" id="thumbForm" method="POST" style="font-size:14px;padding:10px 20px 10px 0px;"><div>选择本地文件：<input type="file" style="width:250px;border:1px solid #ddd" name="photo"></input> <input id="submitbtn" name="doSubmit" type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn" value="上传" onclick="this.value='上传中...'"></input> <a href="###" onclick="$('#import').css('display','none')" class="btn btn-primary btn_submit  J_ajax_submit_btn">取消导入</a> 注意：不支持xlsx格式</div><input type="hidden" value="<?php echo ($thisLottery["id"]); ?>" name="lid" /></form></div>
  <div class="cLine" style=" padding: 8px 0">
          </div>
          <div class="msgWrap">
          <form method="post"  action="" id="info" >
          <input name="delall"  type="hidden" value="" />
           <input name="wxid"  type="hidden" value="" />
            <TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
              <THEAD>
                <TR style="text-align: center;">
					<TH class="select">序号</TH>
					<TH>SN码(中奖号)</TH>
					<TH>奖项</TH>
					<TH>是否已发奖品</TH>
					<TH>奖品发送时间</TH>
					 
					<TH>中奖者手机号</TH>
					<TH>中奖者微信码</TH>
					<TH  >中奖时间</TH>
					<TH  >操作</TH>
                </TR>
				
              </THEAD>
              <TBODY>
				<?php if(is_array($record)): $i = 0; $__LIST__ = $record;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><TR style="line-height:30px;height: 43px;line-height: 59px;">
						<td class="select"><?php echo ($i); ?></td>
						<td><?php echo ($record["sn"]); ?></td>
						<td><?php echo ($record["prize"]); ?></td>
						 <td>
              <?php if($record['sendstutas'] == 0): ?>否<?php else: ?>是<?php endif; ?>
            </td>
            <td><?php if($record['sendtime'] == 0): else: echo (date('Y-m-d H:i:s',$record["sendtime"])); endif; ?>
            </td>
						<td><?php echo ($record["phone"]); ?></td>
						<td><?php echo ($record["wecha_name"]); ?></td>
						<td><?php if($record['time'] != 0): echo (date('Y-m-d H:i:s',$record["time"])); endif; ?></td>
						<td>
               <?php if($record['sendstutas'] == 0): ?><a href="index.php?g=User&m=Lottery&a=sendprize&id=<?php echo ($record["id"]); ?>">发奖</a>
              <?php else: ?>
               <a href="index.php?g=User&m=Lottery&a=sendnull&id=<?php echo ($record["id"]); ?>">取消发奖</a><?php endif; ?> <a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Lottery/snDelete',array('token'=>$token,'id'=>$record['id']));?>');">删除</a>
             
            </td>
					</TR><?php endforeach; endif; else: echo "" ;endif; ?>
			  </TBODY>
            </TABLE>
           </form> 
           <script>
   function checkvotethis() {
var aa=document.getElementsByName('del_id[]');
var mnum = aa.length;
j=0;
for(i=0;i<mnum;i++){
if(aa[i].checked){
j++;
}
}
if(j>0) {
document.getElementById('info').submit();
} else {
alert('未选中任何文章或回复！')
}
}

   </script>
          </div>
            
 
          <div class="cLine">
            <div class="pageNavigator right">
                 <div class="pages"></div>
              </div>
            <div class="clr"></div>
          </div>
        </div>

        <div class="clr"></div>
      </div>
    </div>
  </div>
  <script>

function checkAll(form, name) {
for(var i = 0; i < form.elements.length; i++) {
var e = form.elements[i];
if(e.name.match(name)) {
e.checked = form.elements['chkall'].checked;
}
}
}

function changesort(tid,sortval){

var image=new Image();   
image.src='index.php?ac=app&op=sort&wxid=gh_423dwjkewad&tid='+tid+'&sort='+sortval+'&r='+Math.random(); 

}
  </script>
  <!--底部-->
  	</div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
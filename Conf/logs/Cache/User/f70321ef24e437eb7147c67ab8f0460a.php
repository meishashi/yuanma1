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
             <h4 class="left">3G投票活动信息 (<?php echo ($count); ?>) 条<span class="FAQ">你本月有 <?php echo ($group["activitynum"]); ?> 次机会可免收活动创建费，已经使用了 <?php echo ($activitynum); ?> 次机会!</span></h4>
                  <!--div class="searchbar right">  <form method="get"  action="index.php"  >
                  <input type="text" id="msgSearchInput" class="txt left" placeholder="输入关键词搜索"  name="keyz" value="">
                  <input type="hidden" name="ac" value="activity-lottery-list"  />
                  <input type="hidden" name="id" value="9878"  />
                  <input type="hidden" name="wxid" value="gh_423dwjkewad"  />
                 
                  <input type="submit" value="搜索" id="msgSearchBtn" href="" class="btnGrayS" title="搜索">
                  </form>
                  </div-->
              <div class="clr"></div>
          </div>
          <div class="cLine">
            <div class="pageNavigator left">
            <?php if($ok == 1): ?><a href=""  title="发起文字投票" class="btn btn-primary btn_submit  J_ajax_submit_btn"><img src="<?php echo RES;?>/images/text.png" class="vm">发起文字投票</a>　
<a href="" title="发起图片投票" class="btn btn-primary btn_submit  J_ajax_submit_btn"><img src="<?php echo RES;?>/images/pic.png" class="vm">发起图片投票</a>
            <?php else: ?>
            <a href="<?php echo U('Vote/add',array('type'=>'text'));?>"  title="发起文字投票" class="btn btn-primary btn_submit  J_ajax_submit_btn"><img src="<?php echo RES;?>/images/text.png" class="vm">发起文字投票</a>　<a href="<?php echo U('Vote/add',array('type'=>'img'));?>" title="发起图片投票" class="btn btn-primary btn_submit  J_ajax_submit_btn"><img src="<?php echo RES;?>/images/pic.png" class="vm">发起图片投票</a><?php endif; ?>
  　　
              
            </div>
          
            <div class="clr"></div>
          </div>
          <div class="msgWrap">
          <form method="post" action="index.php?ac=vote-manage&amp;id=9878" id="info">
          <input name="delall" type="hidden" value="del">
           <input name="wxid" type="hidden" value="gh_423dwjkewad">
            <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                <tr>
					<th class="select">选择</th>
					<th>关键词</th>
					<th>标题</th>
					<th>类型</th>
					<th class="time">开始时间</th>
					<th class="time">结束时间</th>
					<th>外链代码</th>
					<th class="norightborder">操作</th>
                </tr>
              </thead>
              <tbody>
                <tr></tr>
                  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                  <td>  <input type="checkbox" name="del_id[]" value="674" class="checkitem"></td>
                  <td><?php echo ($list["keyword"]); ?></td>
                  <td><?php echo ($list["title"]); ?></td>
                  <td><?php if($list['type'] == 'text'): ?><img src="<?php echo RES;?>/images/text.png" class="vm"> 文字投票<?php else: ?><img src="<?php echo RES;?>/images/pic.png" class="vm"> 图片投票<?php endif; ?></td>
                  <td><?php echo (date('Y-m-d',$list["statdate"])); ?></td>
                  <td><?php echo (date('Y-m-d',$list["enddate"])); ?></td>
                  <td> <?php if($list['type'] == 'text'): ?>文字投票<?php else: ?>图片投票<?php endif; echo ($list["id"]); ?></td>
                   <td class="norightborder"><a href="<?php echo U('Vote/totals',array('type'=>$list['type'],'id'=>$list['id']));?>" title="投票结果">投票结果</a> <a href="<?php echo U('Vote/edit',array('type'=>$list['type'],'id'=>$list['id']));?>" title="编辑">编辑</a> <a href="javascript:drop_confirm('您确定要删除吗?删除会把投票结果也一起删除！', '<?php echo U('Vote/del',array('type'=>$list['type'],'id'=>$list['id']));?>');">删除</a> 
                   <?php if($list['status'] == 0): ?><a href="javascript:drop_confirm('开始投票活动', '<?php echo U('Vote/setinc',array('type'=>$list['type'],'id'=>$list['id']));?>');">开始</a> 
                   <?php else: ?>
                   <a href="javascript:drop_confirm('你是否真的想结束投票活动.', '<?php echo U('Vote/setdes',array('type'=>$list['type'],'id'=>$list['id']));?>');">结束</a><?php endif; ?>
                   </td>
          
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      			                
                  
              </tbody>
            </table>
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
alert('未选中内容！')
}
}</script>
   </div> 
          <div class="cLine">
            <div class="pageNavigator right">
                 <div class="pages"></div>
              </div>
            <div class="clr"></div>
          </div>
  </div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
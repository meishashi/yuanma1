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

<!--鼠标移动上去效果start-->
<style>
    li .mbtip {
    display: none;
} 
.cateradio li:hover .mbtip {
    background-color: #000000;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 7px;
    box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.15);
    color: #FFFFFF;
    display: block;
    padding: 6px;
    float:right;
   /* position:relative;
    right:-140px;
    top:-325px;	*/
    width: 130px;
    text-align: left;
    z-index: 999;
}

</style>


<!--鼠标移动上去效果end-->
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<div class="content" <?php if(session('isQcloud') == true): ?>style="float:center;"<?php endif; ?>>

    <div class="cLineB">
        <h4>模板管理 <span class="FAQ">选择适合您的模版风格，手机输入“首页”测试效果。</span></h4>
    </div>

    <div class="msgWrap form">
        <ul id="tags">
            <li class="selectTag"><a onclick="selectTag('tagContent0',this)" href="javascript:void(0)">1.栏目首页模板风格</a> </li>
            <li><a onclick="selectTag('tagContent1',this)" id="listTab" href="javascript:void(0)">2.图文列表模板风格</a> </li>
            <li><a onclick="selectTag('tagContent2',this)" id="contTab" href="javascript:void(0)">3.图文详细页模板风格</a> </li>
            <li><a onclick="selectTag('tagContent3',this)" href="javascript:void(0)">4.颜色风格&预览</a> </li>
            <div class="clr"></div>
        </ul>
<!--首页模板选择-->
<link href="<?php echo STATICS;?>/tmpls/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo STATICS;?>/tmpls/css/product.css" rel="stylesheet" type="text/css" />
<script src="<?php echo STATICS;?>/tmpls/js/jquery.tools.min.js" type="text/javascript"></script> 
<script src="<?php echo STATICS;?>/tmpls/js/jquery.mixitup.min.js" type="text/javascript"></script>

<script src="<?php echo STATICS;?>/tmpls/js/jquery.lazyload.min.js" type="text/javascript"></script>

        <div id="tagContent">
        <div class="tagContent selectTag" id="tagContent0" style="display: block;">
            <fieldset>
                <div class="g filterBox">
                  <h1>按级别选择:</h1>
                  <ul class="filterBtn">	 					
                  	<li class="filter" data-filter="ck"><p>我选中的模版</p><i></i></li>
                    <li class="filter on active" data-filter="all"><p>全部模版</p><i></i></li>
                    <li class="filter" data-filter="sub"><p>可显示两级分类</p><i></i></li>
                    <li class="filter" data-filter="focu"><p>支持幻灯片</p><i></i></li>
                    <li class="filter" data-filter="bg"><p>支持自定义背景</p><i></i></li>
                    <li class="filter" data-filter="thumb"><p>带缩略图</p><i></i></li>
					<li class="filter" data-filter="filt"><p>半透明版块</p><i></i></li>
					<li class="filter" data-filter="bgs"><p>支持背景音乐</p><i></i></li>
                    <li class="filter" data-filter="slip"><p>支持横向滑动</p><i></i></li>
                  </ul>
                  <h1>按行业选择:</h1>
                  <ul class="filterBtn">
                    <li class="filter" data-filter="mix"><p>常用模板</p><i></i></li>
                    <li class="filter" data-filter="hotel"><p>酒店</p><i></i></li>
                    <li class="filter" data-filter="car"><p>汽车</p><i></i></li>
                    <li class="filter" data-filter="tour"><p>旅游</p><i></i></li>
					<li class="filter" data-filter="restaurant"><p>餐饮</p><i></i></li>
                    <li class="filter" data-filter="estate"><p>房地产</p><i></i></li>
                    <li class="filter" data-filter="health"><p>医疗保健</p><i></i></li>
					<li class="filter" data-filter="edu"><p>教育培训</p><i></i></li>
					<li class="filter" data-filter="beauty"><p>健身美容</p><i></i></li>
                    <li class="filter" data-filter="wedding"><p>婚纱摄影</p><i></i></li>
                    <li class="filter" data-filter="other"><p>其他行业</p><i></i></li>

                  </ul>

                </div>
				
				
				<div style="clear:both"></div>
				
				<ul class="cateradio g grid" id="grid">
					
					<?php if(is_array($tpl)): $i = 0; $__LIST__ = $tpl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tpl): $mod = ($i % 2 );++$i;?><li class="mix <?php echo ($tpl["attr"]); if($info['tpltypeid'] == $tpl['tpltypeid']){echo ' ck active';} ?>">
							<div class="mbtip"><?php echo (($tpl["tpldesinfo"])?($tpl["tpldesinfo"]):'暂无模板描述'); ?></div>
							<label>
								<img src="<?php echo STATICS;?>/tmpls/images/loading.png" data-original="<?php if($tpl["user"] == 0): echo ($staticPath); endif; ?>/tpl/User/default/common/images/<?php echo ($tpl["tplview"]); ?>">
								<input class="radio" type="radio"<?php if($info['tpltypeid'] == $tpl['tpltypeid']): ?>checked<?php endif; ?> name="optype" value="<?php echo ($tpl["tpltypeid"]); ?>">
								模板<?php echo ($tpl["sort"]); ?>
								</label>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					<div style="clear:both"></div>
                </ul>
			</fieldset>
        </div> 
		
		<!--	首页模板选择结束	-->


            <div class="tagContent" id="tagContent1">
                <fieldset style="width:100%;height:400px;background:#fff;">
					<script src="/tpl/static/upyun.js?<?php echo date('YmdHis',time());?>"></script>
					<p style="padding-top:50px;background: #eeeeee;margin-bottom: -5px;padding-bottom: 15px;">
						<a href="<?php echo U('Tmpls/index',array('token'=>$_GET['token'],'cid'=>'0','type'=>'1'));?>" class="btnGrayS" style="margin:-27px 20px 0px 20px;">返回顶级分类</a>
					</p>
						<table class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
							<thead>
								<tr>
									<th style="width:120px;">分类名称</th>
									<th>分类页列表模板</th>
									
								</tr>
							</thead>
							<tbody>
								<?php if(empty($classinfo)): ?><tr>
									<td colspan="2" align="center">没有找到分类信息</td>
								</tr>
								<?php else: ?>
								<?php if(is_array($classinfo)): $i = 0; $__LIST__ = $classinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
										<td><?php echo ($vo["name"]); ?></td>
										<td>
											<input type="text" id="selecttpl_<?php echo ($vo["id"]); ?>" class="px" value="已选择模板<?php echo ($vo["tpid"]); ?>" disabled size="40"  />
											<a class="a_upload" onclick="chooseTpl('tpid_<?php echo ($vo["id"]); ?>','selecttpl_<?php echo ($vo["id"]); ?>',5)">选择模板</a>
											<a class="a_upload" onclick="viewTpl_c_<?php echo ($vo["id"]); ?>()">预览</a>
											 &nbsp; <a class="a_upload" href="<?php echo U('Tmpls/index',array('token'=>$_GET['token'],'cid'=>$vo['id'],'type'=>'1'));?>">子分类</a>
											<input type="hidden" id="tpid_<?php echo ($vo["id"]); ?>" value="<?php echo ($vo["tpid"]); ?>" name="tpid" style="width:250px">
												<script>
													function viewTpl_c_<?php echo ($vo["id"]); ?>(){
														var tid = $('#tpid_<?php echo ($vo["id"]); ?>').val();
														chooseTpl(tid,'',2);
													}
												</script>
										</td>
									</tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>

							</tbody>
						</table>

					
                </fieldset>
            </div>
            <div class="tagContent" id="tagContent2">
                <fieldset style="width:100%;height:400px;background:#fff;">
					<p style="padding-top:50px;background: #eeeeee;margin-bottom: -5px;padding-bottom: 15px;">
						<a href="<?php echo U('Tmpls/index',array('token'=>$_GET['token'],'cid'=>'0','type'=>'2'));?>" class="btnGrayS" style="margin:-27px 20px 0px 20px;">返回顶级分类</a>
					</p>
						<table class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
							<thead>
								<tr>
									<th style="width:120px;">分类名称</th>
									<th>详细内容页模板</th>
									
								</tr>
							</thead>
							<tbody>
								<?php if(empty($classinfo)): ?><tr>
									<td colspan="2" align="center">没有找到分类信息</td>
								</tr>
								<?php else: ?>
								<?php if(is_array($classinfo)): $i = 0; $__LIST__ = $classinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
										<td><?php echo ($vo["name"]); ?></td>
										<td>
											<input type="text" id="selectconttpl_<?php echo ($vo["id"]); ?>" class="px" value="已选择模板<?php echo ($vo["conttpid"]); ?>" disabled size="40"  />
											<a class="a_upload" onclick="chooseTpl('conttpid_<?php echo ($vo["id"]); ?>','selectconttpl_<?php echo ($vo["id"]); ?>',6)">选择模板</a>
											<a class="a_upload" onclick="viewTpl_<?php echo ($vo["id"]); ?>()">预览</a>
											 &nbsp; <a class="a_upload" href="<?php echo U('Tmpls/index',array('token'=>$_GET['token'],'cid'=>$vo['id'],'type'=>'2'));?>">子分类</a>
											<input type="hidden" id="conttpid_<?php echo ($vo["id"]); ?>" value="<?php echo ($vo["conttpid"]); ?>" name="conttpid" style="width:250px">
												<script>
													function viewTpl_<?php echo ($vo["id"]); ?>(){
														var tid = $('#conttpid_<?php echo ($vo["id"]); ?>').val();
														chooseTpl(tid,'',4);
													}
												</script>
										</td>
									</tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>

							</tbody>
						</table>
                </fieldset>
            </div>	
		
		
		<!--	风格切换	-->
            <div class="tagContent" id="tagContent3">
                <fieldset>
                    <div class="cateradio4">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="400" rowspan="2" valign="top">
                                        <div class="samsung-render">
                                          <img src="<?php echo U('Tmpls/QRcode');?>" />
                                        </div>
                                    </td>
                                    <td valign="top"><h3>请选择你喜欢的颜色风格，实时预览 (<span style="color:#c30">注意：请打开微信扫描左侧二维码查看预览。仅部分模板支持更换颜色风格</span>)</h3>
                                        <ul>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="0" <?php if(($info["color_id"]) == "0"): ?>checked="checked"<?php endif; ?>> 默认风格</label></li>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="1" <?php if(($info["color_id"]) == "1"): ?>checked="checked"<?php endif; ?>> 黑色风格</label></li>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="2" <?php if(($info["color_id"]) == "2"): ?>checked="checked"<?php endif; ?>> 蓝色风格</label></li>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="3" <?php if(($info["color_id"]) == "3"): ?>checked="checked"<?php endif; ?>> 木纹风格</label></li>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="4" <?php if(($info["color_id"]) == "4"): ?>checked="checked"<?php endif; ?>> 橙色风格</label></li>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="5" <?php if(($info["color_id"]) == "5"): ?>checked="checked"<?php endif; ?>> 紫色风格</label></li>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="6" <?php if(($info["color_id"]) == "6"): ?>checked="checked"<?php endif; ?>> 绿色风格</label></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="clr"></div>
                    </div>
					
					
                </fieldset>
            </div>
        </div>

        <script type="text/javascript">
            function selectTag(showContent,selfObj){
                // 操作标签
                var tag = document.getElementById("tags").getElementsByTagName("li");
                var taglength = tag.length;
                for(i=0; i<taglength; i++){
                    tag[i].className = "";
                }
                selfObj.parentNode.className = "selectTag";
                // 操作内容
                for(i=0; j=document.getElementById("tagContent"+i); i++){
                    j.style.display = "none";
                }
				if(showContent == 'tagContent1'){
					window.location.href="<?php echo U('Tmpls/index',array('token'=>session('token'),'cid'=>'0','type'=>'1'));?>";
				}else if(showContent == 'tagContent2'){
					window.location.href="<?php echo U('Tmpls/index',array('token'=>session('token'),'cid'=>'0','type'=>'2'));?>";
				}
                document.getElementById(showContent).style.display = "block";
            }
			
	<?php if(isset($_GET['cid']) && $_GET['type'] == 1): ?>// 操作标签
                var tag = document.getElementById("tags").getElementsByTagName("li");
                var taglength = tag.length;
                for(i=0; i<taglength; i++){
                    tag[i].className = "";
                }
                document.getElementById('listTab').parentNode.className = "selectTag";
                // 操作内容
                for(i=0; j=document.getElementById("tagContent"+i); i++){
                    j.style.display = "none";
                }

                document.getElementById('tagContent1').style.display = "block";
				
	<?php elseif(isset($_GET['cid']) && $_GET['type'] == 2): ?>
				                // 操作标签
                var tag = document.getElementById("tags").getElementsByTagName("li");
                var taglength = tag.length;
                for(i=0; i<taglength; i++){
                    tag[i].className = "";
                }
                document.getElementById('contTab').parentNode.className = "selectTag";
                // 操作内容
                for(i=0; j=document.getElementById("tagContent"+i); i++){
                    j.style.display = "none";
                }

                document.getElementById('tagContent2').style.display = "block";<?php endif; ?>
        </script>


        <script>

            $(".radio4").click(function(){
                var myurl='index.php?g=User&m=Tmpls&a=background&style='+$(this).val()+'&r='+Math.random(); 
                $.ajax({url:myurl,async:false});
                $("#myiframe").attr("src",$("#myiframe").attr("src")+'&r='+Math.random());
            });
			
		
            function changeapp(obj,gid){
                if(obj.checked==true){
                    //var image=new Image();   
                    var myurl='index.php?ac=app&op=open&value=1&id=9379&wxid=gh_858dwjkeww5&openid='+gid+'&r='+Math.random(); 
                    $.ajax({url:myurl,async:false});

                }else{
 
                    var myurl='index.php?ac=app&op=open&value=0&id=9379&wxid=gh_858dwjkeww5&openid='+gid+'&r='+Math.random(); 
                    $.ajax({url:myurl,async:false});

                }
            }

        </script>

 
        <div class="clr"></div>
    </div>

</div>

<div class="clr"></div>
</div>
</div>
</div> 
<!--底部-->
</div><script>
    KindEditor.ready(function(K) {
        var editor = K.editor({
            allowFileManager : true
        });

        K('#image').click(function() {
            editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                    showRemote : false,
                    imageUrl : K('#img').val(),
                    clickFn : function(url, title, width, height, border, align) {
                        K('#img').val(url);
                        var show_img = '<img src = "' + url + '" width="80" height="80" />';
                        $('#show_img').html(show_img);
                        editor.hideDialog();
                    }
                });
            });
        });
    });
</script>

<!--选择首页模板-->
<script>
$(function(){

//列表hover效果
$(".grid li").hover(
function(){
$(this).addClass("hover");
},
function(){
$(this).removeClass("hover");
}
);
$(".prdInfo").click(function(){
return false;
});

$('#grid').mixitup({layoutMode: 'grid'});
});
</script> 
	  
	  
<script>

	$(function(){
		$("img").lazyload();
	});
            $(".radio").click(function(){
                $(".cateradio li").each(function(){
                    $(this).removeClass("active ck");
                });
                $(this).parents("li").addClass("active ck");
                var myurl='index.php?g=User&m=Tmpls&a=add&style='+$(this).val()+'&r='+Math.random(); 
                $.ajax({url:myurl,async:false});

              //  $("#myiframe").attr("src",$("#myiframe").attr("src")+'&r='+Math.random());	


            });
</script>

<?php if(session('isQcloud') != true): ?><div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div><?php endif; ?>
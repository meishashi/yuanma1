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
<div class="content"  >



<div class="cLineB">



<h4 class="left">一键导航 </h4><br ><br ><br >
 <div style="padding-bottom:10px;">
	<p><span class="bold">移动红点生成导航连接!</span>将生成的导航连接复制到需要的地方！</p>
	<p><span class="bold">一键导航生成连接：</span><br /><textarea  onclick="this.select();"id="url"  style="width:100%; height:25px; border: hidden; overflow:hidden; background: #f9edbe ; color:#C0C"></textarea><span class="red">请注意标题字数和地址字数，过长的导航url可能会被截断导致导航页面错误！如果一定要很长，请将生成的url进行缩短处理！建议标题10字内，地址20字内！</span></p>
</div>

<div class="msgWrap form">
           
	  标题:<input type="text" class="px" id="title"  name="title" onchange="mkurl()"  style="width:366px;"    placeholder="请输入标题"   /><br /><br />地址:<input type="text" class="px" id="suggestId"  name="place"   style="width:366px;"  onchange="loadmap()" value=""   />  
	 经度:<input type="input" class="px" id="lng" required value="116.403859"  name="lng" style="width:164px;">纬度:<input type="input" required class="px" id="lat" value="39.915236"  name="lat" style="width:162px;">
  <br />
	
   <div id="l-map"  style="width:100%; height:520px; margin-top:10px;" >
  
                  
</div>
<div id="r-result">
<input  type="hidden"  name="city" class="px" id="city" size="20" value=""/> </div> 



<script src="http://api.map.baidu.com/api?key=a258befb5804cb80bed5338c74dd1fd1&v=1.1&services=true" type="text/javascript" type="text/javascript" type="text/javascript" ></script><script type="text/javascript">

function mkurl(){
document.getElementById('url').value = "http://api.map.baidu.com/marker?location="+document.getElementById('lat').value+","+document.getElementById('lng').value+"&title="+ encodeURIComponent(document.getElementById('title').value)+"&content="+document.getElementById('suggestId').value+"&output=html";
}
var map = new BMap.Map("l-map");
var myGeo = new BMap.Geocoder();  
//map.addControl(new BMap.MapTypeControl({mapTypes: [BMAP_NORMAL_MAP,BMAP_HYBRID_MAP]}));     //2D图，卫星图

//map.addControl(new BMap.MapTypeControl({anchor: BMAP_ANCHOR_TOP_LEFT}));    //左上角，默认地图控件

//alert(city);
var currentPoint ;
var marker1;
var marker2;
map.enableScrollWheelZoom(); 
//var point = new BMap.Point(116.331398,39.897445);  

map.enableDragging();   
map.enableContinuousZoom();
map.addControl(new BMap.NavigationControl());  
map.addControl(new BMap.ScaleControl());  
map.addControl(new BMap.OverviewMapControl());
 var point = new BMap.Point(120.381498,31.496331);//定义一个中心点坐标
 
doit(point);

 function auto(){
 var geolocation = new BMap.Geolocation();  
geolocation.getCurrentPosition(function(r){  
if(this.getStatus() == BMAP_STATUS_SUCCESS){  
//var mk = new BMap.Marker(r.point);  
//map.addOverlay(mk);  
 // point = r.point;  
//map.panTo(r.point); 

var point = new BMap.Point(r.point.lng,r.point.lat);  
marker1 = new BMap.Marker(point);        // 创建标注
map.addOverlay(marker1);
var opts = {
width : 220,     // 信息窗口宽度 220-730
height: 60,     // 信息窗口高度 60-650
title : ""  // 信息窗口标题
}
var infoWindow = new BMap.InfoWindow("定位成功这是你当前的位置!,移动红点标注目标位置，你也可以直接修改上方位置,系统自动定位!", opts);  // 创建信息窗口对象
marker1.openInfoWindow(infoWindow);      // 打开信息窗口
doit(point);

}else {  
 
}  
})
 }
function  doit(point){

//map.centerAndZoom(point,12);  
 

//myGeo.getPoint(city, function(point){ 
if (point) {
//window.external.setlngandlat(point.lng,point.lat);
//alert(point.lng + "  ddd " + point.lat);

 document.getElementById('lat').value = point.lat;
  document.getElementById('lng').value =point.lng;
map.setCenter(point);
map.centerAndZoom(point, 15);
map.panTo(point);

var cp = map.getCenter();		
myGeo.getLocation(point, function(result){  
if (result){
 document.getElementById('suggestId').value = result.address;
 mkurl();
}			
});	






marker2 = new BMap.Marker(point);        // 创建标注  
var opts = {
width : 220,     // 信息窗口宽度 220-730
height: 60,     // 信息窗口高度 60-650
title : ""  // 信息窗口标题
}
var infoWindow = new BMap.InfoWindow("拖拽地图或红点，在地图上用红点标注您的店铺位置。", opts);  // 创建信息窗口对象
marker2.openInfoWindow(infoWindow);      // 打开信息窗口

map.addOverlay(marker2);                     // 将标注添加到地图中

marker2.enableDragging();
marker2.addEventListener("dragend", function(e){
 document.getElementById('lat').value =e.point.lat;
   document.getElementById('lng').value =e.point.lng;

myGeo.getLocation(new BMap.Point(e.point.lng,e.point.lat), function(result){  
if (result){
$('suggestId').value = result.address;
//$('city').value = result.city;
//			alert(result.address)				
//	window.external.setaddress(result.address);//setarrea(result.address);//
//marker1.setPoint(chaoxidecaonima by:weiwo));        // 移动标注
marker2.setPoint(new BMap.Point(e.point.lng,e.point.lat));     
map.panTo(new BMap.Point(e.point.lng,e.point.lat));
//window.external.setlngandlat(e.point.lng,e.point.lat);
}

});	
});	

map.addEventListener("dragend", function showInfo(){
var cp = map.getCenter();		
myGeo.getLocation(new BMap.Point(cp.lng,cp.lat), function(result){  
if (result){
 document.getElementById('suggestId').value = result.address;
 document.getElementById('lat').value =cp.lat;
   document.getElementById('lng').value =cp.lng;
   
//	window.external.setaddress(result.address);//setarrea(result.address);//
//alert(point.lng + "  ddd " + point.lat);
//marker1.setPoint(new BMap.Point(cp.lng,cp.lat));        // 移动标注
marker2.setPoint(new BMap.Point(cp.lng,cp.lat));     
map.panTo(new BMap.Point(cp.lng,cp.lat));

//window.external.setlngandlat(cp.lng,cp.lat);
}			
});	
 mkurl();
});	

map.addEventListener("dragging", function showInfo(){
var cp = map.getCenter();
//marker1.setPoint(new BMap.Point(cp.lng,cp.lat));        // 移动标注
marker2.setPoint(new BMap.Point(cp.lng,cp.lat)); 
map.panTo(new BMap.Point(cp.lng,cp.lat));
map.centerAndZoom(marker2.getPoint(), map.getZoom());
 
});	


}


//}, province);


}


function loadmap() {
var province =  document.getElementById('city').value;
var city =   document.getElementById('suggestId').value ;
// 将结果显示在地图上，并调整地图视野  
myGeo.getPoint(city, function(point){  
if (point) {
//marker1.setPoint(new BMap.Point(point.lng,point.lat));        // 移动标注
marker2.setPoint(new BMap.Point(point.lng,point.lat));  
//window.external.setlngandlat(marker2.getPoint().lng,marker2.getPoint().lat);
//alert(point.lng + "  ddd " + point.lat);
 document.getElementById('lat').value =point.lat;
   document.getElementById('lng').value =point.lng;
map.panTo(new BMap.Point(marker2.getPoint().lng,marker2.getPoint().lat));
map.centerAndZoom(marker2.getPoint(), map.getZoom());
 mkurl();
}}, province);
} 

function setarrea(address,city) {
$('suggestId').value = address;
//$('city').value=city;
window.setTimeout(function(){
loadmap();
},2000);
}

function initarreawithpoint(lng,lat){
window.setTimeout(function(){
//marker1.setPoint(new BMap.Point(lng,lat));        // 移动标注
marker2.setPoint(new BMap.Point(lng,lat));  
//window.external.setlngandlat(lng,lat);
map.panTo(new BMap.Point(lng,lat));
map.centerAndZoom(marker2.getPoint(), map.getZoom());
}, 2000);	
}





</script>

 

</div>
 

 
            
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>手机预览</title>
<meta http-equiv="MSThemeCompatible" content="Yes" />
</head>
<script src="<?php echo RES;?>/js/jquery.js" type="text/javascript"></script>
<script  type="text/javascript">
function genImgCentralStyle(b) {
    var c = $(b), e = b.width, b = b.height, d = c.parent().width(), f = c.parent().height();
//
    var l = e / b;
    l > d / f ? (b = f, e = l * b, c.css({height:b, width:e, top:0, left:(d - e) / 2}).show()) : (e = d, b = e / l, c.css({height:b, width:e, top:(f - b) / 2, left:0}).show())
  };
</script>
<style>
a {
	color: rgb(99, 107, 137); text-decoration: none;
}
a:hover {
	color: rgb(0, 153, 0); text-decoration: none;
}
a:active {
	color: rgb(0, 153, 0); text-decoration: none;
}
.phonecube {
	overflow: hidden;
}
.phonemenucube {
	height: 360px; overflow: hidden;background-color:rgb(249, 241, 212);
}
.phonehimg {
	background: url("<?php echo RES;?>/images/me.png") no-repeat; border: 1px solid rgb(219, 219, 219); width: 40px; height: 40px; overflow: hidden; margin-top: 10px; margin-left: 10px; float: left; _display: inline;
}
.phonetext {
	background: url("<?php echo RES;?>/images/talkbg.png") no-repeat; width: 280px; height: 260px; overflow: hidden; margin-top: 10px; margin-right: 10px; float: right;
}
.phonetextb {
	background: rgb(255, 255, 255); width: 170px; height: 242px; overflow: hidden; margin-top: 10px; margin-left: 11px;
}
.phonetext_txt {
	border: currentColor; width: 170px; height: 242px; overflow: hidden;
}
.phonetwo {
	background: rgb(255, 255, 255); margin: 10px auto; border-radius: 6px; border: 1px solid rgb(204, 204, 204); width: 280px; height: auto; overflow: hidden; box-shadow: 2px 2px 3px #e6e6e6;
}
.phonetwo_title {
	font: 14px/26px "微软雅黑"; font-weight: bold;height: 26px; text-align: left; overflow: hidden; margin-top: 10px; font-size-adjust: none; font-stretch: normal; margin-left: 5px
}

.phonetwo_photo {
	margin: 10px auto;width: 270px;overflow: hidden;  height:150px;
}
.phonetwo_photo span{position:absolute;width: 270px;overflow: hidden;  height:150px;}
.phonetwo_photo span img{position:absolute;}

.phonetwo_txt {
		font: 12px/16px "微软雅黑";margin: 0px auto 10px; border: 1px solid rgb(219, 219, 219); width: 270px;overflow: hidden;
}
.phonetwo_link {
	font: 12px/26px "微软雅黑"; padding: 0px 12px; height: 27px; text-align: left; overflow: hidden; margin-bottom: 10px; font-size-adjust: none; font-stretch: normal;
}
</style>
<body style="overflow:hidden;">
<div class="phonemenucube">
<div class="phonetwo">
<div class="phonetwo_title"><?php echo ($info["title"]); ?></div>
<div class="phonetwo_photo"><span><img src="<?php echo ($info["pic"]); ?>" class="t-img" onload="genImgCentralStyle(this);"></span></div>
<input name="twopic" id="twopic" type="hidden" value="">
<div class="phonetwo_txt"><?php echo ($info["text"]); ?></div>
<div class="phonetwo_link">
<div class="phonelink">
<a href="<?php echo ($info["url"]); ?>">阅读全文</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&gt;
</div>
<input name="twolink" class="linkinput" type="hidden" value="http://">
</div>
</div>
</div>

<script type="text/javascript">
//$(".t-img").VMiddleImg();
</script>


</body>
</html>
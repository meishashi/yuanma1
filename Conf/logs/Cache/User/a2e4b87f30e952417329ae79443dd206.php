<?php if (!defined('THINK_PATH')) exit();?>﻿<link href="<?php echo RES;?>/css/style.css?id=100" rel="stylesheet" type="text/css" /> 
 <script src="/tpl/static/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="/tpl/static/upyun.js?2013"></script>
 <style>
 .userinfoarea th {
text-align: left;
width: 145px;
height: 30px;
font-size: 14px;
font-weight: bold;
line-height: 30px;
padding: 8px 0;
}
.userinfoarea td {
margin-left: 10px;
padding: 8px 0;
color: #666;
font-size: 12px;
height: 50px;
}
.userinfoarea td .px{ height:35px}
 </style>

<div class="content">
          <div class="cLineB"><h4>添加微信公众号</h4></div>
          <form method="post" action="<?php echo U('User/Index/upsave');?>" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
          <div class="msgWrap">
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                <tr>
                  <th><span class="red">*</span>公众号名称：</th>
                  <td><input type="text" required="" class="px" name="wxname" value="<?php echo ($info["wxname"]); ?>" tabindex="1" size="25">
                  </td>
                </tr>
              </thead>
              
              <tbody>
                <?php if($_GET['biz'] != 1): ?><tr>
                  <th><span class="red">*</span>公众号原始id：</th>
                  <td><input type="text" required="" name="wxid" value="<?php echo ($info["wxid"]); ?>" onmouseup="this.value=this.value.replace('_430','')" class="px" tabindex="1" size="25">　<span class="red">请认真填写，错了不能修改。</span>比如：gh_423dwjkeww3 <a href="/tpl/static/getoid.htm" target="_blank"><img src="<?php echo RES;?>/images/help.png" class="vm helpimg" title="帮助"></a></td>
                </tr>
                <tr>
                  <th><span class="red">*</span>微信号：</th>
                  <td><input type="text" required="" name="weixin" value="<?php echo ($info["weixin"]); ?>" class="px" tabindex="1" size="25">　比如：lentu123 </td>
                </tr>
                  <tr>
                  <th>头像地址（url）:</th>
                  <td><input class="px" name="headerpic" id="pic" value="<?php echo ($info["headerpic"]); ?>" size="60">    <script src="/tpl/static/upyun.js?2013"></script><a href="###" onclick="upyunPicUpload('pic',200,200,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic')">预览</a></td>
                </tr>
                 
                 <input type="hidden" name="token" value="<?php echo ($info["token"]); ?>" class="px" tabindex="1" size="40">
                <tr>
                  <th><span class="red"></span>AppID（公众号）：</th>
                  <td><input type="text" name="appid" value="<?php echo ($info["appid"]); ?>" class="px" tabindex="1" size="25">　用于自定义菜单等高级功能，可以不填 </td>
                </tr>
                <tr>
                  <th><span class="red"></span>AppSecret：</th>
                  <td><input type="text" name="appsecret" value="<?php echo ($info["appsecret"]); ?>" class="px" tabindex="1" size="25">　用于自定义菜单等高级功能，可以不填 </td>
                </tr>
                <tr>
                  <th><span class="red"></span>消息加密方式：</th>
                  <td><select id="winxintype" name="encode">                  
                  <option value="0" <?php if(($info["encode"]) == "0"): ?>selected<?php endif; ?>>明文模式</option>
                  <option value="1" <?php if(($info["encode"]) == "1"): ?>selected<?php endif; ?>>兼容模式</option>
                  <option value="2" <?php if(($info["encode"]) == "2"): ?>selected<?php endif; ?>>安全模式</option>
                  </select>　 </td>
                </tr>
                <tr>
                  <th><span class="red"></span>AesEncodingKey：</th>
                  <td><input type="text" name="aeskey" value="<?php echo ($info["aeskey"]); ?>" class="px" tabindex="1" size="55">　加密消息的AesEncodingKey </td>
                </tr>
                
                <tr>
                  <th><span class="red"></span>微信号类型：</th>
                  <td><select id="winxintype" name="winxintype">                  
                  <option value="1" <?php if(($info["winxintype"]) == "1"): ?>selected<?php endif; ?>>订阅号</option>
                  <option value="2" <?php if(($info["winxintype"]) == "2"): ?>selected<?php endif; ?>>服务号</option>
                  <option value="3" <?php if(($info["winxintype"]) == "3"): ?>selected<?php endif; ?>>认证服务号</option>
                  </select>　认证服务号是指每年向微信官方交300元认证费的公众号 </td>
                </tr>
                <!--蓝海之蓝首发 淘宝店:http://o2oo.taobao.com/-->
                <tr>
                  <th><span class="red">*</span>地区</th>
                  <td>
                  省：<input type="text" class="px" id="province" value="<?php echo ($info["province"]); ?>" name="province" tabindex="1" size="20">  市：<input id="city" value="<?php echo ($info["city"]); ?>" type="text" name="city" class="px" tabindex="1" size="20">
               （此处关联公交等本地化查询）
                  </td>
                </tr>
                <tr>
                  <th>公众号邮箱：</th>
                  <td><input type="text" required="" class="px" tabindex="1" value="<?php echo ($info["qq"]); ?>" name="qq" size="25"></td>
                </tr>
                 <tr>
                  <th>粉丝数：</th>
                  <td><input type="text" required="" name="wxfans" value="<?php echo ($info["wxfans"]); ?>" class="px" tabindex="1" size="25"></td>
                </tr>
             
                <tr>
                  <th>类型：</th>
                  <td><select id="type" name="type">
                  <option value="1,情感" <?php if(($info["typeid"]) == "1"): ?>selected<?php endif; ?> >情感</option>
                  <option value="2,数码" <?php if(($info["typeid"]) == "2"): ?>selected<?php endif; ?> >数码</option>
                  <option value="3,娱乐" <?php if(($info["typeid"]) == "3"): ?>selected<?php endif; ?> >娱乐</option>
                  <option value="4,IT" <?php if(($info["typeid"]) == "4"): ?>selected<?php endif; ?> >IT</option>
                  <option value="5,数码" <?php if(($info["typeid"]) == "5"): ?>selected<?php endif; ?> >数码</option>
                  <option value="6,购物" <?php if(($info["typeid"]) == "6"): ?>selected<?php endif; ?> >购物</option>
                  <option value="7,生活" <?php if(($info["typeid"]) == "7"): ?>selected<?php endif; ?> >生活</option>
                  <option value="8,服务" <?php if(($info["typeid"]) == "8"): ?>selected<?php endif; ?> >服务</option>
                  </select></td>
                </tr>
                <tr>
                    <td colspan="2"><br /></td>
                </tr>


                <tr>
                    <th>AppID（服务窗）:</th>
                    <td><input type="text" name="fuwuappid" value="<?php echo ($info["fuwuappid"]); ?>" class="px" size="25" />　用于支付宝服务窗，可以不填</td>
                </tr><?php endif; ?>
                <tr>
                  <th></th>
                  <td><button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn" id="saveSetting">保存</button></td>
                </tr>
              </tbody>
            </table>
            
          </div>
          </form>
        </div>
             <!--蓝海之蓝首发 淘宝店:http://o2oo.taobao.com/-->
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <!--底部-->
  	</div>
<div style="display:none">
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
</div>
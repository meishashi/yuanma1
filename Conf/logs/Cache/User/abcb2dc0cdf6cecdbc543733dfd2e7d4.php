<?php if (!defined('THINK_PATH')) exit();?> <style>
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
<script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo STATICS;?>/artDialog/plugins/iframeTools.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
<link href="tpl/static/simpleboot/themes/flat/theme.min.css" rel="stylesheet">
<div class="content" style="margin-left:20px; height:1000px">
<!--tab start-->
<link href="<?php echo RES;?>/css/style.css?id=100" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />  

          <div class="cLineB"><h4>添加微信公众号</h4></div>
          <form method="post" action="<?php echo U('User/Index/insert');?>" enctype="multipart/form-data">
          <div class="msgWrap">
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                <tr>
                  <th><span class="red">*</span>公众号名称：</th>
                  <td><input type="text" required class="px" name="wxname" value=""  tabindex="1" size="25">
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th><span class="red">*</span>公众号原始id：</th>
                  <td><input type="text" required name="wxid" value="" onmouseup="this.value=this.value.replace('_430','')" class="px" tabindex="1" size="25">　<span class="red">请认真填写，错了不能修改。</span>比如：gh_423dwjkeww3 <a href="/tpl/static/getoid.htm" target="_blank"><img src="<?php echo RES;?>/images/help.png" class="vm helpimg" title="帮助"></a></td>
                </tr>
                <tr>
                  <th><span class="red">*</span>微信号：</th>
                  <td><input type="text" required name="weixin" value="" class="px" tabindex="1" size="25">　比如：bluesea </td>
                </tr>
                  <tr >
                  <th><span class="red">*</span>头像地址（url）:</th>
                  <td><input type="text" class="px" name="headerpic" id="headerpic" value="<?php echo RES;?>/images/portrait.jpg" size="60">请填写图片外链地址 <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('headerpic',1000,500,'<?php echo ($token); ?>')" class="btn btn-primary btn_submit  J_ajax_submit_btns">上传</a> <a href="###" onclick="viewImg('headerpic')" class="btn btn-primary btn_submit  J_ajax_submit_btns">预览</a>&nbsp;头像图片
                  </td>
                </tr>
                <tr>
                  <th><span class="red"></span>AppID：</th>
                  <td><input type="text" name="appid" value="" class="px" tabindex="1" size="35">　用于自定义菜单等高级功能，可以不填 </td>
                </tr>
                <tr>
                  <th><span class="red"></span>AppSecret：</th>
                  <td><input type="text" name="appsecret" value="" class="px" tabindex="1" size="45">　用于自定义菜单等高级功能，可以不填 </td>
                </tr>
                <tr>
                  <th><span class="red"></span>微信号类型：</th>
                  <td><select id="winxintype" name="winxintype">                  
                  <option value="1">订阅号</option>
                  <option value="2">服务号</option>
                  <option value="3">高级服务号</option>
                  </select>　高级服务号是指每年向微信官方交300元认证费的公众号 </td>
                </tr>
                 <tr >
                  <th><span class="red">*</span>TOKEN</th>
                  <td><input type="text" name="token" maxlength="30" value="<?php echo ($tokenvalue); ?>" class="px" tabindex="1" size="40">无需修改，保持默认即可</td>
                </tr>
                
                <tr>
                  <th><span class="red">*</span>地区</th>
                  <td>
                  <input type="text" class="px" id="province" value="<?php echo ($province); ?>" name="province" tabindex="1" size="20"> 省  <input id="city" value="<?php echo ($city); ?>" type="text" name="city" class="px" tabindex="1" size="20"> 市
               （此处关联公交等本地化查询）
                  </td>
                </tr>
                <tr >
                  <th><span class="red">*</span>公众号邮箱：</th>
                  <td><input type="text" required class="px" tabindex="1" value="" name="qq" size="35"></td>
                </tr>
                 <tr >
                  <th><span class="red">*</span>粉丝数：</th>
                  <td><input type="text" required name="wxfans" value="0" class="px" tabindex="1" size="25"></td>
                </tr>
             
                <tr>
                  <th>类型：</th>
                  <td><select id="type" name="type">                  
                  <option value="1,情感">情感</option>
                  <option value="2,数码">数码</option>
                  <option value="3,娱乐">娱乐</option>
                  <option value="4,IT">IT</option>
                  <option value="5,数码">数码</option>
                  <option value="6,购物">购物</option>
                  <option value="7,生活">生活</option>
                  <option value="8,服务">服务</option>
                  </select></td>
                </tr>
              
                <tr>
                  <th></th>
                  <td><button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn" id="saveSetting">保存</button></td>
                </tr>
              </tbody>
            </table>
            
          </div>
          </form>
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
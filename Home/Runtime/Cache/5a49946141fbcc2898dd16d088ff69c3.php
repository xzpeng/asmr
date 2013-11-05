<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>美人网--<?php echo ($pageTitle); ?>频道</title>
  <link href="__PUBLIC__/Home/Css/public.css" rel="stylesheet" type="text/css" />
  <link href="__PUBLIC__/Home/Css/public2.css" rel="stylesheet" type="text/css" />
  <script src="__PUBLIC__/Js/jquery-1.9.1.min.js"></script>
  <script src="__PUBLIC__/Home/Js/public.js"></script>
</head>

<div id="top">
    <div id="loginDiv">
        <div style="display:<?php echo ($isLogin); ?>;">
            <a href="__APP__/User/snsLogin?type=qq" class="top_reg"><img src="#" />QQ登录</a>
            <a href="__APP__/User/snsLogin?type=tencent" class="top_reg"><img src="#" />腾讯微博登录</a>
        </div>
        <div style="display:<?php echo ($myInfo); ?>;">
            <a href="__APP__/Center/index"><img src="__PUBLIC__/Uploads/<?php echo ($picture); ?>" height="30" width="30" class="top_picture"/></a>
            <a href="__APP__/Center/index" class="top_reg"><?php echo ($userName); ?>
                <?php if($rna == 1 ): ?>&nbsp;&nbsp;<img  src="__PUBLIC__/Home/Images/v1.png" width="14" height="14" style="vertical-align:middle;" title="已通过实名认证" /><?php endif; ?>
            </a>
            <span class="top_reg">等级</span><a class="top_reg" href="#">签到</a>
            <a href="__APP__/User/loginout" class="top_reg">退出</a>
        </div>
    </div>
    <div id="bdshareDiv">
        <a href="#">每日签到一朵花</a>
        <a href="__APP__/Production">商家入驻须知·商家入驻</a>
    </div>
</div>
<div class="clear"></div>
<div id="content_center">
  <!--主体-->
  <?php if($lineup == 1): ?><center>
     <h2>正在排队中...</h2><br/>
     <p>前方还有<?php echo ($linelength); ?>人在排队，请耐心等待</p>
   </center>
   <?php else: ?>
   <form action="__URL__/register" method="post" enctype="multipart/form-data">
        <h2>实名认证</h2>
        真实姓名：<input name="name" type="text">
        <br />
        年龄：<input name="age" type="text">
        <br />
        身份证上传：正面<input name="IDCard_a" type="file">反面<input name="IDCard_b" type="file">
        <br />
        手机：<input name="mobile" type="text">
        <br />
        QQ：<input name="mobile" type="text">
        <br />
        收件地址：<input name="mobile" type="text">
        <br />
        1-3个工作日内(提交审核后将进入排队状态，排队期间无法再次提交)
      <input type="submit" name="button" id="button" value="提交审核">
  </form><?php endif; ?>
<br />
<br />
<p>
  <b>认证必读：</b>
  <br />
  <br />
  1、注册时填写的真实姓名、出生日期、详细地址等信息需要和身份证上的信息保持一致，如果不一致请先<a href="__APP__/Center/editData">修改</a>后再提交审核。<br />
  2、头像、封面形象和个人资料完善度同样也可能会影响审核结果。<br />
  3、实名认证通过后您的用户名上将会出现&nbsp;<img src="__PUBLIC__/Home/Images/v1.png" width="25" height="25" />&nbsp;认证图标，不通过将会重新返回上传提交界面。
</p>
<!--主体-->
</div>
<div id="content_bottom"></div>
</div>
</div>
</body>
</html>
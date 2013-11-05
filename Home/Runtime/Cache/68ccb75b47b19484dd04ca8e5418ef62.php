<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>美人网--<?php echo ($pageTitle); ?>频道</title>
<link rel="stylesheet" href="__PUBLIC__/Home/Css//reset-min.css"/>
<link rel="stylesheet" href="__PUBLIC__/Home/Css/Main.css"/>
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Home/Js/slider.js"></script>
</head>
<body>
    <div class="wrap wrap2">
        <div class="top clearfix">
        <div style="display:<?php echo ($isLogin); ?>;">
            <ul class="top_l">
                <li class="qq"><a href="__APP__/User/snsLogin?type=qq">QQ登录</a></li>
                <li class="blog"><a href="__APP__/User/snsLogin?type=tencent">腾讯微博登陆</a></li>
            </ul>
        </div>
        <div style="display:<?php echo ($myInfo); ?>;">
            <a href="__APP__/Center/index" class="top_reg"><?php echo ($userName); ?>
                <?php if($rna == 1 ): ?>&nbsp;&nbsp;<img  src="__PUBLIC__/Home/Images/v1.png" width="14" height="14" style="vertical-align:middle;" title="已通过实名认证" /><?php endif; ?>
            </a>
            <a href="__APP__/User/loginout" class="top_reg">退出</a>
        </div>
        <ul class="top_r">
            <li class="nobg"><a href="#">每日签到一朵花</a></li>
            <li><a href="__APP__/Production/Notice">商家入驻须知</a></li>
            <li class="dot"><em>&nbsp;</em></li>
            <li><a href="__APP__/Production">商家入驻</a></li>
            <li>客服QQ：2024639515</li>
        </ul>
    </div>
    <div class="logo"><img src="__PUBLIC__/Home/Images/images/logo2.jpg" /></div>
    <div class="register_form clearfix">
        <form action="__URL__/register" method="post" enctype="multipart/form-data">
            <dl>
                <dt>真实姓名：</dt>
                <dd><input name="name" type="text" class="txt" /></dd>
            </dl>
            <dl>
                <dt>年龄：</dt>
                <dd><input name="age" type="text" class="txt" /></dd>
            </dl>
            <dl>
                <dd>身份证上传：正面&nbsp;<input name="idcard_a" type="file" class="txt mid noborder"/> 背面&nbsp;<input name="idcard_b" type="file" class="txt mid noborder"/></dd>
            </dl>             
            <dl>
                <dt>手机：</dt>
                <dd><input name="mobile" type="text" class="txt normal"/><span>真实手机号，日后便于接收优惠信息</span></dd>
            </dl>
            
            <dl>
                <dt>QQ：</dt>
                <dd><input name="qq" type="text" class="txt normal" /></dd>
            </dl>
            <dl>
                <dt>收件地址：</dt>
                <dd><input name="address" type="text" class="txt" /></dd>
            </dl>
            <dl>
                <dt>&nbsp;</dt>
                <dd>
                    <input type="submit" class="btn" value="提交审核" />
                </dd>
            </dl>
        </form>
    </div>
    <div class="short">
        <a href="#"><img src="__PUBLIC__/Home/Images/images/lv.jpg" /></a>
    </div>
</div>
</body>
</html>
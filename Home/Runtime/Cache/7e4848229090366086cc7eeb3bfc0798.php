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
<div class="wrap">
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
    <div class="box clearfix">
        <div class="box_l">
            <ul class="box_ul">
                <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img1.jpg" /></a></li>
                <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img2.jpg" /></a></li>
                <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img3.jpg" /></a></li>
                <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img4.jpg" /></a></li>
                <li style="width:450px;">
                    <div id="focus">
                        <ol>
                            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/f1.jpg" /></a></li>
                            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/f2.jpg" /></a></li>
                            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/f3.jpg" /></a></li>
                        </ol>
                    </div>
                </li>
            </ul>
        </div>
        <div class="box_r"><a href="#"><img src="__PUBLIC__/Home/Images/images/img5.jpg" /></a></div>
    </div>
    <div class="box clearfix">
        <ul>
            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img6.jpg" /></a></li>
            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img7.jpg" /></a></li>
            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img8.jpg" /></a></li>
            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img9.jpg" /></a></li>
            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img10.jpg" /></a></li>
            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img11.jpg" /></a></li>
            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img12.jpg" /></a></li>
            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img13.jpg" /></a></li>
            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img14.jpg" /></a></li>
            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img15.jpg" /></a></li>
            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img16.jpg" /></a></li>
            <li><a href="#"><img src="__PUBLIC__/Home/Images/images/img17.jpg" /></a></li>
        </ul>
    </div>
    <div class="footer"></div>
</div>
</body>
</html>
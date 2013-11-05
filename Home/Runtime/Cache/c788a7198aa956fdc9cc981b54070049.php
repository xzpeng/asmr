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
    <div class="logo"><img src="__PUBLIC__/Home/Images/images/logo.jpg" /></div>
    <div class="register_form clearfix form2">
        <form action="__URL__/doPublishProduct" method="post" enctype="multipart/form-data">
            <dl>
                <dt>产品链接：</dt>
                <dd><input name="plink" type="text" class="txt" /></dd>
            </dl>
            <dl>
                <dt>报名类别：</dt>
                <dd>
                    <select name="pcategory">
                        <option value="美装">美装</option>
                        <option value="美装">美鞋</option>
                        <option value="美装">美包</option>
                        <option value="美装">美肤</option>
                        <option value="美装">美居</option>
                        <option value="美装">美酒</option>
                        <option value="美装">美食</option>
                    </select>
                    <select name="psubcategory">
                        <option value="美人贵宾卡专享">美人贵宾卡专享</option>
                        <option value="QQ黄钻贵族专享">QQ黄钻贵族专享</option>
                        <option value="美人贵宾卡专享">普通用户专区</option>
                    </select>
                    <select name="discount">
                        <option value="1">1折</option>
                        <option value="2">2折</option>
                        <option value="3">3折</option>
                        <option value="4">4折</option>
                        <option value="5">5折</option>
                        <option value="6">6折</option>
                        <option value="8">8折</option>
                        <option value="9">9折</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>商品原价：</dt>
                <dd><input name="poriginalprice" type="text" class="txt small" /> 折后价：<input name="pdiscountprice" type="text" class="txt small" /></dd>
            </dl>             
            <dl>
                <dd>
                    提交活动标准预览图：
                    <input type="file" name="pimage" class="txt normal noborder"/><span>标准为：000X000像素</span><span class="download"><a href="#">模板下载</a></span>
                </dd>
            </dl>
            <dl>
                <dt>联系人：</dt>
                <dd><input name="cname" type="text" class="txt normal" /></dd>
               
            </dl>
            <dl>
                <dt>QQ：</dt>
                <dd><input name="cqq" type="text" class="txt normal" /></dd>
            </dl>
            <dl>
                <dt>手机：</dt>
                <dd><input name="cmobile" type="text" class="txt normal" /></dd>
            </dl>
            <dl>
                <dt>邮箱：</dt>
                <dd><input name="cemail" type="text" class="txt normal" /></dd>   
            </dl>
            <dl>
                <dt>&nbsp;</dt>
                <dd>
                    <input type="submit" class="btn" value="提交申请" />
                </dd>
            </dl>
        </form>
    </div>
    <div class="footer short">
    Copyright 2013-2023, 版权所有WWW.MEIREN1520.COM
京ICP备11048099号-1  最佳分辨率1366*768，建议使用Chrome、Firefox、Safari、ie9版本浏览器 
</div>

</div>
</body>
</html>
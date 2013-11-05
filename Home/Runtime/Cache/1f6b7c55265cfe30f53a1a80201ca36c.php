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
        <h2>商家入驻须知：</h2>
        <p>报名商家无等级要求。</p>
        <p>商家报名的产品必须出具品牌授权或者商标证，商标受理通知书也可以。如发现PS造假，将永久屏蔽。本站有专业的PS设计师进行辨别。</p>
        <p>商家报名后，需在店铺首页和宝贝详情页悬挂本站广告。</p>
        <p>下载地址：</p>
        <p>链接地址：</p>
        <p>大额商品折扣价在200元-10000元以上报名审核通过后，需出示提交企业法人的经营执照。可通过客服提交备案。</p>
        <p>商家报名时，仔细查看本站报名套餐的折扣，提交后，本站便会默认商家应允此折扣，不可更改。如有特殊情况的，可以联系客服人员。选择以后，产品将自动归类。</p>
        <p>因为产品质量的问题而引起的纠纷，一律由商家承担。</p>
        <p>站内黄金广告位现在开始招商，具体价格可联系客服QQ。</p>
        <p>本站商品审核周期为2-7个工作日。</p>
        <p>本站审核上线日期为每天上午10点、下午2点、晚上8点三个时段。</p>
    </div>
    <div class="footer">
    <p>Copyright 2013-2023, 版权所有WWW.MEIREN1520.COM
    <br />
    <br />
    京ICP备11048099号-1  最佳分辨率1366*768，建议使用Chrome、Firefox、Safari、ie9版本浏览器 </p>
</div>

</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>美人网--<?php echo ($pageTitle); ?>频道</title>
<link href="__PUBLIC__/Home/Css/public.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Home/Css/public2.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Home/Css/Index_type<?php echo ($css); ?>.css" rel="stylesheet" type="text/css" />
<script src="__PUBLIC__/Js/jquery-1.9.1.min.js"></script>
<script src="__PUBLIC__/Home/Js/public.js"></script>
</head>

<body>
<!--包含登录框-->
<div id="loginBox">
<div id="login_left">
<h2>用户登录</h2>
<form action="__APP__/User/doLogin" method="post">
<table>
  <tr>
    <td>用户名</td>
    <td><input type="text" name="userName" id="userName" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>密码</td>
    <td><input type="password" name="password" id="password" /></td>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td>验证码</td>
    <td><input type="text" name="verify" id="verify" /></td>
    <td valign="middle"><img src="__APP__/Public/verify" class="verifyImg" /></td>
  </tr> 
  <tr>
    <td colspan="3" align="center"><input name="autoLogin" id="autoLogin" type="checkbox" value="true" />30天内自动登录</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="submit" value="登录" id="doLogin" /><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1565816819&site=qq&menu=yes">忘记密码？联系管理员</a></td>
    </tr>
</table>
</form>
</div>
<div id="login_center"></div>
<div id="login_close"></div>
<div id="login_right">
<h2>注册</h2>
<br /><br />
还没有账号？
<a href="__APP__/User/regis" target="_blank" class="regLink">立即注册</a>
</div>
</div>
<div id="loginBg">
</div>
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
        <a href="#">商家入驻须知·商家入驻</a>
    </div>
</div>
<div class="clear"></div>
<div id="main">
<div class="type_list">
<?php if(is_array($list)): $kid = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($kid % 2 );++$kid;?><a href="__APP__/Article/index/id/<?php echo ($vo["id"]); ?>" id="item<?php echo ($kid); ?>" class="list_item colorblock<?php echo ($vo["color"]); ?>">
<h1><?php echo ($vo["title"]); ?></h1>
<p><?php echo ($vo["remark"]); ?></p>
</a><?php endforeach; endif; else: echo "" ;endif; ?>
<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
<div id="bottom"><div id="bottom_content">
<a href="__APP__/Article/show/id/1">关于美人</a>&nbsp;&nbsp;<a href="__APP__/Article/show/id/2">法律条款</a>&nbsp;&nbsp;<a href="__APP__/Article/show/id/3">诚聘英才</a>&nbsp;&nbsp;<a href="__APP__/Article/show/id/4">商务合作</a>&nbsp;&nbsp;<a href="__APP__/Article/show/id/5">线下联盟</a>&nbsp;&nbsp;<a href="__APP__/Article/show/id/6">联系我们</a><br />
Copyright 2013-2023, 版权所有WWW.MEIREN1520.COM<br />
京ICP备11048099号-1&nbsp;&nbsp;最佳分辨率1366*768，建议使用Chrome、Firefox、Safari、ie9版本浏览器
</div>
<span style="display:none;">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fe6cd86014e276f6360060c7904dec030' type='text/javascript'%3E%3C/script%3E"));
</script>
</span>
</div>
</body>
</html>
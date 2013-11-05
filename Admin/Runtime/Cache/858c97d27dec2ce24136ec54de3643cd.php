<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>用户管理</title><script>var _URL='__URL__';
</script><link href="__PUBLIC__/Admin/Css/public.css" rel="stylesheet" type="text/css" /><script language="javascript" src="__PUBLIC__/Admin/Js/User_show.js"></script></head><body class="childPage"><table border="0" cellspacing="0" cellpadding="0" class="tab_edit"><tr><td width="120">ID</td><td><?php echo ($list["id"]); ?></td></tr><tr><td colspan="2"><font style="color:#F00;font-weight:bold;">基本信息</font></td></tr><tr><td>用户名</td><td><?php echo ($list["userName"]); ?></td></tr><tr><td>昵称</td><td><?php echo ($list["nickName"]); ?></td></tr><tr><td>头像</td><td>头像：<a onclick='openWindow("__PUBLIC__/Uploads/<?php echo ($userPath); ?>Picture/<?php echo ($list["picture"]); ?>")'><img src="__PUBLIC__/Uploads/<?php echo ($userPath); ?>Picture/<?php echo ($list["picture"]); ?>" height="100"/></a>&nbsp;&nbsp;形象：<a onclick='openWindow("__PUBLIC__/Uploads/<?php echo ($userPath); ?>Picture/<?php echo ($list["cover"]); ?>")'><img src="__PUBLIC__/Uploads/<?php echo ($userPath); ?>Picture/<?php echo ($list["cover"]); ?>" height="100"/></a></td></tr><tr><td>实名认证</td><td><div class="v_<?php echo ($list["rna"]); ?>" sid="<?php echo ($list["id"]); ?>"></div></td></tr><tr><td>操作</td><td><a href="__URL__/delete/id/<?php echo ($list["id"]); ?>" onClick="return confirm('是否删除此条记录？')">删除该用户</a>&nbsp;&nbsp;<a style="cursor:pointer;" id="noRna" sid="<?php echo ($list["id"]); ?>">移出审核队列</a>&nbsp;&nbsp;(排队状态：<?php echo ($list["lineup"]); ?>)&nbsp;&nbsp;<a id="resetPassword" sid="<?php echo ($list["id"]); ?>" style="cursor:pointer;">重置密码</a>&nbsp;&nbsp;<span id="newPassword" style="color:#f00;"></span></td></tr><tr><td colspan="2"><font style="color:#F00;font-weight:bold;">实名信息</font></td></tr><tr><td>真实姓名</td><td><?php echo ($list["name"]); ?></td></tr><tr><td>性别</td><td><?php echo ($list["sex"]); ?></td></tr><tr><td>出生日期</td><td><?php echo (date("Y年m月d日",$list["birthday"])); ?>&nbsp;&nbsp;时间戳：<?php echo ($list["birthday"]); ?></td></tr><tr><td>地区</td><td><?php echo ($list["area"]); ?></td></tr><tr><td>身份证号</td><td><?php echo ($list["IDNum"]); ?></td></tr><tr><td>身份证图片</td><td>正面：<a onclick='openWindow("__PUBLIC__/Uploads/<?php echo ($userPath); ?>IDCard/<?php echo ($list["IDCard_a"]); ?>")'><img src="__PUBLIC__/Uploads/<?php echo ($userPath); ?>IDCard/<?php echo ($list["IDCard_a"]); ?>" height="100"/></a>&nbsp;&nbsp;反面：<a onclick='openWindow("__PUBLIC__/Uploads/<?php echo ($userPath); ?>IDCard/<?php echo ($list["IDCard_b"]); ?>")'><img src="__PUBLIC__/Uploads/<?php echo ($userPath); ?>IDCard/<?php echo ($list["IDCard_b"]); ?>" height="100"/></a></td></tr><tr><td colspan="2"><font style="color:#F00;font-weight:bold;">联系信息</font></td></tr><tr><td>手机</td><td><?php echo ($list["mphone"]); ?></td></tr><tr><td>QQ</td><td><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($list["qq"]); ?>&site=qq&menu=yes"><?php echo ($list["qq"]); ?></a></td></tr><tr><td>邮箱</td><td><?php echo ($list["email"]); ?></td></tr><tr><td>微博</td><td><a href="<?php echo ($list["wburl"]); ?>" target="_blank"><?php echo ($list["wburl"]); ?></a></td></tr><tr><td>详细地址</td><td><?php echo ($list["address"]); ?></td></tr><tr><td colspan="2"><font style="color:#F00;font-weight:bold;">其他详细</font></td></tr><tr><td>平均分</td><td>身材：<?php echo ($list["stature_ave"]); ?>&nbsp;&nbsp;面容：<?php echo ($list["face_ave"]); ?>&nbsp;&nbsp;喜欢程度：<?php echo ($list["liked_ave"]); ?></td></tr><tr><td>身材</td><td>身高：<?php echo ($list["height"]); ?>&nbsp;&nbsp;体重：<?php echo ($list["weight"]); ?>&nbsp;&nbsp;三围：<?php echo ($list["measure1"]); ?>&nbsp;|&nbsp;<?php echo ($list["measure2"]); ?>&nbsp;|&nbsp;<?php echo ($list["measure3"]); ?></td></tr><tr><td>婚姻状况</td><td><?php echo ($list["marital"]); ?></td></tr><tr><td>学历</td><td><?php echo ($list["edu"]); ?></td></tr><tr><td>毕业院校</td><td><?php echo ($list["graduated"]); ?></td></tr><tr><td>职业</td><td><?php echo ($list["job"]); ?></td></tr><tr><td>工作经历</td><td><?php echo ($list["workRemark"]); ?></td></tr><tr><td colspan="2"><font style="color:#F00;font-weight:bold;">时间统计</font></td></tr><tr><td>注册时间</td><td><?php echo (date("Y年m月d日H时i分s秒",$list["regTime"])); ?>&nbsp;&nbsp;时间戳：<?php echo ($list["regTime"]); ?></td></tr><tr><td>登录时间</td><td><?php echo (date("Y年m月d日H时i分s秒",$list["loginTime"])); ?>&nbsp;&nbsp;(<?php echo ($list["loginTime_str"]); ?>)&nbsp;&nbsp;时间戳：<?php echo ($list["loginTime"]); ?></td></tr><tr><td>总共登录天数</td><td><?php echo ($list["loginDays"]); ?>&nbsp;天</td></tr></table></body></html>
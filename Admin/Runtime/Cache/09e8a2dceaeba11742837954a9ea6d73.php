<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>广告管理</title><script>var typeInfo=eval('<?php echo ($typeInfo); ?>');
var _URL='__URL__';
</script><link href="__PUBLIC__/Admin/Css/public.css" rel="stylesheet" type="text/css" /><link href="__PUBLIC__/Admin/Css/Vip_index.css" rel="stylesheet" type="text/css" /><script language="javascript" src="__PUBLIC__/Admin/Js/Vip_index.js"></script></head><body class="childPage"><table cellpadding="0" cellspacing="0" class="tab_list"><tr><td colspan="15" id="tab_top"><form action="__URL__/index" method="get">     类型：
    <select name="id" id="type" class="selectBox"><option value="">全部</option></select>    关键词:
    <input name="keywords" type="text" class="inputBox" />   推荐:
     <select name="recommend" class="selectBox"><option value="">不限</option><option value="1">仅显示推荐</option><option value="8">仅显示未推荐</option></select>    外链:
     <select name="href" class="selectBox"><option value="">不限</option><option value="1">仅显示外链</option><option value="2">仅显示未外链</option></select>     排序:
    <select name="sort" class="selectBox"><option value="">不限</option><option value="desc" selected="selected">递减</option><option value="asc">递增</option></select>    编辑时间:
    <select name="edit_time" class="selectBox"><option value="">不限</option><option value="desc" selected="selected">递减</option><option value="asc">递增</option></select>    人气：
     <select name="hits" class="selectBox"><option value="">不限</option><option value="desc">递减</option><option value="asc">递增</option></select><input type="submit" value="搜索" class="submitMode" /></form></td></tr><tr><td>ID</td><td>姓名</td><td>身份证正面</td><td>身份证反面</td><td>QQ</td><td>手机</td><td>审核</td><td>操作</td></tr><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td class="index1"><?php echo ($vo["id"]); ?></td><td class="index2"><?php echo ($vo["name"]); ?></td><td class="index3"><a href="<?php echo ($vo["idcard_a"]); ?>" title="<?php echo ($vo["idcard_a"]); ?>">链接</a></td><td class="index3"><a href="<?php echo ($vo["idcard_b"]); ?>" title="<?php echo ($vo["idcard_b"]); ?>">链接</a></td><td class="index5"><?php echo ($vo["qq"]); ?></td><td class="index6"><?php echo ($vo["mobile"]); ?></td><td class="index7"><div class="display_<?php echo ($vo["auth"]); ?>" sid="<?php echo ($vo["id"]); ?>"></div></td><td class="index8"><a href="__URL__/delete/id/<?php echo ($vo["id"]); ?>" onClick="return confirm('是否删除此条记录？')">删除</a>&nbsp;&nbsp;<a href="__URL__/edit/id/<?php echo ($vo["id"]); ?>">编辑</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?><tr><td colspan="8"><?php echo ($pageshow); ?></td></tr></table></body></html>
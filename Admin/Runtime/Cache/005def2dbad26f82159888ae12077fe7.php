<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link href="__PUBLIC__/Admin/Css/public.css" rel="stylesheet" type="text/css" /><link href="__PUBLIC__/Admin/Css/Type_edit.css" rel="stylesheet" type="text/css" /><script language="javascript" src="__PUBLIC__/Admin/Js/Type_edit.js"></script><title>分类编辑</title></head><body class="childPage"><table class="tab_edit" cellpadding="0" cellspacing="0"><tr><form action="__URL__/update" method="post" name="form1" id="form1"><td>ID:</td><td><?php echo ($list["id"]); ?><input type="hidden" name="id" value="<?php echo ($list["id"]); ?>" /></td></tr><tr><td>排序:</td><td><input type="text" name="sort" id="sort" class="inputBox" value="<?php echo ($list["sort"]); ?>" /></td></tr><tr><td>标题:</td><td><input type="text" name="title" id="title" class="inputBox" value="<?php echo ($list["title"]); ?>" /></td></tr><tr><td>描述:</td><td><textarea name="remark" cols="45" rows="5" class="textareaBox" id="remark"><?php echo ($list["remark"]); ?></textarea></td></tr><tr><td>显示:</td><td><div class="display_<?php echo ($list["display"]); ?>"><input type="hidden" name="display" id="display" value="<?php echo ($list["display"]); ?>" /></div></td></tr><tr><td colspan="2"><input type="submit" name="sub" class="submitMode" value="提交"/><input type="submit" name="com" class="submitMode" value="完成"/><input type="reset" class="submitMode" value="重置"/></td></tr></form></table></body></html>
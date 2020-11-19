<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo C('site_name');?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/statics/css/style.css"/>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/statics/js/calendar/calendar-blue.css"/>

<script type="text/javascript" src="__PUBLIC__/statics/js/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/statics/js/jquery/plugins/formvalidator.js"></script>
<script type="text/javascript" src="__PUBLIC__/statics/js/jquery/plugins/formvalidatorregex.js"></script>
<script type="text/javascript" src="__PUBLIC__/statics/js/jquery/plugins/jquery.imagePreview.js"></script>
<script type="text/javascript" src="__PUBLIC__/statics/js/kindeditor/kindeditor-min.js"></script>
<script type="text/javascript" src="__PUBLIC__/statics/js/calendar/calendar.js"></script>
<script type="text/javascript" src="__PUBLIC__/statics/js/common.js"></script>


</head>
<div class="pad-lr-10">
	<form name="searchform" action="" method="get" >
	<input name="a" type="hidden" value="index">
    <input name="m" type="hidden" value="Link">
    <input name="g" type="hidden" value="Admin">
    <table width="100%" cellspacing="0" class="search-form">
        <tbody>
            <tr>
            <td>
            <div class="explain-col">
            	关键字 :
                <input name="keyword" type="text" class="input-text" size="25" value="<?php echo ($keyword); ?>" />
                <input type="submit" name="search" class="button" value="搜索" />
        	</div>
            </td>
            </tr>
        </tbody>
    </table>
    </form>
	<form id="myform" name="myform" action="<?php echo U('Link/delete');?>" method="post">

    <div class="table-list">
      <table width="100%" cellspacing="0" style="word-break:break-all">
        <thead>
        <tr>
			<th width="5%">序号</th>
            <th width="1%"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
            <th width=300 align="left" style="padding-left:100px;">链接名称</th>
			<th width=300 align=left>链接地址</th>
			<th width=80>排序值</th>
            <th width=80>操作</th>
        </tr>
        </thead>
        <tbody>
          <?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
            <td align="center" width=100><?php echo ($val["key"]); ?></td>
            <td align="center" width=100><input type="checkbox" value="<?php echo ($val["id"]); ?>" name="id[]"></td>
            <td align="left" width=100 style="padding-left:100px;"><a href="<?php echo U('Link/edit',array('id'=>$val['id']));?>"><?php echo ($val["name"]); ?></a></td>
            <td align="left"><a href="<?php echo ($val["url"]); ?>" target="_blank"><font color="red"><?php echo ($val["url"]); ?></font></a></td>
            <td align="center" width=100><input type="text" class="input-text-c input-text" value="<?php echo ($val["ord"]); ?>" size="4" name="orders[<?php echo ($val["id"]); ?>]" /></td>
            <td align="center" width=100><a href="<?php echo U('Link/edit',array('id'=>$val['id']));?>"><em class="blue">编辑</em></a></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
	  <div class="btn">
		<label for="check_box" style="float:left;">全选/取消</label>
		<input type="submit" class="button" name="delete" value="删除" style="float:left;margin:0 10px 0 10px;" onclick="return check();"/>
		<input type="submit" class="button" name="order" onclick="document.myform.action='<?php echo U('Link/order');?>'" value="排序" style="float:left;margin:0 10px 0 0;"/>
		<div id="pages"><?php echo ($page); ?></div>
      </div>
	</div>
  </form>
</div>
</body>
</html>
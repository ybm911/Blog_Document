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


<div class="subnav">
	<h1 class="title-2 line-x">模板中心</h1>
</div>
<form id="myform" name="myform" action="<?php echo U('Theme/index');?>" method="post">
<div class="pad-10">
	<?php if(is_array($theme_list)): $i = 0; $__LIST__ = $theme_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="table_block" style="width:400px;">
    	<div class="pad-10">
    	<table>
        	<tr>
              <td><img src="<?php echo C('web_path');?>App/Tpl/Home/<?php echo ($val["dirname"]); ?>/Public/<?php echo ($val["dirname"]); ?>.jpg" width="120" height="160" style="border:1px #E4E4E4 solid;" /></td>
              <td valign="top">
                	<table>
                    	<tr><th align="right"><input type="radio" name="con[default_theme]" value="<?php echo ($val["dirname"]); ?>" <?php if(C('home.default_theme') == $val['dirname']): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;</th><td width="160"><?php if(C('home.default_theme') == $val['dirname']): ?><span class="red">默认</span><?php else: ?><span class="red">设为默认</span><?php endif; ?></td></tr>
                    	<tr><th align="right">模板文件夹：</th><td>/App/Tpl/Home/<?php echo ($val["dirname"]); ?></td></tr>
                    	<tr><th align="right">模板名称：</th><td><?php echo ($val["dirname"]); ?></td></tr>
                        <tr><th align="right">模板作者：</th><td><?php echo C('site_name');?></td></tr>
                    </table>
              </td>
            </tr>
        </table>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
	<div class="bk15"></div>
	<div class="btn"><input type="submit" value="提交" name="submit" class="button" id="submit"></div>
</div>
</form>
</body>
</html>
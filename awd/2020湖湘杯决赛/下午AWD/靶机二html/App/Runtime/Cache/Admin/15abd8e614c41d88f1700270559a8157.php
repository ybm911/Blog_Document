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
<div class="pad_10">
    <form action="<?php echo u('User/edit');?>" method="post" name="myform" id="myform" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
        <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
            <tr>
                <th width="60">会员昵称 :</th>
                <td><input type="text" name="name" id="name" size="25" value="<?php echo ($info["name"]); ?>" ></td>
            </tr>
            <tr>
                <th width="60">会员密码 :</th>
                <td><input type="text" name="passwd" id="passwd" size="25" value="" ></td>
            </tr>
			<tr>
                <th width="60">会员邮箱 :</th>
                <td><input type="text" name="email" id="email" size="25" value="<?php echo ($info["email"]); ?>" ></td>
            </tr>
			<tr>
                <th width="60">会员性别 :</th>
                <td><input type="radio" name="sex" value="1" <?php if($info["sex"] == '1'): ?>checked<?php endif; ?>>&nbsp;男&nbsp;&nbsp;&nbsp; 
					<input type="radio" name="sex" value="0" <?php if($info["sex"] == '0'): ?>checked<?php endif; ?>>&nbsp;女&nbsp;&nbsp;&nbsp; 
					<input type="radio" name="sex" value="2" <?php if($info["sex"] == '2'): ?>checked<?php endif; ?>>&nbsp;保密					
				</td>
            </tr>
			<tr>
                <th width="60">会员头像 :</th>
                <td><img src="Uploads/avatar_small/<?php echo ($info["img"]); ?>" width="60px" height="60px" /></td>
            </tr>
			<tr>
                <th width="60">个人网址 :</th>
                <td><input type="text" name="blog" id="blog" size="50" value="<?php echo ($info["blog"]); ?>" ></td>
            </tr>
            <tr>
                <th width="60">出身年月 :</th>
                <td><input type="text" name="brithday" id="brithday" size="50" value="<?php echo ($info["brithday"]); ?>"  ></td>
            </tr>
            <tr>
                <th width="60">联系地址 :</th>
                <td><input type="text" name="address" id="address" size="50" value="<?php echo ($info["address"]); ?>"  ></td>
            </tr>
			<tr>
                <th width="60">会员简介 :</th>
                <td><textarea rows="4" cols="50" name="info" id="info"><?php echo ($info["info"]); ?></textarea></td>
            </tr>
            <tr>
                <th width="60">审核状态 :</th>
                <td>
	                <input type="radio" name="status" value="1" <?php if($info["status"] == 1): ?>checked<?php endif; ?>>&nbsp;已审核&nbsp;&nbsp;&nbsp; 
	                <input type="radio" name="status" value="0" <?php if($info["status"] == 0): ?>checked<?php endif; ?>>&nbsp;未审核
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" id="dosubmit" class="button" value="提交">
    </form>
   
</div>
</body></html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台管理_<?php echo C('site_name');?></title>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/statics/js/common.js"></script>

<link rel='stylesheet' type='text/css' href='__PUBLIC__/statics/css/admin_login.css'>

</head>
<body>
<div class="main">
  <div class="title">&nbsp;</div>
  <div class="login">
    <form action="<?php echo U('Login/index');?>" method="post" name="cms" >
      <div class="inputbox">
        <dl>
          <dd>用户名：</dd>
          <dd>
            <input type="text" name="user_name" value="" id="login_name" size="25" onfocus="this.style.borderColor='#fc9938'" onblur="this.style.borderColor='#dcdcdc'" />
          </dd>
          <dd>密码：</dd>
          <dd>
            <input type="password" name="password" value="" id="login_pwd" size="25" onfocus="this.style.borderColor='#fc9938'" onblur="this.style.borderColor='#dcdcdc'" />
          </dd>
          <dd>
            <input type="submit"  name="login" value=" " class="input" />
          </dd>
        </dl>
      </div>
      <div style="clear:both"></div>
    </form>
  </div>
</div>
<div class="copyright"> 
	Powered by <a href="<?php echo C('site_domain');?>" target="_blank"><?php echo C('site_name');?></a> Copyright &copy;2012 
</div>

</body>
</html>
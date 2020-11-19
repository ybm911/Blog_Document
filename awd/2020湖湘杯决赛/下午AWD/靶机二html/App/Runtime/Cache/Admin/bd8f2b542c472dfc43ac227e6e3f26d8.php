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
<form id="myform" name="myform" action="<?php echo U('Config/attention');?>" method="post">
  <div class="pad-10">
    <div class="col-tab">
      <ul class="tabBut cu-li">
        <li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',1,1);">关注我们</li>
      </ul>  
      <div id="div_setting_1" class="contentList pad-10">
          <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
           <tr>
              <td><input type="text" name="con[follow_us]" size="80" value="<?php echo strclean(str_replace("\"","'",C('follow_us'))); ?>"></td>
           </tr>
		   <tr>
              <td><input type="text" name="con[follow_us2]" size="80" value="<?php echo strclean(str_replace("\"","'",C('follow_us2'))); ?>"></td>
           </tr>
		   <tr>
              <td><input type="text" name="con[follow_us3]" size="80" value="<?php echo strclean(str_replace("\"","'",C('follow_us3'))); ?>"></td>
           </tr>
		   <tr>
              <td><input type="text" name="con[follow_us4]" size="80" value="<?php echo strclean(str_replace("\"","'",C('follow_us4'))); ?>"></td>
           </tr>
		   <tr>
              <td><input type="text" name="con[follow_us5]" size="80" value="<?php echo strclean(str_replace("\"","'",C('follow_us5'))); ?>"></td>
           </tr>
		   <tr>
              <td><input type="text" name="con[follow_us6]" size="80" value="<?php echo strclean(str_replace("\"","'",C('follow_us6'))); ?>"></td>
           </tr>
         </table>      
      </div>
      <div class="bk15"></div>
      <div class="btn"><input type="submit" value="提交" name="submit" class="button" id="submit"></div>
    </div>
  </div>
</form>
</body>
</html>
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


<style>
.intable{
	text-align:center;
	font-weight:bold;
	font-size:12pt;
	background:url('Public/statics/images/install/set01_top_nav.gif');
	margin:10px 0 0 10px;	
}
</style>

</head>
  <div style="width:100%;">
	<table width="573" height="23" border="0" cellpadding="0" cellspacing="0" class="intable">
	  <tr>
	    <td style="color:#666; text-align:center">
	        <span style="display:block;float:left;width:20%;font-size:12px;color:#FFF;">1. 替换LOGO</span>
	        <span style="display:block;float:left;width:25%;font-size:12px;">2. 商品分类</span>
	        <span style="display:block;float:left;width:25%;font-size:12px;">3. AppKey设置</span>
	        <span style="display:block;float:left;width:25%;font-size:12px;">4. 广告设置</span>
	    </td>
	  </tr>
	</table>
  </div>

  <div style="width:100%;height:100%;margin:5px auto;">
  <form id="myform" name="myform" action="<?php echo U('Setting/index');?>" enctype="multipart/form-data" method="post">
  <div class="pad-10">
    <div class="col-tab">
	 <div class="contentList pad-10">
      	<table width="100%" cellpadding="2" cellspacing="1" class="table_form">
      	<img src="./App/Tpl/Home/<?php echo C('home.default_theme');?>/Public/img/logo.png" style="float:left;">
            <tr>
          	<th width="100">
          	替换LOGO :
          	</th>
            <td  align="left">
            	<input type="file" name="upload" id="upload" class="input-text" size=21 style="height:25px;"/>
            	<a id="down" href="<?php echo U('Config/logo');?>">恢复默认LOGO</a>
            </td>
          </tr>
         </table>      
      </div>
      <div class="bk15"></div>
      <div class="btn"><input type="submit" value="提交" name="submit" class="button" id="submit"></div>
    </div>
  </div>
  </form>
  </div>

  <div  style="width:50%;margin:0 auto;">
  	<div style="text-align:center;">
  	 <input style="width:80px; height:30px;" type="button" class="button"  value="下一步" onclick="location='<?php echo U('Setting/cate');?>'" /> 
  	 <input style="width:80px; height:30px;" type="button" class="button"  value="跳过全部" onclick="location='<?php echo U('Setting/finish');?>'" />
  	</div>
  </div>

</html>
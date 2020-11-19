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
<form id="myform" name="myform" action="<?php echo U('Config/appkey');?>" method="post">
  <div class="pad-10">
    <div class="col-tab">
      <ul class="tabBut cu-li">
        <li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',4,1);">新浪微博</li>
        <li id="tab_setting_2" onclick="SwapTab('setting','on','',4,2);">淘宝</li>
        <li id="tab_setting_3" onclick="SwapTab('setting','on','',4,3);">QQ</li>
		<li id="tab_setting_4" onclick="SwapTab('setting','on','',4,4);">拍拍</li>
      </ul>
      
      <div id="div_setting_1" class="contentList pad-10">
          <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
            <tr>
              <th width="100">App key :</th>
              <td><input type="text" name="con[sina_appkey]" size="80" value="<?php echo C('sina_appkey');?>"><div id="nameTip" class="onShow"><a class="blue" href="http://open.weibo.com/" target="_blank">申请</a>新浪App key</div></td>
            </tr>
            <tr>
              <th width="100">App Secret :</th>
              <td><input type="text" name="con[sina_appsecret]" size="80" value="<?php echo C('sina_appsecret');?>"></td>
            </tr>
        </table>
      </div>
  
      <div id="div_setting_2" class="contentList pad-10 hidden">
          <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
            <tr>
              <th width="100">App key :</th>
              <td><input type="text" name="con[taobao_appkey]" size="80" value="<?php echo C('taobao_appkey');?>"><div id="nameTip" class="onShow"><a class="blue" href="http://open.taobao.com/index.htm" target="_blank">申请</a>淘宝App key</div></td>
            </tr>
            <tr>
              <th width="100">App Secret :</th>
              <td><input type="text" name="con[taobao_appsecret]" size="80" value="<?php echo C('taobao_appsecret');?>"></td>
            </tr>
            <tr>
              <th width="100">淘宝客昵称 :</th>
              <td><input type="text" name="con[taobaoke_nick]" size="80" value="<?php echo C('taobaoke_nick');?>"><div id="nameTip" class="onShow">如果填写了淘宝客PID,此处可留空</div></td>
            </tr>
            <tr>
              <th width="100">淘宝客PID :</th>
              <td><input type="text" name="con[taobaoke_pid]" size="80" value="<?php echo C('taobaoke_pid');?>"><div id="nameTip" class="onShow">只填写mm_xxxxxx_0_0中间的数字部分</div></td>
            </tr>
        </table>      
      </div>
       <div id="div_setting_3" class="contentList pad-10 hidden">
          <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
            <tr>
              <th width="100">App key :</th>
              <td><input type="text" name="con[qq_appkey]" size="80" value="<?php echo C('qq_appkey');?>"><div id="nameTip" class="onShow"><a class="blue" href="http://open.qq.com/" target="_blank">申请</a>腾讯App key额</div></td>
            </tr>
            <tr>
              <th width="100">App Secret :</th>
              <td><input type="text" name="con[qq_appsecret]" size="80" value="<?php echo C('qq_appsecret');?>"></td>
            </tr>
        </table>      
      </div>

	   <div id="div_setting_4" class="contentList pad-10 hidden">
          <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
            <tr>
              <th width="100">拍拍客pid:</th>
              <td><input type="text" name="con[paipaike_pid]" size="80" value="<?php echo C('paipaike_pid');?>"><div id="nameTip" class="onShow"><a class="blue" href="http://etg.qq.com" target="_blank">申请</a>拍拍客pid</div></td>
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
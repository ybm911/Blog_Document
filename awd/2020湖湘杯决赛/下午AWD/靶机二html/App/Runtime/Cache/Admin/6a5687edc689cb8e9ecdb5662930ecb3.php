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
<form id="myform" name="myform" action="<?php echo U('Push/index');?>" method="post">

  <div class="pad-10">
    <div class="col-tab">
      <ul class="tabBut cu-li">
        <li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',2,1);">数据选项</li>
      </ul>
      
      <div id="div_setting_1" class="contentList pad-10">
          <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
            <tr>
              <th width="100">选择分类 ：</th>
              <td>
              	<?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><input type="checkbox" name="cate[]" value="<?php echo ($val["name"]); ?>-<?php echo ($val["id"]); ?>" <?php if(in_array($val['name'].'-'.$val['id'].'-1',$push['cate']))echo checked; ?>/> <?php echo ($val["name"]); ?> &nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
              </td>
            </tr>
            <tr>
              <th width="100">佣金比例 :</th>
              <td> 
               <select name="cps">
                	<option value="0" <?php if('0' == $push['cps']): ?>selected="select"<?php endif; ?>>全部</option>
                    <option value="10%" <?php if('10%' == $push['cps']): ?>selected="select"<?php endif; ?>>10%</option>
                    <option value="20%" <?php if('20%' == $push['cps']): ?>selected="select"<?php endif; ?>>20%</option>
                    <option value="30%" <?php if('30%' == $push['cps']): ?>selected="select"<?php endif; ?>>30%</option>
                    <option value="40%" <?php if('40%' == $push['cps']): ?>selected="select"<?php endif; ?>>40%</option>
                    <option value="50%" <?php if('50%' == $push['cps']): ?>selected="select"<?php endif; ?>>50%</option>
                    <option value="more" <?php if('more' == $push['cps']): ?>selected="select"<?php endif; ?>>更高</option>
        		</select>
    		   </td>
            </tr>
            <tr>
              <th width="100">价格区间 :</th>
              <td>
            	<select name="price">
                	<option value="0" <?php if('0' == $push['price']): ?>selected="select"<?php endif; ?>>全部</option>
                	<option value="100" <?php if('100' == $push['price']): ?>selected="select"<?php endif; ?>>100</option>
                	<option value="200" <?php if('200' == $push['price']): ?>selected="select"<?php endif; ?>>200</option>
                	<option value="500" <?php if('500' == $push['price']): ?>selected="select"<?php endif; ?>>500</option>
                	<option value="more" <?php if('more' == $push['price']): ?>selected="select"<?php endif; ?>>更高</option>
                    </for>
        		</select>
        	 </td>
            </tr>
            <tr>
              <th width="100">商品数量 :</th>
              <td>
             	<select name="nums">
    				<option value="100" <?php if('100' == $push['nums']): ?>selected="select"<?php endif; ?>>100</option>
    				<option value="200" <?php if('200' == $push['nums']): ?>selected="select"<?php endif; ?>>200</option>
    				<option value="300" <?php if('300' == $push['nums']): ?>selected="select"<?php endif; ?>>300</option>
    				<option value="400" <?php if('400' == $push['nums']): ?>selected="select"<?php endif; ?>>400</option>
    				<option value="500" <?php if('500' == $push['nums']): ?>selected="select"<?php endif; ?>>500</option>
    			</select>
              </td>
            </tr>      
            <tr>
              <th width="100">是否自动推送 :</th>
              <td>
                 <input type="radio" id="auto_push" name="auto_push" value="1" <?php if(1 == $push['auto_push']): ?>checked="checked"<?php endif; ?>/> 是 &nbsp;&nbsp;
				 <input type="radio" id="auto_push" name="auto_push" value="0" <?php if(0 == $push['auto_push']): ?>checked="checked"<?php endif; ?>/> 否
              </td>
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
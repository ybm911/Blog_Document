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


<script type="text/javascript">
	function status(id,type){
	    $.get("<?php echo u('User/status');?>", { id: id, type: type }, function(data){
			$("#"+type+"_"+id+" img").attr('src', '__PUBLIC__/statics/images/status_'+data.data+'.gif')
		},"json"); 
	}
</script>

</head>
<div class="pad-10" >
    <form name="searchform" action="" method="get" >
    <input name="a" type="hidden" value="index">
    <input name="m" type="hidden" value="User">
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
    <form id="myform" name="myform" action="<?php echo u('User/delete');?>" method="post" onsubmit="return check();">
    <div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
                <th width="5%">序号</th>
                <th width="1%"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
                <th width=80>头像</th>                
                <th width=80>昵称</th>
				<th width=80>Email</th>
				<th width=40>性别</th>
                <th width=80>生日</th>
                <th width=80>地址</th>
                <th width=120>注册时间</th>
                <th width=120>最后登录</th>
                <th width=30>审核</th>
            </tr>
        </thead>
    	<tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
        	<td align="center"><?php echo ($val["key"]); ?></td>
            <td align="center"><input type="checkbox" value="<?php echo ($val["id"]); ?>" name="id[]"></td>
           <td align="center">
            <?php if($val["img"] == ''): ?><img src="__PUBLIC__/statics/images/avatar-60.png" width="40px" height="40px"/>
            <?php else: ?>
                <img src="Uploads/avatar_small/<?php echo ($val["img"]); ?>" width="40px" height="40px"/><?php endif; ?>
           </td>
           <td align="center"><a href="<?php echo U('User/edit',array('id'=>$val['id']));?>"><em style="color:black;"><?php echo ($val["name"]); ?></em></a></td>
           <td  align="center"><?php echo ($val["email"]); ?></td>
           <td align="center">
           <?php if($val["sex"] == '1'): ?>男<?php elseif($val["sex"] == '0'): ?>女<?php else: ?>保密<?php endif; ?>
           </td>
           <td align="center"><?php echo ($val["brithday"]); ?></td>
           <td align="center"><?php echo ($val["address"]); ?></td>
           <td align="center"><?php echo date("Y-n-j   H:i:s",$val["add_time"]);?><br><font color=green>(<?php echo ($val["ip"]); ?>)</font></td>
		   <td align="center"><?php echo date("Y-n-j   H:i:s",$val["last_time"]);?><br><font color=green>(<?php echo ($val["last_ip"]); ?>)</font></td>
           <td align="center" onclick="status(<?php echo ($val["id"]); ?>,'status')" id="status_<?php echo ($val["id"]); ?>"><img src="__PUBLIC__/statics/images/status_<?php echo ($val["status"]); ?>.gif" /></td><?php endforeach; endif; else: echo "" ;endif; ?>
    	</tbody>
    </table>
    <div class="btn">
    	<label for="check_box" style="float:left;">全选/取消</label>
    	<input type="submit" class="button" name="submit" value="删除" style="float:left;margin:0 10px 0 10px;"/>
    	<div id="pages"><?php echo ($page); ?></div>
    </div>
    </div>
    </form>
</div>
</body>
</html>
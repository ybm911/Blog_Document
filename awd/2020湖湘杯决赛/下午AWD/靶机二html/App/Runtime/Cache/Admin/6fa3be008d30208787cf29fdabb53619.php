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
	$(document).ready(function(){
		$(".preview").preview();
	});
	
	function status(id,type){
		$.get("<?php echo u('Items/status');?>", { id: id, type: type }, function(data){
			$("#"+type+"_"+id+" img").attr('src','__PUBLIC__/statics/images/status_'+data.data+'.gif')
		},"json"); 
	}
</script>

</head>
<body>
<div class="pad-10" >
    <form name="searchform" action="<?php echo U('Items/index');?>" method="get" >
    <input name="a" type="hidden" value="index">
    <input name="m" type="hidden" value="Items">
    <input name="g" type="hidden" value="Admin">
    <table width="100%" cellspacing="0" class="search-form">
        <tbody>
            <tr>
            <td>
            <div class="explain-col">
            	发布时间：
            	<input type="text" name="time_start" id="time_start" class="date" size="12" value="<?php echo ($time_start); ?>">
				<script language="javascript" type="text/javascript">
                    Calendar.setup({
                        inputField     :    "time_start",
                        ifFormat       :    "%Y-%m-%d",
                        showsTime      :    'true',
                        timeFormat     :    "24"
                    });
                </script>
                -
                <input type="text" name="time_end" id="time_end" class="date" size="12" value="<?php echo ($time_end); ?>">
				<script language="javascript" type="text/javascript">
                    Calendar.setup({
                        inputField     :    "time_end",
                        ifFormat       :    "%Y-%m-%d",
                        showsTime      :    'true',
                        timeFormat     :    "24"
                    });
                </script>
            	&nbsp;商品分类：
                <select name="cate_id">
            	<option value="0">--选择分类--</option>
                <?php if(is_array($cate_list['parent'])): $i = 0; $__LIST__ = $cate_list['parent'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["id"]); ?>" <?php if($cate_id == $val['id']): ?>selected="selected"<?php endif; ?> ><?php echo ($val["name"]); ?></option>
                  <?php if(!empty($cate_list['sub'][$val['id']])): if(is_array($cate_list['sub'][$val['id']])): $i = 0; $__LIST__ = $cate_list['sub'][$val['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sval): $mod = ($i % 2 );++$i;?><option value="<?php echo ($sval["id"]); ?>" <?php if($cate_id == $sval['id']): ?>selected="selected"<?php endif; ?> style="margin-left:20px;"><?php echo ($sval["name"]); ?></option>
                        <!-- <?php if(is_array($cate_list['sub'][$sval['id']])): $i = 0; $__LIST__ = $cate_list['sub'][$sval['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ssval): $mod = ($i % 2 );++$i;?><option value="<?php echo ($ssval["id"]); ?>" <?php if($cate_id == $ssval['id']): ?>selected="selected"<?php endif; ?>style="margin-left:40px;"><?php echo ($ssval["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> --><?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
              	</select>
                &nbsp;
                <select name="is_index">
            	<option value="-1">--首页显示--</option>
                <option value="1" <?php if($is_index == 1): ?>selected="selected"<?php endif; ?> >>是</option>
                <option value="0" <?php if($is_index == 0): ?>selected="selected"<?php endif; ?> >>否</option>
                </select>
				 &nbsp;
                <select name="status">
            	<option value="-1">--是否审核--</option>
                <option value="1" <?php if($status == 1): ?>selected="selected"<?php endif; ?> >>已审核</option>
                <option value="0" <?php if($status == 0): ?>selected="selected"<?php endif; ?> >>未审核</option>
				<option value="2" <?php if($status == 2): ?>selected="selected"<?php endif; ?> >>已下架</option>
                </select>
                &nbsp;关键字 :
                <input name="keyword" type="text" class="input-text" size="25" value="<?php echo ($keyword); ?>" />
                <input type="submit" name="search" class="button" value="搜索" />
        	</div>
            </td>
            </tr>
        </tbody>
    </table>
    </form>

    <form id="myform" name="myform" action="<?php echo u('Items/delete');?>" method="post">
    <div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
                <th width="5%">序号</th>
                <th width="1%"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
                <th width=80>商品图片</th>
                <th width=200 align="left">商品名称</th>
                <th width=60>分类</th>
                <th width=40>来源</th>
                <th width=90><a href="<?php echo U('Items/index');?>&time_start=<?php echo ($time_start); ?>&time_end=<?php echo ($time_end); ?>&cate_id=<?php echo ($cate_id); ?>&is_index=<?php echo ($is_index); ?>&status=<?php echo ($status); ?>&keyword=<?php echo ($keyword); ?>&order=add_time&sort=<?php echo ($sort); ?>" class="blue <?php if($order == 'add_time'): ?>order_sort_<?php if($sort == 'desc'): ?>1<?php else: ?>0<?php endif; endif; ?>">发布时间</a></th>
                <th width=60><a href="<?php echo U('Items/index');?>&time_start=<?php echo ($time_start); ?>&time_end=<?php echo ($time_end); ?>&cate_id=<?php echo ($cate_id); ?>&is_index=<?php echo ($is_index); ?>&status=<?php echo ($status); ?>&keyword=<?php echo ($keyword); ?>&order=price&sort=<?php echo ($sort); ?>" class="blue <?php if($order == 'price'): ?>order_sort_<?php if($sort == 'desc'): ?>1<?php else: ?>0<?php endif; endif; ?>">价格</a></th>
                <th width=40><a href="<?php echo U('Items/index');?>&time_start=<?php echo ($time_start); ?>&time_end=<?php echo ($time_end); ?>&cate_id=<?php echo ($cate_id); ?>&is_index=<?php echo ($is_index); ?>&status=<?php echo ($status); ?>&keyword=<?php echo ($keyword); ?>&order=likes&sort=<?php echo ($sort); ?>" class="blue <?php if($order == 'likes'): ?>order_sort_<?php if($sort == 'desc'): ?>1<?php else: ?>0<?php endif; endif; ?>">喜欢</a></th>
				<th width=40><a href="<?php echo U('Items/index');?>&time_start=<?php echo ($time_start); ?>&time_end=<?php echo ($time_end); ?>&cate_id=<?php echo ($cate_id); ?>&is_index=<?php echo ($is_index); ?>&status=<?php echo ($status); ?>&keyword=<?php echo ($keyword); ?>&order=hits&sort=<?php echo ($sort); ?>" class="blue <?php if($order == 'hits'): ?>order_sort_<?php if($sort == 'desc'): ?>1<?php else: ?>0<?php endif; endif; ?>">人气</a></th>				
               	<th width=30>排序值</th>
                <th width=30>首页显示</th>
				<th width=30>审核</th>
                <th width=30>操作</th>
            </tr>
        </thead>
    	<tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
        	<td align="center"><?php echo ($val["key"]); ?></td>
            <td align="center"><input type="checkbox" value="<?php echo ($val["id"]); ?>" name="id[]"></td>
            <td align="center"><img src="<?php echo (get_img($val["img"],100)); ?>" width="40px" height="40px" class="preview" bimg="<?php echo (get_img($val["img"],210)); ?>" title="<?php if(strpos($val['img'],'http') === false){echo '本地图片';}else{echo '远程图片';} ?>" /></td>
            <td align="left"><a href="<?php echo u('Items/edit', array('id'=>$val['id']));?>"><?php echo ($val["title"]); ?></a></td>
            <td align="center"><b><?php echo ($val["cname"]); ?></b></td>
            <td align="center"><img src="__PUBLIC__/statics/images/author/<?php echo ($val["site_logo"]); ?>" width="16" height="16" style="margin-right:5px;" /></td>
            <td align="center"><?php echo (date("Y-m-d H:i:s",$val["add_time"])); ?></td>
            <td align="center"><em style="color:red;">￥<?php echo ($val["price"]); ?></em></td>
            <td align="center"><em style="color:red;"><?php echo ($val["likes"]); ?></em></td>
            <td align="center"><em style="color:green;"><?php echo ($val["hits"]); ?></em></td>
            <td align="center"><input type="text" class="input-text-c input-text" value="<?php echo ($val["ord"]); ?>" size="4" name="orders[<?php echo ($val["id"]); ?>]" /></td>
            <td align="center" onclick="status(<?php echo ($val["id"]); ?>,'is_index')" id="is_index_<?php echo ($val["id"]); ?>"><img src="__PUBLIC__/statics/images/status_<?php echo ($val["is_index"]); ?>.gif" /></td>
            <?php if($val["status"] != 2): ?><td align="center" onclick="status(<?php echo ($val["id"]); ?>,'status')" id="status_<?php echo ($val["id"]); ?>"><img src="__PUBLIC__/statics/images/status_<?php echo ($val["status"]); ?>.gif" /></td><?php else: ?><td align="center">下架</td><?php endif; ?>
            <td align="center"><a class="blue" href="<?php echo u('Items/edit',array('id'=>$val['id']));?>">编辑</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    	</tbody>
    </table>

    <div class="btn">
    	<label for="check_box" style="float:left;">全选/取消</label>
    	<input type="submit" class="button" name="submit" value="删除" style="float:left;margin:0 10px 0 10px;" onclick="return check();"/>
    	<input type="submit" class="button" name="order" onclick="document.myform.action='<?php echo U('Items/order');?>'" value="排序" style="float:left;margin:0 10px 0 0px;"/>
    	<div id="pages"><?php echo ($page); ?></div>
    </div>

    </div>
    </form>
</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台管理_<?php echo C('site_name');?></title>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/statics/js/common.js"></script>

<link rel='stylesheet' type='text/css' href='__PUBLIC__/statics/css/admin_style.css'>
<style type="text/css">.input{ font-size:14px}</style> 

<script type="text/javascript">	
	function showtab(mid,val,n){
	    if(val==1){
			for(var i=1;i<=n;i++){
				$('#'+mid+i).show();
			}
		}else{
			for(var i=1;i<=n;i++){
				$('#'+mid+i).hide();
			}
		}
	}
	
	$(document).ready(function(){
		$('#url_rewrite').change(function(){
			showtab('rewrite',$(this).val(),10);
		});
		<?php if(C('home.url_rewrite') == '1'): ?>showtab('rewrite',1,10);<?php endif; ?>
		$('#url_html').change(function(){
			showtab('html',$(this).val(),9);
		});
		<?php if(C('home.url_html') == '1'): ?>showtab('html',1,9);<?php endif; ?>
	});
</script>

</head>
<body>
<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
<form action="<?php echo U('Config/url');?>" method="post" id="gxform"> 
<tr class="table_title"><td colspan="4">访问路径设置</td></tr> 
<tr class="tr">
  <td class="left">伪静态重写功能</td>
  <td colspan="3">
	  <select name="con[url_rewrite]" id="url_rewrite" class="w100">
	  	<option value="1" <?php if(C('home.url_rewrite') == '1'): ?>selected="selected"<?php endif; ?>>开启</option>
	  	<option value="0" <?php if(C('home.url_rewrite') == '0'): ?>selected="selected"<?php endif; ?>>关闭</option>
	  </select>
	  <span id="rewrite1" style="display:none">后缀名：
	  	<select name="con[html_url_suffix]">
		  <option value=".html" <?php if(C('home.html_url_suffix') == '.html'): ?>selected="selected"<?php endif; ?>>.html</option>
		  <option value=".htm" <?php if(C('home.html_url_suffix') == '.htm'): ?>selected="selected"<?php endif; ?>>.htm</option>
		  <option value=".shtml" <?php if(C('home.html_url_suffix') == '.shtml'): ?>selected="selected"<?php endif; ?>>.shtml</option>
		  <option value=".shtm" <?php if(C('home.html_url_suffix') == '.shtm'): ?>selected="selected"<?php endif; ?>>.shtm</option>
	  	</select>
	  </span>
  </td>
</tr>
<tr class="ji" id="rewrite2" style="display:none">
  <td class="left">搜索页重写规则</td>
  <td colspan="3">
	  <input type="text" name="con[url_rewrite_search]" maxlength="30" value="<?php echo C('home.url_rewrite_search');?>" class="w100">
  </td>
</tr>
<tr class="ji" id="rewrite3" style="display:none">
  <td class="left">店铺页重写规则</td>
  <td colspan="3">
	  <input type="text" name="con[url_rewrite_shop]" maxlength="30" value="<?php echo C('home.url_rewrite_shop');?>" class="w100">
  </td>
</tr>
<tr class="ji" id="rewrite4" style="display:none">
  <td class="left">专辑页重写规则</td>
  <td colspan="3">
  	  <input type="text" name="con[url_rewrite_album]" maxlength="30" value="<?php echo C('home.url_rewrite_album');?>" class="w100">
  </td>
</tr>
<tr class="ji" id="rewrite5" style="display:none">
  <td class="left">分类页重写规则</td>
  <td colspan="3">
  	  <input type="text" name="con[url_rewrite_cate]" maxlength="30" value="<?php echo C('home.url_rewrite_cate');?>" class="w100">
  </td>
</tr>
<tr class="ji" id="rewrite6" style="display:none">
  <td class="left">标签页重写规则</td>
  <td colspan="3">
      <input type="text" name="con[url_rewrite_tag]" maxlength="30" value="<?php echo C('home.url_rewrite_tag');?>" class="w100">
  </td>
</tr>
<tr class="ji" id="rewrite7" style="display:none">
  <td class="left">商品页重写规则</td>
  <td colspan="3">
  	  <input type="text" name="con[url_rewrite_item]" maxlength="30" value="<?php echo C('home.url_rewrite_item');?>" class="w100">
  </td>
</tr>
<tr class="ji" id="rewrite8" style="display:none">
  <td class="left">文章页重写规则</td>
  <td colspan="3">
  	  <input type="text" name="con[url_rewrite_article]" maxlength="30" value="<?php echo C('home.url_rewrite_article');?>" class="w100">
  </td>
</tr>
<tr class="ji" id="rewrite9" style="display:none">
  <td class="left">用户页重写规则</td>
  <td colspan="3">
  	  <input type="text" name="con[url_rewrite_user]" maxlength="30" value="<?php echo C('home.url_rewrite_user');?>" class="w100">
  </td>
</tr>
<tr class="ji">
  <td class="left">网站运行模式</td>
  <td colspan="3">
  	<select name="con[url_html]" id="url_html" class="w100">
	  <option value="1" <?php if(C('home.url_html') == '1'): ?>selected="selected"<?php endif; ?>>静态</option>
	  <option value="0" <?php if(C('home.url_html') == '0'): ?>selected="selected"<?php endif; ?>>动态</option>
  	</select>
  <span id="html1" style="display:none">后缀名：
	  	<select name="con[html_file_suffix]">
		  <option value=".html" <?php if(C('home.html_file_suffix') == '.html'): ?>selected="selected"<?php endif; ?>>.html</option>
		  <option value=".htm" <?php if(C('home.html_file_suffix') == '.htm'): ?>selected="selected"<?php endif; ?>>.htm</option>
		  <option value=".shtml" <?php if(C('home.html_file_suffix') == '.shtml'): ?>selected="selected"<?php endif; ?>>.shtml</option>
		  <option value=".shtm" <?php if(C('home.html_file_suffix') == '.shtm'): ?>selected="selected"<?php endif; ?>>.shtm</option>
	  	</select>
  	</span>
  </td>
</tr>
<tr class="ji" id="html2" style="display:none">
  <td class="left">店铺页保存目录</td>
  <td colspan="3"><input type="text" name="con[url_dir_shop]" maxlength="30" value="<?php echo C('home.url_dir_shop');?>" class="w100"></td>
</tr>
<tr class="ji" id="html3" style="display:none">
  <td class="left">专辑分类页保存目录</td>
  <td colspan="3"><input type="text" name="con[url_dir_albumCate]" maxlength="30" value="<?php echo C('home.url_dir_albumCate');?>" class="w100"></td>
</tr>
<tr class="ji" id="html4" style="display:none">
  <td class="left">专辑页保存目录</td>
  <td colspan="3"><input type="text" name="con[url_dir_album]" maxlength="30" value="<?php echo C('home.url_dir_album');?>" class="w100"></td>
</tr>      
<tr class="ji" id="html5" style="display:none">
  <td class="left">分类页保存目录</td>
  <td colspan="3"><input type="text" name="con[url_dir_cate]" maxlength="30" value="<?php echo C('home.url_dir_cate');?>" class="w100"></td>
</tr>
<tr class="ji" id="html6" style="display:none">
  <td class="left">标签页保存目录</td>
  <td colspan="3"><input type="text" name="con[url_dir_tag]" maxlength="30" value="<?php echo C('home.url_dir_tag');?>" class="w100"></td>
</tr>
<tr class="ji" id="html7" style="display:none">
  <td class="left">商品页保存目录</td>
  <td colspan="3"><input type="text" name="con[url_dir_item]" maxlength="30" value="<?php echo C('home.url_dir_item');?>" class="w100"></td>
</tr>
<tr class="ji" id="html8" style="display:none">
  <td class="left">文章分类页保存目录</td>
  <td colspan="3"><input type="text" name="con[url_dir_articleCate]" maxlength="30" value="<?php echo C('home.url_dir_articleCate');?>" class="w100"></td>
</tr>
<tr class="ji" id="html9" style="display:none">
  <td class="left">文章页保存目录</td>
  <td colspan="3"><input type="text" name="con[url_dir_article]" maxlength="30" value="<?php echo C('home.url_dir_article');?>" class="w100"></td>
</tr>
      
<tr class="tr">
  <td colspan="4"><input type="hidden" name="setting_sub" value="true">
    <input class="bginput" type="submit" name="submit" value="提交">
  </td>
</tr>
</form>
</table>

</body>
</html>
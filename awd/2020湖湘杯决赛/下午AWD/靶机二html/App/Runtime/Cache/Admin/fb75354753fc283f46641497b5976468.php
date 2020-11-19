<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台管理_<?php echo C('site_name');?></title>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<script language="javascript" type="text/javascript" src="__PUBLIC__/statics/js/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/statics/js/common.js"></script>

<link rel='stylesheet' type='text/css' href='__PUBLIC__/statics/css/admin_left.css'>

<script type="text/javascript">
	$(document).ready(function(){
		$('li').click(function(){
			$('li').find('a').removeClass('cur');
			$(this).find('a').addClass('cur');
		})
	});
</script>

</head>
<body>
<div class="menu">
<?php if($_GET['id'] == 'config'): ?><dl>
    <dt><a onClick="showHide('#config');" href="#" target="_self">系统设置</a></dt>
    <dd>
      <ul id="config">
      	<li><a class="cur" href="<?php echo U('Config/base');?>" target="main">网站信息设置</a></li>
      	<li><a href="<?php echo U('Config/url');?>" target="main">访问路径设置</a></li>
      	<li><a href="<?php echo U('Config/cache');?>" target="main">网站缓存设置</a></li>
      	<li><a href="<?php echo U('Config/appkey');?>" target="main">AppKey设置</a></li>
      	<li><a href="<?php echo U('Config/attention');?>" target="main">关注我们设置</a></li>
      	<li><a href="<?php echo U('Push/index');?>" target="main">数据推送设置</a></li>
      </ul>
    </dd>
  </dl>

<?php elseif($_GET['id'] == 'detail'): ?>
  <dl>
    <dt><a onClick="showHide('#items');" href="#" target="_self">商品管理</a></dt>
    <dd>
      <ul id="items">
        <li><a class="cur" href="<?php echo U('Items/index');?>" target="main">商品列表</a></li>
        <li><a href="<?php echo U('Items/collect');?>" target="main">添加商品</a></li>
        <li><a href="<?php echo U('Items/betchadd');?>" target="main">批量采集</a></li>
        <li><a href="<?php echo U('Items/addbykey');?>" target="main">关键字采集</a></li>
      </ul>
    </dd>
  </dl>
  
  <dl>
    <dt><a onClick="showHide('#items_cate');" href="#" target="_self">商品分类管理</a></dt>
    <dd>
      <ul id="items_cate">
        <li><a href="<?php echo U('ItemsCate/index');?>" target="main">分类列表</a></li>
        <li><a href="<?php echo U('ItemsCate/add');?>" target="main">添加分类</a></li>
      </ul>
    </dd>
  </dl>
  
  <dl>
    <dt><a onClick="showHide('#tags');" href="#" target="_self">标签管理</a></dt>
    <dd>
      <ul id="tags">
        <li><a href="<?php echo U('ItemsTags/index');?>" target="main">标签列表</a></li>
        <li><a href="<?php echo U('ItemsTags/add');?>" target="main">添加标签</a></li>
      </ul>
    </dd>
  </dl>
  
  <dl>
    <dt><a onClick="showHide('#album_cate');" href="#" target="_self">专辑管理</a></dt>
    <dd>
      <ul id="album_cate">
      	<li><a href="<?php echo U('Album/index');?>" target="main">专辑列表</a></li>
      	<li><a href="<?php echo U('Album/add');?>" target="main">添加专辑</a></li>
        <li><a href="<?php echo U('AlbumCate/index');?>" target="main">专辑分类列表</a></li>
        <li><a href="<?php echo U('AlbumCate/add');?>" target="main">添加专辑分类</a></li>
      </ul>
    </dd>
  </dl>
  
  <dl>
    <dt><a onClick="showHide('#comments');" href="#" target="_self">评论管理</a></dt>
    <dd>
      <ul id="comments">
          <li><a href="<?php echo U('Comment/index');?>" target="main">评论列表</a></li>
      </ul>
    </dd>
  </dl>
  
<?php elseif($_GET['id'] == 'shop'): ?>
  <dl>
    <dt><a onClick="showHide('#shop');" href="#" target="_self">店铺管理</a></dt>
    <dd>
      <ul id="shop">
        <li><a class="cur" href="<?php echo U('Shop/index');?>" target="main">店铺列表</a></li>
        <li><a href="<?php echo U('Shop/collect');?>" target="main">添加店铺</a></li>     
      </ul>
    </dd>
  </dl> 
  
<?php elseif($_GET['id'] == 'user'): ?>
  <dl>
    <dt><a onClick="showHide('#user');" href="#" target="_self">用户管理</a></dt>
    <dd>
      <ul id="user">
        <li><a class="cur" href="<?php echo U('User/index');?>" target="main">会员列表</a></li>
        <li><a href="<?php echo U('User/add');?>" target="main">批量注册</a></li>  
		<li><a href="<?php echo U('User/uc');?>" target="main">用户中心</a></li>    
      </ul>
    </dd>
  </dl> 
  <dl>
    <dt><a onClick="showHide('#admin');" href="#" target="_self">管理员管理</a></dt>
    <dd>
      <ul id="admin">
        <li><a href="<?php echo U('Admin/index');?>" target="main">管理员列表</a></li>
        <li><a href="<?php echo U('Admin/add');?>" target="main">添加管理员</a></li>      
      </ul>
    </dd>
  </dl> 

<?php elseif($_GET['id'] == 'article'): ?>
  <dl>
    <dt><a onClick="showHide('#article');" href="#" target="_self">文章管理</a></dt>
    <dd>
      <ul id="article">
        <li><a class="cur" href="<?php echo U('Article/index');?>" target="main">文章列表</a></li>
        <li><a href="<?php echo U('Article/add');?>" target="main">添加文章</a></li>
        <li><a href="<?php echo U('Article/linktag');?>" target="main">文章内链</a></li>
      </ul>
    </dd>
 </dl>
 <dl>
   <dt><a onClick="showHide('#article_cate');" href="#" target="_self">文章分类管理</a></dt>
    <dd>
      <ul id="article_cate">
        <li><a href="<?php echo U('ArticleCate/index');?>" target="main">文章分类列表</a></li>
        <li><a href="<?php echo U('ArticleCate/add');?>" target="main">添加文章分类</a></li>
      </ul>
    </dd>
 </dl>
  <dl>
   <dt><a onClick="showHide('#article_node');" href="#" target="_self">文章采集管理</a></dt>
    <dd>
      <ul id="article_node">
        <li><a href="<?php echo U('ArticleCollect/index');?>" target="main">采集节点列表</a></li>
        <li><a href="<?php echo U('ArticleCollect/add');?>" target="main">添加采集节点</a></li>
      </ul>
    </dd>
 </dl>
 
<?php elseif($_GET['id'] == 'extend'): ?>
  <dl>
    <dt><a onClick="showHide('#link');" href="#" target="_self">友情连接</a></dt>
    <dd>
      <ul id="link">
        <li><a class="cur" href="<?php echo U('Link/index');?>" target="main">友情连接列表</a></li>
        <li><a href="<?php echo U('Link/add');?>" target="main">添加友情连接</a></li>
      </ul>
    </dd>
  </dl>
 

  <dl>
    <dt><a onClick="showHide('#ad');" href="#" target="_self">广告管理</a></dt>
    <dd>
      <ul id="ad">
        <li><a href="<?php echo U('Ad/index');?>" target="main">广告列表</a></li>
        <li><a href="<?php echo U('Ad/add');?>" target="main">添加广告</a></li>
      </ul>
    </dd>
  </dl>
    <dl>
    <dt><a onClick="showHide('#spread');" href="#" target="_self">推广管理</a></dt>
    <dd>
      <ul id="spread">
      	<li><a href="<?php echo U('Ad/info');?>" target="main">联盟api设置</a></li>
        <li><a href="<?php echo U('Ad/spread');?>" target="main">推广设置</a></li>
        <li><a href="<?php echo U('Ad/cps');?>" target="main">cps业务报表</a></li>
      </ul>
    </dd>
  </dl>
         

  <dl>
    <dt><a onClick="showHide('#html');" href="#" target="_self">静态网页生成</a></dt>
    <dd>
      <ul id="html">
        <li><a href="<?php echo U('Html/set');?>" target="main">静态网页选项</a></li>
      </ul>
    </dd>
  </dl> 


  <dl>
    <dt><a onClick="showHide('#database');" href="#" target="_self">数据库操作</a></dt>
    <dd>
      <ul id="database">
        <li><a href="<?php echo U('Data/index');?>" target="main">数据库备份</a></li>
        <li><a href="<?php echo U('Data/show');?>" target="main">数据库还原</a></li>     
      </ul>
    </dd>
  </dl> 
	 <dl>
    <dt><a onClick="showHide('#plugin');" href="#" target="_self">插件管理</a></dt>
    <dd>
      <ul id="plugin">
        <li><a href="<?php echo U('Plugin/index');?>" target="main">插件</a></li>
		 <li><a href="<?php echo U('Plugin/install');?>" target="main">安装插件</a></li>
      </ul>
    </dd>
  </dl> 
<?php elseif($_GET['id'] == 'tpl'): ?>
  <dl>
    <dt><a onClick="showHide('#template');" href="#" target="_self">模板管理</a></dt>
    <dd>
      <ul id="template">
        <li><a class="cur" href="<?php echo U('Theme/index');?>" target="main">网站模板管理</a></li>
      </ul>
    </dd>
  </dl>
 
<?php else: ?>

  <dl>
    <dt><a onClick="showHide('#items');" href="#" target=_self>商品管理</a></dt>
    <dd>
      <ul id="items">
        <li><a href="<?php echo U('Items/index');?>" target="main">商品列表</a></li>
        <li><a href="<?php echo U('ItemsCate/index');?>" target="main">分类列表</a></li>
        <li><a href="<?php echo U('ItemsTags/index');?>" target="main">标签列表</a></li>
        <li><a href="<?php echo U('AlbumCate/index');?>" target="main">专辑分类列表</a></li>
		<li><a href="<?php echo U('Comment/index');?>" target="main">评论列表</a></li>
      </ul>
    </dd>
  </dl>
  
  <dl>
    <dt><a onClick="showHide('#shop');" href="#" target="_self">店铺管理</a></dt>
    <dd>
      <ul id="shop">
        <li><a href="<?php echo U('Shop/index');?>" target="main">店铺列表</a></li> 
      </ul>
    </dd>
  </dl> 
  <dl>
   <dt><a onClick="showHide('#article');" href="#" target="_self">文章管理</a></dt>
    <dd>
      <ul id="article">
        <li><a href="<?php echo U('Article/index');?>" target="main">文章列表</a></li>
      </ul>
    </dd>
 </dl>
  <dl>
    <dt><a onClick="showHide('#user');" href="#" target="_self">用户管理</a></dt>
    <dd>
      <ul id="user">
        <li><a href="<?php echo U('User/index');?>" target="main">会员列表</a></li>
        <li><a href="<?php echo U('Admin/index');?>" target="main">管理员列表</a></li>    
      </ul>
    </dd>
  </dl> 
  
   <dl>
    <dt><a onClick="showHide('#template');" href="#" target="_self">模板管理</a></dt>
    <dd>
      <ul id="template">
        <li><a href="<?php echo U('Theme/index');?>" target="main">网站模板管理</a></li>
      </ul>
    </dd>
  </dl>
  
  <dl>
    <dt><a onClick="showHide('#link');" href="#" target="_self">友情连接</a></dt>
    <dd>
      <ul id="link">
        <li><a href="<?php echo U('Link/index');?>" target="main">友情连接列表</a></li>
      </ul>
    </dd>
  </dl>
  
  <dl>
    <dt><a onClick="showHide('#ad');" href="#" target="_self">广告管理</a></dt>
    <dd>
      <ul id="ad">
        <li><a href="<?php echo U('Ad/index');?>" target="main">广告列表</a></li>
      </ul>
    </dd>
  </dl><?php endif; ?>
</div>
</body>
</html>
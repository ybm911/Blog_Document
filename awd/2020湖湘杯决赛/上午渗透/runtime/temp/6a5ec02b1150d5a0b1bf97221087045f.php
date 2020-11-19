<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:38:"./template/laozhang/article/index.html";i:1599667973;s:38:"./template/laozhang/public/header.html";i:1599667973;s:42:"./template/laozhang/public/breadcrumb.html";i:1599667973;s:38:"./template/laozhang/public/qrcode.html";i:1599667973;s:38:"./template/laozhang/public/footer.html";i:1599667973;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $seo['title']; ?></title>
	<meta name="keywords" content="<?php echo $seo['keywords']; ?>">
	<meta name="description" content="<?php echo $seo['description']; ?>">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<?php echo $settings['head_html']; ?>
	<link rel="stylesheet" type="text/css" href="__TEMPLATE__laozhang/static/layui/css/layui.css">
	<link rel="stylesheet" type="text/css" href="__TEMPLATE__laozhang/static/css/style.css">
	<script type="text/javascript" src="__TEMPLATE__laozhang/static/layui/layui.js"></script>
	<script src="__TEMPLATE__laozhang/static/js/jquery.min.js"></script>
	<script src="__TEMPLATE__laozhang/static/js/jquery.lazyload.min.js?v=1.9.1"></script>
	<?php echo $settings['site_statistice']; ?>
</head> 
<body>
<!-- 头部 开始 -->
<div class="layui-header header trans_3">
<div class="main index_main">
	<a class="logo" href="/"><img src="<?php if($settings['logo']): ?><?php echo $settings['logo']; else: ?>__TEMPLATE__laozhang/static/images/logo-header.png<?php endif; ?>" alt="<?php echo $seo['title']; ?>"></a>
	<ul class="layui-nav" lay-filter="top_nav">
	  	<li class="layui-nav-item home"><a href="/">首页</a></li>
	  	<?php if(is_array($categorys[0][0]) || $categorys[0][0] instanceof \think\Collection): $i = 0; $__LIST__ = $categorys[0][0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($categorys[$vo]['is_menu'] == 1): ?>
	  	<li class="layui-nav-item">
	  		<a href="<?php echo $categorys[$vo]['url']; ?>"><?php echo $categorys[$vo]['name']; ?></a>
	  		<?php if(!(empty($categorys[0][$vo]) || ($categorys[0][$vo] instanceof \think\Collection && $categorys[0][$vo]->isEmpty()))): ?>
			<dl class="layui-nav-child"> <!-- 二级菜单 -->
				<?php if(is_array($categorys[0][$vo]) || $categorys[0][$vo] instanceof \think\Collection): $i = 0; $__LIST__ = $categorys[0][$vo];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($categorys[$v]['is_menu'] == 1): ?>
		      	<dd><a href="<?php echo $categorys[$v]['url']; ?>"><?php echo $categorys[$v]['name']; ?></a></dd>
		      	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		    </dl>
			<?php endif; ?>
	  	</li>
	  	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<div class="title"><?php echo $settings['site_name']; ?></div>
	<form action="<?php echo url('index/search/search'); ?>" mothod="post" class="head_search trans_3 layui-form">
	  <div class="layui-form-item trans_3">
	  	<span class="close trans_3"><i class="layui-icon">&#x1006;</i> </span>
	    <div class="layui-input-inline trans_3">
	      <select name="model_id">
	      <?php if(is_array($search_model_select) || $search_model_select instanceof \think\Collection): $i = 0; $__LIST__ = $search_model_select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	      	<option value="<?php echo $vo['id']; ?>" <?php if($vo['id'] == 2): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
	      <?php endforeach; endif; else: echo "" ;endif; ?>
	      </select>
	    </div>
	    <input type="text" name="keywords" placeholder="搜索" autocomplete="off" class="search_input trans_3">
	    <button class="layui-btn" lay-submit="" style="display: none;"></button>
	  </div>
		
	</form>
</div>
</div>
<div class="header_back"></div>
<!-- 头部 结束 -->
<!-- 左边导航 开始 -->
<div class="layui-side layui-bg-black left_nav trans_2">
  <div class="layui-side-scroll">
	<ul class="layui-nav layui-nav-tree"  lay-filter="left_nav">
		<li class="layui-nav-item home"><a href="/">首页</a></li>
	  	<?php if(is_array($categorys[0][0]) || $categorys[0][0] instanceof \think\Collection): $i = 0; $__LIST__ = $categorys[0][0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($categorys[$vo]['is_menu'] == 1): ?>
	  	<li class="layui-nav-item">
	  		<?php if(!(empty($categorys[0][$vo]) || ($categorys[0][$vo] instanceof \think\Collection && $categorys[0][$vo]->isEmpty()))): ?>
	  		<a href="javascript:void();"><?php echo $categorys[$vo]['name']; ?></a>
			<dl class="layui-nav-child"> <!-- 二级菜单 -->
				<?php if(is_array($categorys[0][$vo]) || $categorys[0][$vo] instanceof \think\Collection): $i = 0; $__LIST__ = $categorys[0][$vo];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($categorys[$v]['is_menu'] == 1): ?>
		      	<dd><a href="<?php echo $categorys[$v]['url']; ?>"><?php echo $categorys[$v]['name']; ?></a></dd>
		      	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		    </dl>
		    <?php else: ?>
		    <a href="<?php echo $categorys[$vo]['url']; ?>"><?php echo $categorys[$vo]['name']; ?></a>
			<?php endif; ?>
	  	</li>
	  	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</ul>
  </div>
</div>
<div class="left_nav_mask"></div>
<div class="left_nav_btn"><i class="layui-icon">&#xe602;</i></div>
<!-- 左边导航 结束 -->
<!-- 面包屑导航 开始 -->
<div class="main breadcrumb_nav trans_3">
	<span class="layui-breadcrumb" lay-separator="—">
	  <?php echo $breadcrumb; ?>
	</span>
</div>
<!-- 面包屑导航 结束 -->
<!-- 文章 开始 -->
<div class="main">
	<div class="page_left">	
	<ul class="page_left_list"> 
	<?php if(is_array($lists) || $lists instanceof \think\Collection): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<li class="<?php if(empty($vo[image_url]) || ($vo[image_url] instanceof \think\Collection && $vo[image_url]->isEmpty())): ?>no_pic<?php endif; ?>">
			<?php if(!(empty($vo[image_url]) || ($vo[image_url] instanceof \think\Collection && $vo[image_url]->isEmpty()))): ?>
			<a href="<?php echo $vo['url']; ?>" class="pic"><img class="lazy" data-original="<?php echo thumb($vo['image_url'],165,110,3); ?>" src="__TEMPLATE__laozhang/static/images/pic_loading_bg.png" alt="<?php echo $vo['title']; ?>"></a>
			<?php endif; ?>
			<h2 class="title"><a href="<?php echo $vo['url']; ?>"><?php if($vo['is_top']==1): ?><span class="top">置顶</span><?php endif; ?><?php echo $vo['title']; ?></a></h2>
			<div class="date_hits">
				<span><?php echo format_datetime($vo['create_time']); ?></span>
				<span><a href="<?php echo $categorys[$vo['category_id']]['url']; ?>"><?php echo $categorys[$vo['category_id']]['name']; ?></a></span>
				<span class="hits"><i class="layui-icon" title="点击量">&#xe62c;</i> <?php echo $vo['hits']; ?> ℃</span>
				<p class="commonts"><i class="layui-icon" title="点击量">&#xe63a;</i> <span id="sourceId::<?php echo $vo['category_id']; ?><?php echo $vo['id']; ?>" class="cy_cmt_count"></span></p>
			</div>
			<div class="desc"><?php echo $vo['description']; ?></div>
		</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<div id="page"><?php echo $page; ?></div>
	</div>
	<div class="page_right">
		<div class="second_categorys_container">
			<h3>栏目导航</h3>
			<ol class="seond_category trans_3">
				<?php if(is_array($second_categorys) || $second_categorys instanceof \think\Collection): $i = 0; $__LIST__ = $second_categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<li><a href="<?php echo $vo['url']; ?>" class="layui-btn layui-btn-primary trans_1"><?php echo $vo['name']; ?></a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ol>	
		</div>
		<?php if(!(empty($recommend_list) || ($recommend_list instanceof \think\Collection && $recommend_list->isEmpty()))): ?>  
		<div class="recommend_list">
			<h3>推荐文章</h3>
			<ol class="page_right_list trans_3">
				<?php if(is_array($recommend_list) || $recommend_list instanceof \think\Collection): $i = 0; $__LIST__ = $recommend_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<li><a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a><span class="hits"> <?php echo $vo['hits']; ?> ℃ </span></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ol>	
		</div>
		<?php endif; if(!(empty($hot_list) || ($hot_list instanceof \think\Collection && $hot_list->isEmpty()))): ?>  
		<div class="hot_list">
			<h3>最近热文</h3>
			<ol class="page_right_list trans_3">
				<?php if(is_array($hot_list) || $hot_list instanceof \think\Collection): $i = 0; $__LIST__ = $hot_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<li><a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a><span class="hits"> <?php echo $vo['hits']; ?> ℃ </span></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ol>
		</div>
		<?php endif; ?>
		<div class="mobile_qrcode_container">
			<h3>手机扫码访问</h3>
			<div class="mobile_qrcode wechat_qrcode trans_3">
				<style type="text/css">
#qrcode{width:100%;height: 100%;}
#qrcode img{width:100%;height: 100%;}
</style>
<div id="qrcode"></div>
<script type="text/javascript" src="__TEMPLATE__laozhang/static/js/qrcode.js"></script>
<script type="text/javascript">
	function get_qrcode(content,size,id){
		// 获取内容
		var content = content.replace(/(^\s*)|(\s*$)/g, "");
		// 获取尺寸
        var size = size;
        // 检查内容
        if(content==''){
            alert('请输入内容！');
            return false;
        }

        // 检查尺寸
        if(!/^[0-9]*[1-9][0-9]*$/.test(size)){
            alert('请输入正整数');
            return false;
        }

        if(size<100 || size>500){
            alert('尺寸范围在100～500');
            return false;
        }
        // 清除上一次的二维码
        if(qrcode){
            qrcode.clear();
        }

        // 创建二维码
        qrcode = new QRCode(document.getElementById(id), {
            width : size,//设置宽高
            height : size
        });

        qrcode.makeCode(content);
	}
	var	qrcode;
	get_qrcode(window.location.href,300,'qrcode');
</script>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<!-- 文章 结束 -->
<script id="cy_cmt_num" src="//changyan.sohu.com/upload/plugins/plugins.list.count.js?clientId=<?php echo $settings['changyan_app_id']; ?>"></script><!-- 畅言评论数获取js -->
<!-- 底部 开始 --> 
<ul class="layui-fixbar">
	
	<li id="fixbar_avatar" class="<?php if(\think\Session::get('member.id') == 0): ?>hidden<?php endif; ?>"><img src="<?php echo \think\Session::get('member')['avatar']; ?>" alt="头像"><div class="fixbar_member_info trans_3"><?php echo \think\Session::get('member')['nickname']; ?><span id="logout_btn">退了</span></div></li>
	<?php if($settings['qr_code']): ?>
	<li class="layui-icon qr_code">&#xe63b;<img class="qr_code_pic" src="<?php echo $settings['qr_code']; ?>" alt="微信公众号二维码"></li> 
	<?php endif; ?>
	<li class="layui-icon layui-fixbar-top" id="to_top">&#xe604;</li>
</ul>
<div class="layui-footer footer">
  <div class="main index_main">
    <p><?php echo $settings['copy']; ?></p>
    <p>
      <a href="/Sitemap.xml">网站地图</a>
    </p>
    <?php if($settings['icp']): ?>
    <p class="beian">
    	<!-- <a class="gongan" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=xxxxxxxxxx"><img src="__TEMPLATE__laozhang/static/images/gonganbeian.png" alt="豫公网安备 41019702002232号">豫公网安备 xxxxxxxxxx号</a> -->
    	<a class="icp" target="_blank" href="http://www.miitbeian.gov.cn"><?php echo $settings['icp']; ?></a>
    </p>
    <?php endif; ?>
    <p>
      <a target="_blank" href="http://www.phplaozhang.com">Powered by LzCMS! <?php echo LZ_VERSION; ?></a>
    </p>
  </div>
</div>
<!-- 底部 结束 -->
<script type="text/javascript" charset="utf-8">
$(function() {
    $("img.lazy").lazyload({effect: "fadeIn"});
});
</script>
<script type="text/javascript">
layui.use(['form','element'], function(){
	var layer = layui.layer,
	form = layui.form(),
	element = layui.element(),
	$ = layui.jquery;
  	
	//左边导航点击显示
	$('.left_nav_btn').click(function(){
		$('.left_nav_mask').show();
		$('.left_nav').addClass('left_nav_show');
	});
	//左边导航点击消失
	$('.left_nav_mask').click(function(){
		$('.left_nav').removeClass('left_nav_show');
		$('.left_nav_mask').hide();
	});

	//搜索框特效
	$('.header .head_search .search_input').focus(function(){
		$('.header .head_search').addClass('focus');
		$(this).attr('placeholder','输入关键词搜索');
	});
	/*$(document).click(function(){
		$('.header .head_search').removeClass('focus');
		$('.header .head_search .search_input').attr('placeholder','搜索');
	});
	$('.header .head_search').click(function(e){
		$(this).addClass('focus');
		e.stopPropagation(); 
	});*/
	$('.header .head_search .close').click(function(){
		$('.header .head_search').removeClass('focus');
		$('.header .head_search .search_input').attr('placeholder','搜索');
	});
	//底部会员头像
	$('#fixbar_avatar').click(function(){
		if($('#fixbar_avatar .fixbar_member_info').is(":visible")){
			$('#fixbar_avatar .fixbar_member_info').hide().css({'opacity':0,'right':'70px'});
	        
	    }else{
	        $('#fixbar_avatar .fixbar_member_info').show().animate({'opacity':1,'right':'50px'},50);
	    }
	});
	$('#fixbar_avatar').hover(function(){
		$('#fixbar_avatar .fixbar_member_info').show().animate({'opacity':1,'right':'50px'},50);
	},function(){
		$('#fixbar_avatar .fixbar_member_info').hide().css({'opacity':0,'right':'70px'});
	});
	//退出登陆 
	$("#fixbar_avatar").on('click','#logout_btn',function() {
		loading = layer.load(2, {
	      shade: [0.2,'#000'] //0.2透明度的白色背景
	    });
	    $.post('<?php echo url("member/logout"); ?>',function(data){
	      if(data.code == 200){
	        layer.close(loading);
	        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
	        	$('#fixbar_avatar').hide()
	          //location.reload();//do something
	        });
	      }else{
	        layer.close(loading);
	        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
	      }
	    });
    });
	//回到顶部
	$("#to_top").click(function() {
      $("html,body").animate({scrollTop:0}, 200);
    });
    $(document).scroll(function(){
    	var	scroll_top = $(document).scrollTop();
    	if(scroll_top > 500){
    		$("#to_top").show();
    	}else{
    		$("#to_top").hide(); 
    	}
    }); 
    //底部版权始终在底部 
    /*var win_height = $(window).height();
    var body_height = $('body').height();  
    var footer_height = $('.footer').height();
    if(body_height - win_height < 0){
    	$('.footer').addClass('footer_fixed');
    } */
});
</script>
</body>
</html>
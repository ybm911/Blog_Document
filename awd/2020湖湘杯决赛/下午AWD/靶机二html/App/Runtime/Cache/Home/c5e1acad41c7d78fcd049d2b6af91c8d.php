<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php echo ($seo["title"]); ?></title>
<meta name="keywords" content="<?php echo ($seo["keys"]); ?>" />
<meta name="description" content="<?php echo ($seo["desc"]); ?>" />
<script src="__PUBLIC__/statics/js/jquery/jquery-1.7.2.min.js"></script>
<script src="__PUBLIC__/statics/js/ThinkAjax.js"></script>
<script src="__TMPL__Public/js/common.js?1"></script>

<link href="__TMPL__Public/css/meta.css" type="text/css" rel="stylesheet"/>
<link href="__TMPL__Public/css/personal.css" type="text/css" rel="stylesheet"/>
</head>
<script>
$(document).ready(function(){
	//登录
	var id = $.cookie('id');
	var username =$.cookie('name');
	if(id > 0){
		$(".op .info_show").show();
		$(".op .login").hide();
		if(username != ''){
			$('#username').text(username);
		}
	}else{
		$(".op .info_show").hide();
		$(".op .login").show();
	}
	//搜索
	var web_path=$('#web_path').text();
	<?php if(isset($album)): ?>$('#album').addClass('cur').siblings().removeClass('cur');
		$(".selectbox .selected").text('搜专辑');
		$(".selectbox .selected").append('<em></em>');
		$("#search_form").attr('action',web_path+'index.php?a=album&m=Search&g=Home');
		$('#a').val('album');<?php endif; ?>
	
	$(".selectbox").hover(
		function(){
			$(this).find(".selected").addClass('hover');
			$(".selectbox ol").show();
		},
		function(){
			$(this).find(".selected").removeClass('hover');
			$(".selectbox ol").hide();
		}
	)
	
	$(".se").click(function(){
		$(this).addClass('cur').siblings().removeClass('cur');
		var v = $(this).find("a").text();
		$(".selectbox .selected").text('搜'+v);
		$(".selectbox .selected").append('<em></em>');
		$(".selectbox ol").hide();
		var a = $(this).attr('id');
		$("#search_form").attr('action',web_path+'index.php?a='+a+'&m=Search&g=Home');
		$('#a').val(a);
	})
	
	$(".se").hover(function(){
		$(this).addClass('cur').siblings().removeClass('cur');
	})
	var key = $(".txt").attr('placeholder');
	
	$(".txt").focus(function(){
		if($(".txt").val() == key){
			$(this).val('');
		}
	});
	
	$(".txt").blur(function(){
		if($(".txt").val() == ''){
			$(this).val(key);
		}
	});
});
$(function(){
		var nav_top = $('.nav_offsetTop').offset().top; 
		$show_nav = function() {
		var st = $(document).scrollTop();
		if(st > nav_top){
			$("#header_fixed").show();
		}else{
			$("#header_fixed").hide();
		}
	};
	$(window).bind("scroll", $show_nav);
})
$(function(){
	var nav_top = $('.nav_offsetTop').offset().top; 
	var st = $(document).scrollTop();
	if(st > nav_top){
		$("#header_fixed").show();
	}else{
		$("#header_fixed").hide();
	}
})
</script>

<body id="index">
<div id="web_path" style="display:none;"><?php echo C('web_path');?></div>
<div id="header_fixed">
<div class="navWrap clearfix">
	<div id="nav">
		<ul class="nav_list clearfix">
			<li class="shopping"><a href="javascript:;">逛街啦</a></li>
			<li><a class=<?php if('index' == $curpage): ?>cur<?php else: ?>split<?php endif; ?> href="<?php echo C('site_domain');?>">首页</a></li>
			<li class=<?php if('album' == $curpage): ?>cur<?php else: ?>split<?php endif; ?>><a href="<?php echo get_url('index','','album');?>">专辑</a></li>
			<?php if(is_array($p_cate_list)): $i = 0; $__LIST__ = $p_cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vop): $mod = ($i % 2 );++$i;?><li class=<?php if($vop['id'] == $id): ?>cur<?php else: ?>split<?php endif; ?>><a href="<?php echo get_url('index',$vop['id'],'cate');?>"><?php echo ($vop["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		
<!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_b"><img src="__TMPL__Public/img/bdshare.png" width="96"/>
		<a class="shareCount"></a>	</div>
<script type="text/javascript" id="bdshare_js" data="type=button" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<!-- Baidu Button END -->
		</div>
		</div>
</div>
<div id="header">
	<div class="toolsBar clearfix op">
			<ul class="info_show" style="display:none">
				<li class="uname">
						<a href="<?php echo get_url('index','','user');?>" class="item"><img class="mb_avt r3" onerror="this.src='__PUBLIC__/statics/images/avatar-60.png'" src=<?php if($nav_user_info['img'] == ''): ?>__PUBLIC__/statics/images/avatar-60.png<?php else: echo C('web_path');?>Uploads/avatar_small/<?php echo ($nav_user_info["img"]); endif; ?> /><b id="username"><?php echo ($nav_user_info["name"]); ?></b></a>
						<span></span>
						<p>
							<a href="<?php echo get_url('account','','user');?>">个人设置</a>
							<a href="<?php echo get_url('sns','','user');?>">账号绑定</a>
							<a href="<?php echo get_url('logout','','user');?>">退出</a></p>
				</li>
				<li class="globe_publish"><a class="item" href="<?php echo get_url('release','','user');?>">发表</a></li>
				<li class="myalbum" ><a class="item" href="<?php echo get_url('album','','user');?>">专辑</a></li>
				<li class="myfavs"><a class="item" href="<?php echo get_url('like','','user');?>">喜欢</a></li>
			</ul>                    
		<ul class="login clearfix">
			<li class="ways">
				<a href="<?php echo get_url('register','','user');?>" class="mr5"><span>注册</span></a>
				<a href="<?php echo get_url('login','','user');?>"><span>登录</span></a>
			</li>
			<li class="other_ways">
				<a href="<?php echo get_url('sinalogin','','user');?>" class="weibo_login">微博登录</a>
				<a href="<?php echo get_url('qqlogin','','user');?>" class="qq_login">QQ登录</a>
				<a href="<?php echo get_url('taobaologin','','user');?>" class="tb_login">淘宝登录</a>
			</li>
		</ul>
</div>
	<div class="logo-search  clearfix">
		<h1 class="logo"><a href="<?php echo C('site_domain');?>" class="logo" ><img src="__TMPL__Public/img/logo.png" width="146" height="47" class="png_bg"/></a></h1>
		<div id="searchBar">
			<div class="selectbox">
				<span class="selected">搜宝贝<em></em></span>
				<ol>
					<li class="se cur" id="index"><a href="javascript:;">宝贝</a></li>
					<li class="se" id="album"><a href="javascript:;">专辑</a></li>
					<li class="lastli"></li>
				</ol>
			</div>
			<form target="_blank" action="<?php echo get_url('index','','search');?>" id="search_form">
				<input id="a" name="a" type="hidden" value="index">
				<input name="m" type="hidden" value="Search">
				<input name="g" type="hidden" value="Home">
				<input id="keywd" class="txt" name="keywords" type="text" value="<?php if(isset($keywords)): echo ($keywords); else: echo C('default_kw'); endif; ?>" placeholder="<?php echo C('default_kw');?>" autoComplete= "Off"/>
				<input class="btn" type="submit" value=""/>
			</form>
		</div>
	</div>
	<div class="navWrap clearfix">
	<div id="nav" class="nav_offsetTop">
		<ul class="nav_list clearfix">
			<li class="shopping"><a href="javascript:;">逛街啦</a></li>
			<li><a class=<?php if('index' == $curpage): ?>cur<?php else: ?>split<?php endif; ?> href="<?php echo C('site_domain');?>">首页</a></li>
			<li class=<?php if('album' == $curpage): ?>cur<?php else: ?>split<?php endif; ?>><a href="<?php echo get_url('index','','album');?>">专辑</a></li>
			<?php if(is_array($p_cate_list)): $i = 0; $__LIST__ = $p_cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vop): $mod = ($i % 2 );++$i;?><li class=<?php if($vop['id'] == $id): ?>cur<?php else: ?>split<?php endif; ?>><a href="<?php echo get_url('index',$vop['id'],'cate');?>"><?php echo ($vop["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		
<!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_b"><img src="__TMPL__Public/img/bdshare.png" width="96"/>
		<a class="shareCount"></a>	</div>
<script type="text/javascript" id="bdshare_js" data="type=button" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<!-- Baidu Button END -->
<?php if(('index' == $curpage) OR ($cate_name != '')): ?><!-- OR ('album' eq $curpage)-->
<div id="nav_sub">
		<ul class="album_new">
			<li><a class="clearfix" href="<?php echo get_url('index','','album');?>"><strong>最新专辑</strong><span></span></a></li>
		</ul>
        <ul class="items_num">
			<li><a class="clearfix" href="javascript:;"><strong>单品：<?php echo ($itemCount); ?></strong><em></em></a></li>			
		</ul>
		
		<ul class="cate_show">
		<?php if(is_array($p_cate_list)): $i = 0; $__LIST__ = $p_cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vop): $mod = ($i % 2 );++$i;?><li class="<?php if($vop['id'] == $id): ?>curr<?php endif; ?>">
				<a class="clearfix" href="<?php echo get_url('index',$vop['id'],'cate');?>"><strong><img src="<?php echo C('web_path').ltrim($vop['img'],'/'); ?>" width="20" height="20"><?php echo ($vop["name"]); ?></strong><span></span></a>    
                <!-- <p>
				<?php if(is_array($vop['tags'])): $i = 0; $__LIST__ = $vop['tags'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voTag): $mod = ($i % 2 );++$i;?><a href="<?php echo get_url('tag',$voTag['id'],'cate');?>" class="cate_word"><?php echo ($voTag["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</p>-->
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		</div><?php endif; ?>
		</div>
		</div>
</div>
<div id="head_bottom"></div>
<div class="main">
	<div class="piece_hd"></div>
	<div id="content">
		<div class="fl " id="setting_bar">
			<h1>帐号设置</h1>
			<div class="base_info">
				<a href="<?php echo get_url('account','','user');?>" class="c">基本信息</a><br>
				<a href="<?php echo get_url('img','','user');?>" class="">修改头像</a><br>
				<a href="<?php echo get_url('pwd','','user');?>" class="">修改密码</a><br>
				<a href="<?php echo get_url('sns','','user');?>" class="">帐号绑定</a><br>
			</div>
		</div>
		<div id="setting_box" class="fl">
		<!-- 设置基本信息 -->
			<div id="setting_form" class="setting_basic">
				<form action="" method="post">
				<input type="hidden" id="hdProvince" value="<?php echo ($province); ?>">
				<input type="hidden" id="hdCity" value="<?php echo ($city); ?>">
				<input type="hidden" id="hdCounty" value="<?php echo ($county); ?>">
				<input type="hidden" id="hiddenId" value="<?php echo ($user_info["id"]); ?>">
					<div class="settings_title">
						<span>基本资料</span>
					</div>
					<dl>
						<dd>用户名：</dd>
						
							<dt class="unick">
								<input class="r3" type="text" name="unick" id="basicName" value="<?php echo ($user_info["name"]); ?>"  disabled="disabled">
							</dt>
								
						<dd>性别：</dd>
						<dt class="sex" style="line-height: 30px;">
							<input <?php if($user_info['sex'] == 0): ?>checked<?php endif; ?> name="sex" value="0" type="radio" id="" style="margin:0"> 女
							<input <?php if($user_info['sex'] == 1): ?>checked<?php endif; ?> name="sex" type="radio" value="1" id=""> 男
						</dt>
						<dd>个人介绍：</dd>
						<dt class="weibo"><input class="r3" id="selfInfo" name="weibo" type="text" value="<?php echo ($user_info["info"]); ?>"></dt>
						
						<dd>所在地：</dd>
						<dt class="location">
							<select id="s_province" name="s_province"></select>&nbsp;&nbsp;
							<select id="s_city" name="s_city" ></select>&nbsp;&nbsp;
							<select id="s_county" name="s_county"></select>
							<script type="text/javascript" src="__TMPL__Public/js/area.js?1"></script>
							<script type="text/javascript">_init_area();</script>
						</dt>
						<dd>年龄：</dd>
						<dt class="">
							<input type="radio" name="age" value="80" <?php if($user_info['age'] == '80'): ?>checked<?php endif; ?>/>
							80后　
							<input type="radio" name="age" value="90" <?php if($user_info['age'] == '90'): ?>checked<?php endif; ?> />
							90后　
							<input type="radio" name="age" value="70" <?php if($user_info['age'] == '70'): ?>checked<?php endif; ?> />
							70后
							
						</dt>
						<dd>&nbsp;</dd>
						 <dt class="clearfix subbox" style="float:left"><input btn_up_post_action="<?php echo get_url('accountAction','','user');?>" id="btn_up" class="submit r3" type="button" value="确认修改"/></dt><dd style="float:left;margin-top:10px"><p id="updateNotice"></p></dd>
					</dl>
				</form>
			</div>
		</div>

    </div>	
	<div class="piece_ft"></div>
</div>
</div>

<div class="footerWrap">
		<div class="radius-top">
			<span class="hl"></span>
			<span class="hr"></span>
		</div>
<div id="footer">
	<div class="fl">
		<dl style="margin-left:30px;">
			<dt>网站</dt>
			<dd>
				<ul>
				<?php if(is_array($p_cate_list)): $i = 0; $__LIST__ = $p_cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cval): $mod = ($i % 2 );++$i;?><li>·<a href="<?php echo get_url('index',$cval['id'],'cate');?>" target="_blank"><?php echo ($cval["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</dd>
		</dl>
		<dl>
			<dt>网站相关</dt>
			<dd style="margin-bottom: 18px;">
				<ul>
				<dd><a href="__PUBLIC__/statics/sitemap.html" target="_blank">网站地图</a></dd>
    			<dd><a href="__PUBLIC__/statics/sitemap.xml" target="_blank">sitemap</a></dd>
				<dd><?php echo strclean(C('site_icp')); ?></dd>
				<dd><?php echo strclean(C('statistics_code')); ?></dd>
				</ul>
			</dd>
			
		</dl>
		
	</div>
	<div class="fr">     
		<dl class="followus">
			<dt>关注我们</dt>
			<dd>
				<ul>
				<dd><?php echo strclean(C('follow_us')); ?></dd>
				<dd><?php echo strclean(C('follow_us2')); ?></dd>
				<dd><?php echo strclean(C('follow_us3')); ?></dd>
				<dd><?php echo strclean(C('follow_us4')); ?></dd>
				<dd><?php echo strclean(C('follow_us5')); ?></dd>
				<dd><?php echo strclean(C('follow_us6')); ?></dd>
				</ul>
			</dd>
		</dl>
		
		<dl>
			<dt>友情链接</dt>
			<dd>
				<ul>
				<?php if(is_array($linkList)): $i = 0; $__LIST__ = $linkList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>·<a href="<?php echo ($val["url"]); ?>" target="_blank"><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</dd>
		</dl>
	</div>

<p class="cr"><?php echo strclean(C('record')); ?></p>
</div>
		<div class="radius-bottom">
			<span class="hl"></span>
			<span class="hr"></span>
		</div>
</div>

<div class="back2top"><a href="javascript:;" title="返回顶部"></a></div>
</body>
</html>
<script>
/*返回顶部*/
$(function() {
		$(".back2top").click(function() {
			$("html, body").animate({ scrollTop: 0 }, 120);
	}), $backToTopFun = function() {
		var st = $(document).scrollTop(), winh = $(window).height();
		(st > 0)? $(".back2top").show(): $(".back2top").hide();    
		//IE6下的定位
		if (!window.XMLHttpRequest) {
			$(".back2top").css("top", st + winh - 166);    
		}
	};
	$(window).bind("scroll", $backToTopFun);
	$(function() { $backToTopFun(); });
});
$(function(){
	$(".info_show .uname").hover(function(){
		$(".info_show .uname p").show();
	},function(){
		$(".info_show .uname p").hide();
	})
	$(".info_show .msg_notice").hover(function(){
		$(".info_show .msg_notice p").show();
	},function(){
		$(".info_show .msg_notice p").hide();
	})
/*	$("#searchBar .selectbox").hover(function(){
		$("#searchBar .selectbox ol").show();
	},function(){
		$("#searchBar .selectbox ol").hide();
	})*/
})
</script>
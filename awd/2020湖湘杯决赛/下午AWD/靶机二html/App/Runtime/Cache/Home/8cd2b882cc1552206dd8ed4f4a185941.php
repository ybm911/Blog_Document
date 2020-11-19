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
				<a href="<?php echo get_url('account','','user');?>" class="">基本信息</a><br>
				<a href="<?php echo get_url('img','','user');?>" class="c">修改头像</a><br>
				<a href="<?php echo get_url('pwd','','user');?>" class="">修改密码</a><br>
				<a href="<?php echo get_url('sns','','user');?>" class="">帐号绑定</a><br>
			</div>
		</div>
		<div id="setting_box" class="fl">
	<!--上传头像-->
	<div id="setting_form" class="setting_avartar">	
	选一张您喜欢的照片做头像吧(建议图片尺寸不小于200*200)。支持jpg, gif, png格式，大小不超过2M。
	<div style="width:600px;margin:0 auto;padding-top:50px;">
	<div>
		<form enctype="multipart/form-data" method="post" name="upform" target="upload_target" action="<?php echo get_url('upload','','user');?>" id="avartarForm">
			<p style="position:relative;margin:0; clear:both; height:28px">
				<input type="text" id="viewAvartar" readonly="readonly" class="gray_text">
				<input type="button" class="gray_button" value="上传...">
				<input type="file" name="Filedata" id="Filedata" class="tfile"  size="41"/>
			</p>
			<span style="visibility:hidden;" id="loading_gif"><img src="__PUBLIC__/statics/avatar/loading.gif" align="absmiddle" />上传中，请稍侯......</span>
		</form>
		<iframe src="about:blank" name="upload_target" style="display:none;"></iframe>
		<div id="avatar_editor" style="margin-top:20px">
		<div style="width:150px;height:150px;overflow:hidden; margin-right:20px; display:inline"><img onerror="this.src='__PUBLIC__/statics/images/avatar.png'" src=<?php if($user_info['img'] == ''): ?>__PUBLIC__/statics/images/avatar.png<?php else: echo C('web_path');?>Uploads/avatar_big/<?php echo ($user_info["img"]); endif; ?> width="150"/>
		</div>
		
		<div style="display:inline">
		<img onerror="this.src='__PUBLIC__/statics/images/avatar-60.png'" src=<?php if($user_info['img'] == ''): ?>__PUBLIC__/statics/images/avatar-60.png<?php else: echo C('web_path');?>Uploads/avatar_small/<?php echo ($user_info["img"]); endif; ?> width="32"/>
		</div>
		</div>
	
	</div>
</div>
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

<script type="text/javascript">
	//允许上传的图片类型
	var extensions = 'jpg,jpeg,gif,png';
	//保存缩略图的地址.
	//var saveUrl = "__PUBLIC__/statics/avatar/save_avatar.php";
	//var saveUrl = "/index.php?a=saveAvatar&m=Uc&g=Home";//
	var saveUrl="<?php echo C('web_path');?>index.php?m=Uc%26a=saveAvatar%26g=Home";
	//保存摄象头白摄图片的地址.
	//头像编辑器flash的地址.
	var editorFlaPath = '__PUBLIC__/statics/avatar/AvatarEditor.swf';
	//Download by http://www.codefans.net
	function buildAvatarEditor(pic_id,pic_path,post_type)
	{
		var content = '<embed height="464" width="514"'; 
		content+='flashvars="type='+post_type;
		content+='&photoUrl='+pic_path;
		content+='&photoId='+pic_id;
		content+='&saveUrl='+saveUrl+'&radom=1"';
		content+=' pluginspage="http://www.macromedia.com/go/getflashplayer"';
		content+=' type="application/x-shockwave-flash"';
		content+=' allowscriptaccess="always" quality="high" src="'+editorFlaPath+'"/>';
		document.getElementById('avatar_editor').innerHTML = content;
	}
	/**
	 * 提供给FLASH的接口：编辑头像保存成功后的回调方法
	 */
	function avatarSaved(){
		//alert('保存成功，哈哈');
		window.location.href = "<?php echo get_url('img','','user');?>";

	}
	
	 /**
	  * 提供给FLASH的接口：编辑头像保存失败的回调方法, msg 是失败信息，可以不返回给用户, 仅作调试使用.
	  */
	 function avatarError(msg){
		 alert(msg);
		 alert("上传失败了呀，哈哈");
	 }

	 function checkFile()
	 {
		 var path = document.getElementById('Filedata').value;
		 var ext = getExt(path);
		 var re = new RegExp("(^|\\s|,)" + ext + "($|\\s|,)", "ig");
		  if(extensions != '' && (re.exec(extensions) == null || ext == '')) {
		 alert('对不起，只能上传jpg, gif, png类型的图片');
		 return false;
		 }
		 showLoading();
		// return true;
	 }

	 function getExt(path) {
		return path.lastIndexOf('.') == -1 ? '' : path.substr(path.lastIndexOf('.') + 1, path.length).toLowerCase();
	}
	  function	showLoading()
	  {
		  document.getElementById('loading_gif').style.visibility = 'visible';
	  }
	  function hideLoading()
	  {
		document.getElementById('loading_gif').style.visibility = 'hidden';
	  }
$(function(){
	$("#Filedata").change(function(){
		checkFile();
		$("#viewAvartar").val($(this).val());
		$("#avartarForm").submit();
	});
})
</script>
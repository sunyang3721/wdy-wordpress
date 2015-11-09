<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="dns-prefetch" href="//apps.bdimg.com">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-title" content="<?php echo get_bloginfo('name') ?>">
<meta http-equiv="Cache-Control" content="no-siteapp">
<title><?php echo _title(); ?></title>
<?php wp_head(); ?>
<link rel="shortcut icon" href="<?php echo home_url() . '/favicon.ico' ?>">
<!--[if lt IE 9]><script src="<?php echo get_stylesheet_directory_uri() ?>/js/libs/html5.min.js"></script><![endif]-->
</head>
<body <?php body_class(_bodyclass()); ?>>
<header class="header">
	<div class="container">
		<?php _the_logo(); ?>
		<?php  
			$_brand = _hui('brand');
			if( $_brand ){
				$_brand = explode("\n", $_brand);
				echo '<div class="brand">' . $_brand[0] . '<br>' . $_brand[1] . '</div>';
			}
		?>
		<ul class="site-nav site-navbar">
			<?php _the_menu('nav') ?>
			<?php if( !is_search() ){ ?>
				<li class="navto-search"><a href="javascript:;" class="search-show active"><i class="fa fa-search"></i></a></li>
			<?php } ?>
		</ul>
		<div class="topbar">
			<ul class="site-nav topmenu">
				<?php _the_menu('topmenu') ?>
				<li class="menusns">
					<a href="javascript:;">关注本站 <i class="fa fa-angle-down"></i></a>
					<ul class="sub-menu">
						<?php if(_hui('wechat')){ echo '<li><a class="sns-wechat" href="javascript:;" title="'.__('关注', 'haoui').'”'._hui('wechat').'“" data-src="'._hui('wechat_qr').'"><i class="fa fa-wechat"></i> 微信</a></li>'; } ?>
						<?php if(_hui('weibo')){ echo '<li><a target="_blank" rel="external nofollow" href="'._hui('weibo').'"><i class="fa fa-weibo"></i> 微博</a></li>'; } ?>
						<?php if(_hui('tqq')){ echo '<li><a target="_blank" rel="external nofollow" href="'._hui('tqq').'"><i class="fa fa-tencent-weibo"></i> 腾讯微博</a></li>'; } ?>
						<?php if(_hui('twitter')){ echo '<li><a target="_blank" rel="external nofollow" href="'._hui('twitter').'"><i class="fa fa-twitter"></i> Twitter</a></li>'; } ?>
						<?php if(_hui('facebook')){ echo '<li><a target="_blank" rel="external nofollow" href="'._hui('facebook').'"><i class="fa fa-facebook"></i> Facebook</a></li>'; } ?>
						<?php if(_hui('feed')){ echo '<li><a target="_blank" href="'._hui('feed').'"><i class="fa fa-rss"></i> RSS订阅</a></li>'; } ?>
					</ul>
				</li>
			</ul>
			<!--进入会员中心代码-->
		</div>
		<i class="fa fa-bars m-icon-nav"></i>
	</div>
</header>
<div class="site-search">
	<div class="container">
		<?php  
			if( _hui('search_baidu') && _hui('search_baidu_code') ){
				echo _hui('search_baidu_code');
			}else{
				echo '<form method="get" class="site-search-form" action="'.esc_url( home_url( '/' ) ).'" ><input class="search-input" name="s" type="text" placeholder="输入关键字" value="'.htmlspecialchars($s).'"><button class="search-btn" type="submit"><i class="fa fa-search"></i></button></form>';
			}
		?>
	</div>
</div>
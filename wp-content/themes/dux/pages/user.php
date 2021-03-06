<?php 
/**
 * Template name: User
 * Description:   A user profile page
 */

get_header();

?>

<?php if( !_hui('user_page_s') ) exit('该功能需要开启！'); ?>
<section class="container">
	<div class="container-user"<?php echo is_user_logged_in()?'':' id="issignshow" style="height:500px;"' ?>>
		<?php if( is_user_logged_in() ){ global $current_user; ?>
		<div class="userside">
			<div class="usertitle">
				<?php echo _get_the_avatar($user_id=$current_user->ID, $user_email=$current_user->user_email, true); ?>
				<h2><?php echo $current_user->display_name ?></h2>
			</div>
			<div class="usermenus">	
				<ul class="usermenu">
					<li class="usermenu-posts"><a href="#posts/all">我的文章</a></li>
					<li class="usermenu-comments"><a href="#comments">我的评论</a></li>
					<li class="usermenu-info"><a href="#info">修改资料</a></li>
					<li class="usermenu-password"><a href="#password">修改密码</a></li>
					<li class="usermenu-signout"><a href="<?php echo wp_logout_url(home_url()) ?>">退出</a></li>
				</ul>
			</div>
		</div>
		<div class="content" id="contentframe">
			<div class="user-main"></div>
			<div class="user-tips"></div>
		</div>
		<?php } ?>
	</div>
</section>

<?php if( is_user_logged_in() ){ ?>
<script id="temp-postmenu" type="text/x-jsrender">
	<a href="#posts/{{>name}}">{{>title}}<small>({{>count}})</small></a>
</script>

<script id="temp-postitem" type="text/x-jsrender">
	<li>
		<img data-src="{{>thumb}}" class="thumb">
		<h2><a target="_blank" href="{{>link}}">{{>title}}</a></h2>
		<p class="note">{{>desc}}</p>
		<p class="text-muted">{{>time}} &nbsp;&nbsp; 分类：{{>cat}} &nbsp;&nbsp; 阅读({{>view}}) &nbsp;&nbsp; 评论({{>comment}}) &nbsp;&nbsp; 赞({{>like}})</p>
	</li>
</script>

<script id="temp-info" type="text/x-jsrender">
	<form>
	  	<ul class="user-meta">
	  		<li><label>入门时间</label>
				{{>regtime}}
	  		</li>
	  		<li><label>用户名</label>
				<input type="input" class="form-control" disabled value="{{>logname}}">
	  		</li>
	  		<li><label>邮箱</label>
				<input type="email" class="form-control" disabled value="{{>email}}">
	  		</li>
	  		<li><label>昵称</label>
				<input type="input" class="form-control" name="nickname" value="{{>nickname}}">
	  		</li>
	  		<li><label>网址</label>
				<input type="input" class="form-control" name="url" value="{{>url}}">
	  		</li>
	  		<li><label>QQ</label>
				<input type="input" class="form-control" name="qq" value="{{>qq}}">
	  		</li>
	  		<li><label>微信号</label>
				<input type="input" class="form-control" name="weixin" value="{{>weixin}}">
	  		</li>
	  		<li><label>微博地址</label>
				<input type="input" class="form-control" name="weibo" value="{{>weibo}}">
	  		</li>
	  		<li>
				<input type="button" evt="info.submit" class="btn btn-primary" name="submit" value="确认修改资料">
				<input type="hidden" name="action" value="info.edit">
	  		</li>
	  	</ul>
	</form>
</script>

<script id="temp-password" type="text/x-jsrender">
	<form>
	  	<ul class="user-meta">
	  		<li><label>原密码</label>
				<input type="password" class="form-control" name="passwordold">
	  		</li>
	  		<li><label>新密码</label>
				<input type="password" class="form-control" name="password">
	  		</li>
	  		<li><label>重复新密码</label>
				<input type="password" class="form-control" name="password2">
	  		</li>
	  		<li>
				<input type="button" evt="password.submit" class="btn btn-primary" name="submit" value="确认修改密码">
				<input type="hidden" name="action" value="password.edit">
	  		</li>
	  	</ul>
	</form>
</script>

<script id="temp-commentitem" type="text/x-jsrender">
	<li>
		<time>{{>time}}</time>
		<p class="note">{{>content}}</p>
		<p class="text-muted">文章：<a target="_blank" href="{{>post_link}}">{{>post_title}}</a></p>
	</li>
</script>

<?php
}
?>

<?php

get_footer();
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>后台登陆 - 乐锋派后台管理系统</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="/Public/static/css/bootstrap.min.css" />
<link rel="stylesheet" href="/Public/static/css/camera.css" />
<link rel="stylesheet" href="/Public/static/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/Public/admin/view/css/login.css" />
<link rel="stylesheet" href="/Public/static/css/common.css" />
<link href="/Public/static/css/font-awesome.css" rel="stylesheet" />
</head>
<body>
	<div class="bg">
		<div id="loginbox">
			<form action="<?php echo U('Public/login');?>" method="post" name="loginForm" id="loginForm">
				<div class="control-group normal_text">
					<h3>
						<img src="/Public/static/images/logo.png" alt="Logo" />
					</h3>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							<i><img height="37" src="/Public/static/images/user.png" /></i>
							</span><input type="text" name="loginname" id="loginname" value="" placeholder="请输入管理员账号" />
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_ly">
							<i><img height="37" src="/Public/static/images/suo.png" /></i>
							</span><input type="password" name="password" id="password" placeholder="请输入密码" value="" />
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box code">
							<span class="add-on bg_code">
							<i><img height="37" src="/Public/static/images/suo.png" /></i>
							</span><input type="text" name="code" id="code" class="input-code" placeholder="请输入验证码" value="" />
							<img event-click="changeCode" tag-id="img-code" class="img-code" src="<?php echo U('Public/verify',array('math'=>time()),'');?>" url="<?php echo U('Public/verify','','');?>" />
							<a event-click="changeCode" class="change-code" href="javascript:void(0);">看不清？点击更换</a>
						</div>
					</div>
				</div>
				<div class="memory-pwd">
					<div class="checkbox">
						<label style="font-size:12px;">
							<input id="saveid" type="checkbox"> 记住密码
						</label>
					</div>
				</div>
				<div class="forget-pwd">
					<a href="javascript:void(0);">忘记密码？</a>
				</div>
				<div class="form-actions">
					<div>
						<span>
							<a onclick="severCheck();" class="btn btn-info" id="to-recover">立即登录</a>
						</span>
						<span>
							<a href="javascript:reset();" class="btn btn-success">重置表单</a>
						</span>
					</div>
				</div>

			</form>


			<div class="controls">
				<div class="main_input_box">
					<font color="white">
						<span id="nameerr">Copyright ©2008 <a class="inc-link" href="http://www.pad-phone.com" target="_blank">www.pad-phone.com</a> Powered By 派锋科技</span>
					</font>
				</div>
			</div>
		</div>
	</div>
	<div id="templatemo_banner_slide" class="container_wapper">
		<div class="camera_wrap camera_emboss" id="camera_slide">
			<div data-src="/Public/admin/view/images/banner_slide_01.jpg"></div>
			<div data-src="/Public/admin/view/images/banner_slide_02.jpg"></div>
			<div data-src="/Public/admin/view/images/banner_slide_03.jpg"></div>
		</div>
		<!-- #camera_wrap_3 -->
	</div>
	
	<script type="text/javascript" src="/Public/static/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/Public/admin/controller/public.js"></script>

	<script type="text/javascript" src="/Public/static/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/static/js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="/Public/static/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/Public/static/js/jquery.mobile.customized.min.js"></script>
	<script type="text/javascript" src="/Public/static/js/camera.min.js"></script>
	<script type="text/javascript" src="/Public/static/js/templatemo_script.js"></script>
	<script type="text/javascript" src="/Public/static/js/jquery.tips.js"></script>
	<script type="text/javascript" src="/Public/static/js/jquery.cookie.js"></script>
	
</body>
</html>
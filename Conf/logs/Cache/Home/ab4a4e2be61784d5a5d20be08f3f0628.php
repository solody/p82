<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php echo C('site_title');?></title>
    <meta content="<?php echo C('keyword');?>" name="Keywords">
    <meta content="<?php echo C('content');?>" name="Description">
    <script src="<?php echo RES;?>/js/html5.js?BPm"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/bootstrap_min.css?BPm" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css?BPm" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/js/jQuery.js?BPm"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/carouFredSel.js?BPm"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/beta-index.js?BPm"></script>
	<link rel="shortcut icon" href="<?php echo RES;?>/images/favicon.ico" />
</head>
<body>
	<!--[if lte IE 8]>  <script language="javascript">$(function (){$.browser.msie&&$("#ie9-tips").show().find("#stopSuggestA").click(function(){$("#ie9-tips").hide()})})</script><![endif]-->
<div class="nav clearfix">
	<div class="nav-content">
		<h1 class="left"><a href="/"><?php echo C('site_name');?>·微信营销，如此简单！</a></h1>
		<div class="left city">
        <?php if($_SESSION[uid]==false): ?><h2><a href="<?php echo U('Home/Index/city');?>">
					全球代理查询<i class="tri4"></i>
				</a></h2>

			<?php else: ?>
				<h2>你好</h2>
				<a><span style="color:red"><?php echo (session('uname')); ?></span></a><?php endif; ?>
		</div>
		<div class="right line-li">
        
			 <ul>
        <li><a href="<?php echo U('Home/Index/index');?>"<?php if((ACTION_NAME) == "index"): ?>class="hover"<?php endif; ?>>首页</a></li>
        <li><a href="<?php echo U('Home/Index/common');?>" <?php if((ACTION_NAME) == "common"): ?>class="hover"<?php endif; ?> >经典案例</a></li>
	    <li class="nav_menu_li_1"><a style="width:70px; text-align:left;" class="_hover">产品中心<i></i></a>
					 <div class="sub-nav">
						 <a href="<?php echo U('Home/Index/price');?>">资费套餐</a>
						 <a href="<?php echo U('Other/Index/msg');?>">升级预约</a>
						 <a href="/">产品问答</a>
						 <a href="/">微拍</a>
						 <a href="/">小票机</a>
						 <a href="/">微WiFi</a>
					 </div>
	    </li>
        <li><a href="<?php echo U('Home/Index/proxy');?>" <?php if((ACTION_NAME) == "proxy"): ?>class="hover"<?php endif; ?> >渠道代理</a> </li>
		<li><a href="<?php echo U('Home/Index/fc');?>" <?php if((ACTION_NAME) == "fc"): ?>class="hover"<?php endif; ?> >功能介绍</a></li>		
        <li class="nav_menu_li_1"><a style="width:70px; text-align:left;" class="_hover" target="_black">帮助中心<i></i></a>
					 <div class="sub-nav">
						 <a href="<?php echo U('Home/Index/help');?>">使用指南</a>
						 <a href="http://www.gope.cn/" target="_black">技术支持</a>
						 <a href="http://wpa.qq.com/msgrd?v=3&uin=75943938&site=qq&menu=yes" target="_black">在线咨询</a>
					 </div>
        </li>
    </ul>

            <div class="account">
	       <?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Home/Index/reg');?>" class="btn-reg btn0" >注册</a>
           <a href="javascript:;" class="btn-login btn0" onClick="loginBox.toggle(this, event);">登录</a>
						<div id="qrcode" class="qrcode">
					<div>
						<a id="switch" href="javascript:;"  class="switch"></a>
						<div id="qrcode_body" class="qrcode_body">
						</div>
					</div>
				</div>
	         <?php else: ?>
           <a href="<?php echo U('User/Index/index');?>" hidefocus="true" class="btn-reg btn0">管理</a>
		  <a href="javascript:void(0)" class="btn-login btn0" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')">退出</a>
						<div id="qrcode" class="qrcode">
					<div>
						<a id="switch" href="javascript:;"  class="switch"></a>
						<div id="qrcode_body" class="qrcode_body">
						</div>
					</div>
				</div><?php endif; ?>	  
		</div>
		</div>
	</div>
</div>
	<div id="loginBox">
		<div class="login-panel">
			<h3>登录</h3>
			<div class="login-mod">
				<div class="login-err-panel dn" id="err_area">
					<span class="icon-wrapper"><i class="icon24-login err" style="margin-top:-.2em;*margin-top:0;"></i></span>
					<span id="err_tips"></span>
				</div>
				<form action="<?php echo U('Users/checklogin');?>" method="post"  class="login-form" id="login-form">
					<div class="login-un">
						<span class="icon-wrapper"><i class="icon24-login un"></i></span>
						<input type="text" id="username" placeholder="<?php echo C('site_name');?>帐号">
					</div>
					<div class="login-pwd">
						<span class="icon-wrapper"><i class="icon24-login pwd"></i></span>
						<input type="password" id="password" name="password" placeholder="密码">
					</div>
				</form>
				<div class="login-help-panel">
					<a id="rememberPwd" class="login-remember-pwd" href="javascript:;">
						<input type="checkbox" id="rememberPwdIcon">记住帐号
					</a>
					<a class="login-forget-pwd" href="<?php echo U('Home/Index/regpwd');?>">忘记密码？</a>
                    <a class="login-forget-pwd" href="<?php echo U('Home/Index/reg');?>">新用户注册</a>
				</div>
				<div class="login-btn-panel">
					<a class="login-btn" title="点击登录" href="javascript:;" id="login_button" onClick="login();">登录</a>
				</div>
			</div>
		</div>
		<div class="login-cover" onClick="loginBox.toggle(this, event);"></div>
	</div>
<div id="ie9-tips" class="clearfix">
	<div id="tipsPanel">
		<div id="tipsDesc">系统检测到您所使用的浏览器版本较低，推荐使用<a href="http://www.firefox.com.cn/download/" target="_blank">Firefox</a>或<a href="http://www.google.cn/intl/zh-CN/chrome/browser/index.html" target="_blank">Chrome</a>浏览器打开，否则将无法体验完整产品功能。</div>
		<a id="stopSuggestA" href="javascript:;">×</a>
	</div>
</div>

<script>
var $do_submit = false;

// 绑定回车键
$('#loginBox').keydown(function(e){
	if(13 == event.keyCode){
		login();
	}
});

	function login()
	{
		if (true == $do_submit)
		{
			return false;
		}

		var $pre_submit = '登录', $done_submit = '登录中...';
		var $username = $('#username').val(), $password = $('#password').val(), $keepalive = $('#rememberPwdIcon').val();
		$('#login_button').text($done_submit);
		$do_submit = true;

		// check
		if ('' == $username || '' == $password)
		{
			$('#err_tips').text('您输入的帐号或密码错误，请重新输入！');
			$('#err_area').show();
			$('#login_button').text($pre_submit);
			$do_submit = false;
			return false;
		}

		var $login_data = {
			username:$username,
			password:$password,
			keepalive:$keepalive
		};
		$.post('<?php echo U('Users/checklogin');?>', $login_data, function(rs){
			if(rs.status == 1)
			{
				location.href = '<?php echo U('User/Index/index');?>';
			}
			else
			{
				$('#err_tips').text(rs.info);
				$('#err_area').show();
				$('#login_button').text($pre_submit);
			}
			$do_submit = false;
		}, 'json');
	}
</script>
<script>
	//alert($);
	$(function(){
		(function(){
			var slider = {
				flag:false,
				owner:$("#qrcode")[0],
				handleEvent: function(evt){
					var that = this;
					that.flag = ("mouseover" == evt.type);
					if(that.flag){
						params = {opacity:"1", top:"5px"};
						$("#qrcode_body").addClass("on");
						$("#switch").addClass("on");
						slider.owner.removeEventListener("mouseover", slider, false);
					}else{
						params = {opacity:"0", top:"-50px"};
						$("#switch").removeClass("on");
						slider.owner.removeEventListener("mouseleave", slider, false);
					}

					$("#qrcode_body").animate(params, 500, "swing", function(){
						if(that.flag){
							slider.owner.addEventListener("mouseleave", slider, false);
						}else{
							$("#qrcode_body").removeClass("on");
							slider.owner.addEventListener("mouseover", slider, false);
						}
					});
				}
			};
			slider.owner.addEventListener("mouseover", slider, false);
		})();

	});
</script>
<!-- banner -->

<div class="Public-content clearfix">
	<div class="Public">
		<h1 class="Public-h1">注册</h1>
		<div class="Public-box clearfix">
			<div class="reg-wrapper2">
				<form id="regform" class="form-horizontal"  method="post" action="<?php echo U('Users/checkreg');?>">
					<div class="control-group">
						<label class="control-label" for="username">用户名</label>
						<div class="controls" >
							<input type="text" name="username" id="rusername"  onclick="if(this.value=='请输入用户名'){this.value=''}" onblur="if(this.value==''){this.value='请输入用户名'}" >
							<span class="maroon">*</span><span class="help-inline">长度为6~16位字符，可以为“数字/字母/中划线/下划线”组成</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">设置密码</label>
						<div class="controls">
							<input type="password" name="password" id="password">
							<span class="maroon">*</span><span class="help-inline">长度为6~16位字符</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="repassword">确认密码</label>
						<div class="controls">
							<input type="password" name="password" id="password">
			                <span class="maroon">*</span></span><span class="help-inline">再输一次密码</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="location_p">详细地址</label>
						<div class="controls">
							<select name="location_p" id="location_p"></select>
							<select name="location_c" id="location_c"></select>
							<select name="location_a" id="location_a"></select>
							<script src="<?php echo RES;?>/js/region_select.js?BPm"></script>
							<script type="text/javascript">
								new PCAS('location_p', 'location_c', 'location_a', '', '', '');
							</script>
						</div>
					</div>
					<div class="control-group" style="display:none;">
						<label class="control-label" for="address"></label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="address" id="address" data-rule-required="true" value="" style="width:426px;" />
							<span class="maroon">*</span><span class="help-inline">详细地址：xx路xx号</span>
						</div>
					</div>					
                    <?php if(C('reg_needmp')=='true'){ ?>
					<div class="control-group">
						<label class="control-label" for="phone">手机</label>
						<div class="controls">
							<input type="text" name="mp" id="mp">
							<span class="maroon">*</span><span class="help-inline">请输入正确的手机号码</span>
						</div>
					</div>
                    <?php } ?>
					<div class="control-group">
						<label class="control-label" for="email">邮箱</label>
						<div class="controls">
			                <input type="text" name="email" id="email" onclick="javascript:_gaq.push(['_trackPageview','/home/reg/virtual/Mail']);">
							<span class="maroon">*</span><span class="help-inline">邮箱将与支付及优惠相关，请填写正确的邮箱</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">QQ</label>
						<div class="controls">
							<input type="text" name="qq" id="qq">
		                    <span class="maroon">*</span><span class="help-inline">为确保消息畅通，请确认QQ号码填写无误。</span>
						</div>
					</div>
					<div class="control-group">
		                <label class="control-label" for="validdays">邀请期限</label>
						<div class="controls">
							<input type="text" name="validdays" readonly id="validdays" value="<?php echo C('reg_validdays');?>">
							<span class="maroon">*</span><span class="help-inline">天</span><span class="help-inline">&nbsp;&nbsp;<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" style="color:#54c11a;" target="_blank">如需升级邀请期限，联系客服</a></span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="verify">验证码</label>
						<div class="controls">
                        <script>
                        function refreshImg(){
                        	document.getElementById("txtCheckCode").src="/index.php?m=Index&a=verify&s="+Math.random();
                        }
                        </script>
							<input type="text" name="verifycode" id="verifycode">
							<span class="maroon">*</span><img src="<?php echo U('Index/verify');?>" id="txtCheckCode"/>&nbsp;<a href="javascript:refreshImg();" style="color:#666">看不清？点击更换</a>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
                            <input class="btn-register" type="submit" value="">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="footer">
  <div class="footer-content clearfix">
    <div class="foot-menu">
			<p>
				<a href="<?php echo C('site_url');?>" target="_blank"><?php echo C('site_name');?>首页</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Home/Index/reg');?>" target="_blank">申请入驻</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Home/Index/proxy');?>" target="_blank">渠道代理</a>&nbsp;|&nbsp;
				<!--<a href="<?php echo U('Home/Index/about');?>" target="_blank">关于<?php echo C('site_name');?></a>&nbsp;|&nbsp;-->
				<a href="<?php echo U('Home/Index/agents');?>" target="_blank">授权认证</a>&nbsp;|&nbsp;
				<a href="agent.php" target="_blank">代理商登录</a>&nbsp;|&nbsp;
				<a href="http://www.gope.cn" target="_blank">狗扑源码社区</a>
			</p>
			<p>客服QQ：<?php echo C('site_qq');?>&nbsp;&nbsp;&nbsp;技术QQ：<?php echo C('site_qq');?>&nbsp;&nbsp;&nbsp;邮箱：<?php echo C('site_email');?></p>
      <p>公司地址：<?php echo C('site_adress');?>&nbsp;&nbsp;&nbsp;咨询热线：<?php echo C('site_mp');?></p>
    </div>
		<div class="copyright">
			Copyright (c) 2011-<?php echo date('Y',time());?> <?php echo C('server_topdomain');?>. All Rights Reserved <?php echo C('copyright');?> <?php echo C('ipc');?> <?php echo C('counts');?>
  </div>
</div>
<!--<weixinerweima>-->
<div class="erwei" title="微信扫一扫">
	<span class="hudongzhushou">官方微信</span>
	<div class="erwei_big" style="display:none;">
		<p>扫一扫，关注<?php echo C('site_name');?>官方微信，体验<?php echo C('site_name');?>智能服务</p>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var erwei_time = null;
		$(".erwei").hover(function(){
			$(".erwei_big").show();
		}).mouseleave(function(){
				erwei_time = setTimeout(function(){
					$(".erwei_big").hide();
				},1000);
			});
		$(".erwei_big").mouseenter(function(){
			if(erwei_time){
				clearTimeout(erwei_time);
			}
		}).mouseleave(function(){
				erwei_time = setTimeout(function(){
					$(".erwei_big").hide();
				},1000);
			});
	});
</script>

<!--<weixinerweima>-->
<!-- Baidu Button BEGIN -->
<!-- 将此代码放在适当的位置，建议在body结束前 -->
<script id="bdaddtocite_shell"></script>
<script>
var bdShare_config_addtocite = {
	"type":"slide"
	,"pos":"left"
	,"color":"black"
	,"top":"200"
	,"uid":"6847210"
};
document.getElementById("bdaddtocite_shell").src="http://bdimg.share.baidu.com/static/js/addtocite_shell.js?t=" + Math.ceil(new Date()/3600000);

function zschref(){
	window.location.href="<?php echo C('site_url');?>";
}
</script>
<!-- Baidu Button END -->
<!---返回顶部------->
<div class="back2top" style="display:block"><a class="b_img" href="javascript:;"></a></div>
<script>
	function feedbackSubmit(){
		var $data = {
			feedback: $('#feedback-text').val(),
			email: $('#feedback-input').val(),
			url: self.location.href
		};
		$.post('/site/feedback', $data, function(rs){
			alert(rs.error);
			if (200 == rs.code)
			{
				$('#feedback, #feedback_cover').toggleClass('on');
			}
		}, 'json');
	}
</script>
<script type="text/javascript">
		$(document).ready(function(){
		var hash=window.location.hash || "#site";
		if(hash){
			var lis=$("#nav_lis>li"),
				divs=$("#nav_uls>div");
			lis.each(function(index, v) {
				if(hash == v.getAttribute("data-hash")){
					v.className="hover";
					//.var divs = $("#nav_uls>div");
					for(var i=0,ci; ci = divs[i]; i++){
						if(index == ci.getAttribute("data-index")){
							$(ci).addClass("show");
						}else{
							$(ci).removeClass("show");
						}
					}
			
				}
			});
		}


	$("#nav_lis").on("mouseover", function(e){
			$(this).find("li").removeClass("hover");
			e.target.className = "hover";
			var index = e.target.getAttribute("data-index");
			//
			var divs = $("#nav_uls>div");
			for(var i=0,ci; ci = divs[i]; i++){
				if(index == ci.getAttribute("data-index")){
					$(ci).addClass("show");
				}else{
					$(ci).removeClass("show");
				}
			}

		});


	});
</script>
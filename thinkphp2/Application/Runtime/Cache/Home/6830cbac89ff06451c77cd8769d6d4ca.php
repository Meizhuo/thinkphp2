<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8" />
<script src="/thinkphp2/Public/Static/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="/thinkphp2/Public/Css/user.css"/>
<script>
$(function(){
	$('#toLogin').click(function(){
		//var $username=$('#username').val();
		//var $userpwd=$('#userpwd').val();
		var form_attr =$('#login_form').serialize();
		var $action =$('#login_form').attr('action');
		$.post($action,form_attr,function(data){
			//console.log(data);
			$('#loginInfo').html(data.info);//data.info在页面提示信息
		});
	})
})
</script>
</head>
<body>
<div id="loginInfo"></div>
<header>
<div id="header" class="head-box">
 <div class="logo">
 <img src="/thinkphp2/Public/Img/cat.jpg" />
 </div>
 <div class="title">Welcome<span>手办网</span></div>
</div>
</header>

<form action="<?php echo U('Home/User/login');?>" method="post" id="login_form"> 
<table>
<tr>
<td>用户名:</td><td><input id="username" type="text" name="username"/></td>
</tr>
<tr>
<td>密码:</td><td><input id="password" type="password" name="password" /></td>
</tr>
<tr>
<td colspan="2"><input type="checkbox"  name="keep" value="yes">在电脑上记住用户名
</td>
</tr>
<tr>
<td><input id="toLogin" type="button" value="确定登录" /></td>
<td><input type="reset" value="重新填写"  /></td>
</tr>
</table>
</form>

<footer>
<div class="foot-box">
  <div class="foot-text">BY MenKwan</div>
  <div class="foot-img"></div>
</div>

</footer>
</body>
</html>
<?php
	//register.php
	if(@$_POST['act']=="register"){
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$arr = Array();
		$arr[] = $username;//PHP数组的下标不写，系统会自动生成
		$arr[] = $password;
		$arr[] = $phone;

		$_SESSION['users'][] = $arr;//把单个用户用一个数组保存

		echo"
			<script>
				alert('注册成功，请登录！');
				window.location.href='login.php';
			</script>
		";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>注册页面</h1>
	<span>如果已经有账号，请<a href="login.php">登录</a>！</span>
	<form action="register.php" method="post">
		<p>用户名：<input type="text" name="username"></p>
		<p>密码：<input type="password" name="password"></p>
		<p>手机号：<input type="text" name="phone"></p>
		<input type="hidden" name="act" value="register">      <!-- 用于做事件的验证 -->
		<input type="submit" value="注册">
	</form>
</body>
</html>
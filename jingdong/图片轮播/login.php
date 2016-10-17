<?php
	//login.php
	if(@$_POST['act']=="login"){
		$username = $_POST['username'];
		$password = $_POST['password'];
		session_start();
		$i=0;
		foreach ($_SESSION['users'] as $key => $value) {
			if($value[0]==$username && $value[1]==$password){
				$i++;
			}
		}
		if($i>0){
			$_SESSION['isLogin']="yes";
			echo"
			<script>
				alert('登录成功！');
				window.location.href='index.php';
			</script>
		";
		}else{
			$_SESSION['isLogin']="no";
			echo"
			<script>
				alert('用户密码错误，请重新登录');
				window.location.href='login.php';
			</script>
		";
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>登录页面</h1>
	<span>如果没有账号，请<a href="register.php">注册</a>!</span>
	<form action="login.php" method="post">
	<p>用户名：<input type="text" name="username" /></p>
	<p>密码：<input type="password" name="password" /></p>
	<input type="hidden" name="act" value="login" />
	<input type="submit" value="登录">
	</form>
</body>
</html>
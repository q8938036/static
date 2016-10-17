<?php
	session_start();//开始SESSION(PHP中保存数据的一个超级全局变量)
	if(@$_SESSION['isLogin']!="yes"){
		echo"
			<script>
				alert('您没有登录，请登录！');
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
	<p>欢迎来到本网站！！！</p>
</body>
</html>
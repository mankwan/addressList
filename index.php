<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Address List</title>
</head>

<body>
<h1>通讯录</h1>
<h2>用户登录</h2>
<form action="loginProcessNew.php" method="post"> 
<table>
<tr>
<td>用户名:</td><td><input type="text" name="id"/></td>
</tr>
<tr>
<td>密码:</td><td><input type="password" name="password" /><br /></td>
</tr>
<tr>
<td><input type="submit" value="确定登录" /></td>
<td><input type="reset" value="重新登录" /></td>
</tr>
</form>
</table>

<?php
if(!empty($_GET['error'])){
	$error=$_GET['error'];
	if($error==1){
		echo "<font color='red'>你的用户名或者密码错误</font>";
	}
}
?>

</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$name=$_GET['name'];
echo "欢迎".$name."登陆成功";
echo "<br><a href='index.php'>返回重新登录<br>";
require_once 'common.php';
getLastTime();
?>

<h1>主界面</h1>
<a href="peoplesListNew.php">管理用户</a><br />
<a href="addPeo.php">添加用户</a><br />
<a href="#">查询用户</a><br />
<a href="#">退出系统</a><br />
</body>
</html>
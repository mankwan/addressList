<?php
require_once 'AdminService.class.php';
$id=$_POST['id'];
$password=$_POST['password'];
$adminService=new AdminService();//实例化一个AdminServive方法
$name=$adminService->checkAdmin($id,$password);
if($name){//如果核对正确则跳转到manage.php 页面
	header("Location:manage.php?name=$name");
	exit();
}else{
	header("Location:index.php?error=1");
	exit();
}


?>
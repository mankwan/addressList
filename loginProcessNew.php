<?php
require_once 'AdminService.class.php';
$id=$_POST['id'];
$password=$_POST['password'];

if(empty($_POST['keep'])){//保存cookie的用户名
	if(!empty($_POST['id'])){//以前有保存就不用再保存了
	setcookie("id",$id,time()-100);//不保存
	}
	
}else{
	setcookie("id",$id,time()+7*2*24*2600);//保存2个星期
}


$adminService=new AdminService();//实例化一个AdminServive方法
$name=$adminService->checkAdmin($id,$password);
if($name){//如果核对正确则跳转到manage.php 页面
	header("Location:manage.php?name=$name");
	
}else{
	header("Location:index.php?error=1");
	exit();
}

?>
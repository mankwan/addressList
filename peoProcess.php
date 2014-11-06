<?php
//接受用户删除的id
//创建peoService对象
require_once 'peoService.class.php';
$peoService= new peoService();
/*
if(!empty($_GET['flag'])){
	$id=$_GET['id'];
	if($peoService->delPeoById($id)==1){
		header("Location:ok.php");
		exit();
	}else{
		header("Location:error.php");
		exit();
	}
}
*/
if(!empty($_REQUEST['flag'])){
	$flag=$_REQUEST['flag'];
	if($flag=="del"){
		$id=$_REQUEST['id'];
		if($peoService->delPeoById($id)==1){
			header("Location:ok.php");
		    exit();
	    }else{
		    header("Location:error.php");
		     exit();
		}
	}else if ($flag=="addPeo"){
		$name=$_POST['name'];
		$class=$_POST['class'];
		$phoneNum=$_POST['phoneNum'];
		$college=$_POST['college'];
		$team=$_POST['team'];
		$res=$peoService->addPeo($name,$class,$phoneNum,$college,$team);
		if($res==1){
			header("Location:ok.php");
			exit();
		}else{
			 header("Location:error.php");
		     exit();
		}
		
	}
}

?>
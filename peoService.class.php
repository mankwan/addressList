<?php
require_once 'SqlHelper.class.php';
mysql_query("set names utf8");

class peoService{
  function getPageCount($pageSize){//计算共有多少页
	$sql="select count(id) from peoples";
    $sqlHelper =new SqlHelper();
	$res=$sqlHelper->execute_dql($sql);
	if($row=mysql_fetch_row($res)){//_row取的是行，r如果是_assoc取的是列
		$pageCount=ceil($row[0]/$pageSize);
	}
	mysql_free_result($res);
	$sqlHelper->close_connect();
	return $pageCount;
  }
  function getPeoListByPage($pageNow,$pageSize){//显示人员列表
	  $sql="select * from peoples limit ".($pageNow-1)*$pageSize.",$pageSize";
	  $sqlHelper= new SqlHelper();
	  $res=$sqlHelper->execute_dql($sql);	  
	  //$sqlHelper->close_connect();
	  return $res;
  }
  function getFenyePage($fenyePage){
	  $sqlHelper= new SqlHelper();
	  //$sqlHelper->execute_dql_fenye();
	  $sql1="select * from peoples limit ".($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize;
	  $sql2="select count(id) from peoples";;
	  $sqlHelper->execute_dql_fenye($sql1,$sql2,$fenyePage);
	  $sqlHelper->close_connect();
  }
  function delPeoById($id){
	 $sql="delete from peoples where id='$id'";
	 $sqlHelper= new SqlHelper();
	 return $sqlHelper->execute_dml($sql); 
  }
  function addPeo($name,$class,$phoneNum,$college,$team){
	  $sql="insert into peoples (name,class,phoneNum,college,team) values('$name',$class, $phoneNum, '$college' ,'$team')";
	  $sqlHelper= new SqlHelper();
	  $res=$sqlHelper->execute_dml($sql);
	  $sqlHelper->close_connect();
	  return $res;
  }
  function getPeoById($id){
	 $sql="select * from peoples where id='$id'";
	 $sqlHelper=new SqlHelper();
	 $arr=$sqlHelper->execute_dql2($sql);
	 $sqlHelper->close_connect();
	 return $arr;
  }
  function updatePeo($id,$name,$class,$phoneNum,$college,$team){
	 $sql="update peoples set name='$name',class=$class,phoneNum=$phoneNum,college='$college',team='$team' where id='$id'";
	 $sqlHelper=new SqlHelper();
	 $res=$sqlHelper->execute_dml($sql);
	 $sqlHelper->close_connect();
	 return $res; 
  }
  
}
?>
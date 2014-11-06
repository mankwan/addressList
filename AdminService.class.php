<?php
require_once 'SqlHelper.class.php';//引用sql工具
class AdminService{
	 public function checkAdmin($id,$password){
		 $sql="select password,name from admin where id_ad='$id'";
		 $sqlHelper=new SqlHelper();//创建SqlHelper对象
		 $res=$sqlHelper->execute_dql($sql);
		 if($row=mysql_fetch_assoc($res)){
			 if(md5($password)==$row['password']){
				 return $row['name'];
			 }
		 }
		 mysql_free_result($res);
		 $sqlHelper->close_connect();
		 return false;
	 }
 }
?>
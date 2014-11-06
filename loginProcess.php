<?php
$id=$_POST['id'];
$password=$_POST['password'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die('could not connect:'.mysql_error());
}
mysql_select_db("address_list",$con) or die(mysql_error());
$sql="select * from admin where id_ad='$id'";
$res=mysql_query($sql,$con);
while($row = mysql_fetch_array($res)){
	if(md5($password)==$row['password']){
		$name=$row['name'];
		header("Location:manage.php? name=$name");
		exit();
	}
	
}
header("Location:index.php?error=1");
mysql_free_result($res);
mysql_close($con);

/*
if($id=="zhou"&&$password=="111"){
	header("Location:manage.php");
	exit();
}else{
	header("Location:index.php?error=1");
	exit();
}
*/
?>
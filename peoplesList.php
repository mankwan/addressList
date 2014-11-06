<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>通讯录列表</title>
</head>
<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die('couldn not connect:'.mysql_error());
}

mysql_select_db("address_list");
mysql_query("set names utf8");
//$sql="select * from peoples";
//$res=mysql_query($sql,$con);


$pageSize=3;
$rowCount=0;
$pageNow=1;

if(!empty($_GET['pageNow'])){
	$pageNow=$_GET['pageNow'];
}

$sql="select count(id) from peoples";//计算有多少行
$res1=mysql_query($sql);
if($row=mysql_fetch_row($res1)){//取出行数
	$rowCount=$row[0];
}
$pageCount=ceil($rowCount/$pageSize);//计算有多少页
$sql="select * from peoples limit ".($pageNow-1)*$pageSize.",$pageSize";//把数据表分页
$res2=mysql_query($sql,$con);

echo "<table border='1' bordercolor='#990000' width='700px'>";
echo "<tr><th>id</th><th>name</th><th>class</th><th>phoneNum</th><th>college</th><th>team</th><th>correct</th><th>delete</th></tr>";
while ($row=mysql_fetch_assoc($res2)){
	echo "<tr>
	<td>{$row['id']}</td>
	<td>{$row['name']}</td>
	<td>{$row['class']}</td>
	<td>{$row['phoneNum']}</td>
	<td>{$row['college']}</td>
	<td>{$row['team']}</td>
	<td><a href='#'>correct</a></td>
	<td><a href='#'>delete</a></td>
	</tr>";
}
echo "<h1>通讯录</h1>";
echo "</table>";


if($pageNow>1){
	$prePage=$pageNow-1;
	echo "<a href='peoplesList.php?pageNow=$prePage'>上一页</a>&nbsp";
}
if($pageNow<$pageCount){
	$nextPage=$pageNow+1;
	echo "<a href='peoplesList.php?pageNow=$nextPage'>下一页</a>&nbsp";
}
echo "<a href='peoplesList.php?pageNow=1'><<</a>&nbsp;&nbsp;";
for($i=1;$i<=$pageCount;$i++){//页数超链接
	echo "<a href='peoplesList.php?pageNow=$i'>$i</a>&nbsp;";
}
echo "<a href='peoplesList.php?pageNow=$pageCount'>>></a>&nbsp;&nbsp;";
echo "当前页是第{$pageNow}页/共{$pageCount}页";
echo "<br/><br/>";
?>

<form action="peoplesList" method="post">
跳转到：<input type="text" name="pageNow">;
<input type="submit" value="GO">;
</form>

<?php
mysql_free_result($res1);
mysql_free_result($res2);
mysql_close($con);
?>

</html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>通讯录列表</title>
<script type="text/javascript">

</script>
</head>
<?php

mysql_query("set names utf8");
require_once 'FenyePage.class.php';//调用分页操作
$fenyePage= new FenyePage();
$fenyePage->pageNow=1;
$fenyePage->pageSize=3;
if(!empty($_GET['pageNow']
)){
	$fenyePage->pageNow=$_GET['pageNow'];
}
require_once 'peoService.class.php';
$peoService= new peoService();//创建peoService
$peoService->getPeoListByPage($fenyePage->pageNow,$fenyePage->pageSize);
$peoService->getFenyePage($fenyePage);
/*
$pageCount=$peoService->getPageCount($pageSize);//调用getPageCount 获取共几页
//$pageCount=4;
$res2=$peoService->getPeoListByPage($pageNow,$pageSize);//调用getPeoLIstBYPage 获取列表 
*/
echo "<table border='1' bordercolor='#990000' width='700px'>";
echo "<tr><th>id</th><th>name</th><th>class</th><th>phoneNum</th><th>college</th><th>team</th><th>correct</th><th>delete</th></tr>";
mysql_query("set names utf8");	
for($i=0;$i<count($fenyePage->res_array);$i++){
	$row=$fenyePage->res_array[$i];
	echo "<tr>
	<td>{$row['id']}</td>
	<td>{$row['name']}</td>
	<td>{$row['class']}</td>
	<td>{$row['phoneNum']}</td>
	<td>{$row['college']}</td>
	<td>{$row['team']}</td>
	<td><a href='updatePeoUI.php?id={$row['id']}'>correct</a></td>
	<td><a onclick='return confirmDele{$row['id']}' href='peoProcess.php?flag=del&id={$row['id']}'>delete</a></td>
	</tr>";
}
echo "<h1>通讯录</h1>";
echo "</table>";

//显示上下页
echo $fenyePage->navigate;


echo "<a href='peoplesListNew.php?pageNow=1'><<</a>&nbsp;&nbsp;";
for($i=1;$i<=$fenyePage->pageCount;$i++){//页数超链接
	echo "<a href='peoplesListNew.php?pageNow=$i'>$i</a>&nbsp;";
}
echo "<a href='peoplesListNew.php?pageNow=$fenyePage->pageCount'>>></a>&nbsp;&nbsp;";
echo "当前页是第{$fenyePage->pageNow}页/共{$fenyePage->pageCount}页";
echo "<br/><br/>";
?>

<form action="peoplesList" method="post">
跳转到：<input type="text" name="pageNow">;
<input type="submit" value="GO">;
</form>

<?php
/*
mysql_free_result($res1);
mysql_free_result($res2);
mysql_close($con);
*/
?>

</html>
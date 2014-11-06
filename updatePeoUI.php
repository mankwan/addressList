<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require_once 'peoService.class.php';
$id=$_GET['id'];
$peoService= new PeoService();
$arr=$peoService->getPeoById($id);

?>
<h1>修改成员</h1>
<form action="peoProcess.php" method="post">
<table>
<tr><td>姓名：</td><td><input type="text" name="name" value="<?php echo $arr[0]['name']?>"></td></tr>
<tr><td>班级：</td><td><input type="text" name="class" value="<?php echo $arr[0]['class']?>"></td></tr>
<tr><td>电话：</td><td><input type="text" name="phoneNum" value="<?php echo $arr[0]['phoneNum']?>"></td></tr>
<tr><td>专业：</td><td><input type="text" name="college" value="<?php echo $arr[0]['college']?>"></td></tr>
<tr><td>组名：</td><td><input type="text" name="team" value="<?php echo $arr[0]['team']?>"></td></tr>
<input type="hidden" name="flag" value="updatePeoUI">
<tr>
<td><input type="submit" value="修改成员"></td>
<td><input type="reset" value="重新填写"></td>
</tr>
<table>
</form>
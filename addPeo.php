<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>添加成员</h1>
<form action="peoProcess.php" method="post">
<table>
<tr><td>姓名：</td><td><input type="text" name="name"></td></tr>
<tr><td>班级：</td><td><input type="text" name="class"></td></tr>
<tr><td>电话：</td><td><input type="text" name="phoneNum"></td></tr>
<tr><td>专业：</td><td><input type="text" name="college"></td></tr>
<tr><td>组名：</td><td><input type="text" name="team"></td></tr>
<input type="hidden" name="flag" value="addPeo">
<tr>
<td><input type="submit" value="添加成员"></td>
<td><input type="reset" value="重新填写"></td>
</tr>
<table>
</form>
</body>
</html>
<?php
secsion_start();
//
$user_ok="user01";
$password_ok="pass01";
//
$id = "";
if (isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
}
$password ="";
if (isset($_REQUEST["password"])){
    $password=$_REQUEST["password"];
}
if(($id ===$id_ok) and ($password ===$password_ok)){
    $_SESSON["id"] =$id;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ccmc-04</title>
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />
</head>
<body>
	<h1>簡単なユーザ認証</h1>
	<?php if () { ?>
	<p>ようこそ、<? =$id ?> さん</p>
	<form action="login.html" method="get">
		<table>
			<tr>
				<th>ユーザID</th>
				<td><input type="text" name="id" /></td>
			</tr>
			<tr>
				<th>パスワード</th>
				<td><input type="text" name="password" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="ログイン" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
include("login.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Notepad - Главная страница</title>
<link type="text/css" rel="StyleSheet" href="_st/my.css" />
</head>
<body class="body_bg">
<div id="outer">
<div id="container">
<div id="title">
<h2><a href="index.php">Notes</a></h2><a href="reg.php">Зарегистрироваться</a>
</div></a>
</div>
<div id="content">
<form method="POST" action="index.php">
					<fieldset id="formlogin">
					<legend>Вход в систему</legend>
						<div id="login">
						<br><input type="text" name="login">
						<br><input type="password" name="pass" >
						<br><input type="submit" name="button_start" value="Войти">
						</div>
					</fieldset>
				</form>
<br clear="all" />
</div>

<div id="footer-holder">
<div class="footer">
 <!-- <copy> -->Copyright Kirill Afendi &copy; 2016<!-- </copy> --><br />
</div>
</div>
</div>
</body>
</html>


<html>
<head>
	<meta charset="utf-8">
	<title>Welcom</title>
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
		<div id="box1">
		<input type="submit" id="button_start" value="Sign In" href="login.php">
		</div>
			<?php
				include("bd.php");
				if(isset($_POST["but"])){
				$first_name=$_POST["first_name"];
				$second_name=$_POST["second_name"];
				$login=$_POST["login"];
				$email=$_POST["email"];
				$pass=$_POST["pass"];
				$repass=$_POST["repass"];
				$result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
				$myrow = mysql_fetch_array($result);
				if (!empty($myrow['id'])) {
					echo ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
				}else{
					if($pass==$repass){
						$pass=md5($pass);
						$req = mysql_query("INSERT INTO `users`(`id`, `first_name`, `second_name`, `login`, `email`, `password`, `name_table`) VALUES ('','$first_name','$second_name','$login','$email','$pass','$login')") or mysql_error();
					}else{
						echo "Пароли не совпадают.";
					}
				}
										}
				mysql_close($db) or mysql_error();
				//header("Location: check.php"); exit();
			?>
		<h3>Регистрация пользователя</h3>
		<p>Все поля должны быть заполнены.</p>
			<form action="reg.php" method="post" name="form1"> 
				<fieldset class="fiel">
				<legend>Имя и Фамилия</legend>
				<br>Имя: <input style="" type="text" name="first_name">
				Фамилия: <input style="" type="text" name="second_name">
				</fieldset>
				<fieldset class="fiel">
				<legend>Логин</legend>
				<br>Логин: <input type="text" name="login">
				</fieldset>
				<fieldset class="fiel">
				<legend>Почта</legend>
				Введите правильный адрес электронной почты.
				<br>Email: <input type="text" name="email">
				</fieldset>
				<fieldset class="fiel">
				<legend>Пароль</legend>
				Введите свой пароль. Внимание! Пароль чувствителен к регистру букв.
				<br>Пароль:           <input type="password" name="pass">
				<br>Повторите пароль: <input type="password" name="repass">
				</fieldset>
				<fieldset class="fiel">
				<legend>Вы не робот?</legend>
				<br>Код с картики: <input type="text" name="code">
				</fieldset>
				<center><input type="submit" name="but" value="Зарегистрироваться"></center>
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

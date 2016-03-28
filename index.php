<?php
include("login.php");

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcom</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
	<body>
		
		
		<div id="content">
			<div id="Text">
			Дневни́к — совокупность фрагментарных записей, которые делаются для себя, ведутся регулярно и чаще всего сопровождаются указанием даты.
			Такие записи («записки») организуют индивидуальный опыт и как письменный жанр сопровождают становление индивидуальности в культуре, формирование «я» — параллельно с ними развиваются формы мемуаристики и автобиографии.
			</div>
			<div id="box1">
			<form method="POST" action="index.php">
			<fieldset>
			<legend>Вход в систему</legend>
			<br><input type="text" name="login">
			<br><input type="password" name="pass">
			<br><input type="submit" name="button_start" value="Войти">
			<a href="reg.php"><input type="submit" id="buttona_start" value="Зарегистрироваться"></a>
			</fieldset>
			</form>
			</div>
		</div>
		
	</body>
</html>

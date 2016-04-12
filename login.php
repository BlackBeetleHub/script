<?php
	function generateCode($length=6) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
		$code = "";
		$clen = strlen($chars) - 1;  
		while (strlen($code) < $length) {
				$code .= $chars[mt_rand(0,$clen)];  
		}
		return $code;
	}
	
$db = mysql_connect("localhost", "root", "");

mysql_select_db("Test");

if(isset($_POST["button_start"])){
	$login=$_POST['login'];
	$querty =mysql_query("SELECT id, password FROM users WHERE login='$login'",$db);
	$data = mysql_fetch_array($querty);
		if($data['password']==md5($_POST['pass'])){
			$hash =md5(generateCode(10));
			mysql_query("UPDATE users SET hash='".$hash."' WHERE id='".$data['id']."'",$db);
			setcookie("id",$data['id'],time()+60*60*24*30);
			setcookie("hash", $hash, time()+60*60*24*30);
			header("Location: keeper.php"); exit();
		}else{

			print "Вы ввели неправильный логин/пароль";

			}
}

?>



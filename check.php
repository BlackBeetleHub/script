<?
include("bd.php");

if(isset($_COOKIE['id']) && isset($_COOKIE['hash'])){
	$query = mysql_query("SELECT * FROM users WHERE id='".$_COOKIE['id']."'",$db);
	$my_arr = mysql_fetch_array($query);
}else{
	header("Location: index.php");
}
?>
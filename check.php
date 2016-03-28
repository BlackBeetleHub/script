<?
include("bd.php");
if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])){
	echo "OK";
}
?>
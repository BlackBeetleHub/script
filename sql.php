<?
include("bd.php");
if ($_POST['fun']=='delete') {
    $id_u = $_POST['id_user'];
    $title = $_POST['title'];
    mysql_query('DELETE FROM Notes WHERE title="'.$title.'" && id_user="'.$id_u.'"');

}

if ($_POST['fun']=='add') {
	$id_u =  $_POST['id_user'];
	$title = $_POST['title'];
	$textb = $_POST['text'];
	$aa = false;
   mysql_query('INSERT INTO `Notes`(`id`, `id_user`, `title`, `text`) VALUES ("","'.$id_u.'","'.$title.'","'.$textb.'")') or $aa=true;
   if($aa == true){
   	echo "fail ".$id_u;
   }else{
   	echo "true".$id_u;
   }
}

if($_POST['fun']=="select"){
	$id_u =  $_POST['id_user'];
	$ch = false;
    $arr = mysql_query('SELECT * FROM `Notes` WHERE id_user=1') or $ch=true;
    if($ch==true){
    	//echo "fail";
    }else{
    	//echo "Succsess";
    }
    $myarr = mysql_fetch_assoc($arr);
    echo "data";
}
mysql_close();
?>
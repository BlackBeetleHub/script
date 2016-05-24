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
	$i = $_POST['i'];
   // $arr = mysql_query('SELECT * FROM `Notes` WHERE id_user=1') or $ch=true;
    if($ch==true){
    	//echo "fail";
    }else{
    	//echo "Succsess";
    }
    $result = mysql_query('SELECT * FROM `Notes` WHERE id_user='.$_COOKIE['id'].'');
			
			$arr = array();
            while($date_array = mysql_fetch_array ($result)) {
            $arr[] = json_encode($date_array);
            }
           // print_r($arr);
    //$myarr = array($a, $b, $c); //= mysql_fetch_assoc($arr);
    /*1
    $res = array();
    while($a == mysql_fetch_assoc($arr) && $i!=0){
     	$res[] = json_encode(mysql_fetch_assoc($arr));
    }
    */
    echo json_encode($arr);
}

if ($_POST['fun']=='update') {
	$id_u =  $_POST['id_user'];
	$oldtitle = $_POST['oldtitle'];
	$oldtextb = $_POST['oldtext'];
	$newtitle = $_POST['newtitle'];
	$newtextb = $_POST['newtext'];
	$aa = false;
   mysql_query('UPDATE `Notes` SET `title`="'.$newtitle.'", `text`="'.$newtextb.'" WHERE title="'.$oldtitle.'" && id_user="'.$id_u.'"') or $aa=true;
	// mysql_query('UPDATE `Notes``title`="rER", `text`="rererer" WHERE title="'.$oldtitle.'" && id_user="'.$id_u.'"")') or $aa=true;
   if($aa == true){
   	echo "fail ".$id_u;
   }else{
   	echo "true".$id_u;
   }
}



mysql_close();
?>
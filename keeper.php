<?
include("check.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<script src="/js/jquery.js"></script>
	<script src="/js/keeper_test.js" defer ></script>
	<title>Welcom</title>
	<link rel="stylesheet" type="text/css" href="_st/my.css">
</head>
<body class="body_bg">
<div id="outer">
<div id="container">
<div id="title">
<h2><a href="index.php">Notes</a></h2>
<input type="submit" id="exit" value="Log Out"></input>
</div>
</div>
<div id="content">
	<div id="AddForm">
		<div id="add">
				<textarea id="BlockTitle" type="text"></textarea>
				<input id="BlockBut" type="submit" value="Добавить"></input>	
				<br><textarea  id="BlockText"></textarea></input>	
		</div>
	</div>
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

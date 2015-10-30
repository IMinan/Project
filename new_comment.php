<?php include 'header.php'; ?>

<?php 

	$new_comment = $_POST['comment'];

	$sql = "insert into article(comment, comment_nick) values ('". $new_comment ."', '". $nick ."')";

	if (mysql_query($sql)) {
		header('location: /Project/');
	}else{

	}
	

 ?>
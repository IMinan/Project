<?php include 'header.php'; ?>
<?php 
	$link = $_POST['link'];
	$smash_head = '@<h1 itemprop="name">(.*?)</h1>@si';
	$smash_text = '@<div class="single-car-content" itemprop="description">(.*?)</div>@si';
	$search = file_get_contents($link);

	preg_match_all($smash_head, $search, $head_array);
	preg_match_all($smash_text, $search, $text_array);


	$head = $head_array[0][0];
	$text = $text_array[0][0];
	$tag = $_POST['tag'];
	$view_nick = $_POST['view_nick'];


	?>

	<?php 

	if (!$head) {
		echo "<div class='error'>URL Boş Bırakılamaz</div>";
	}else{
		$text = mysql_real_escape_string($text);
		$sql = mysql_query("insert into article(head, text, tag, nick, view_nick) values ('". $head ."', '". $text ."', '". $tag ."', '". $nick ."', '". $view_nick ."')");

	echo "<div class='success'>Yeni Konu Eklendi</div>";
		header("Refresh: 2; /Project/");
	}
?>
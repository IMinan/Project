<?php include 'header.php'; ?>
	<div class="container">
		<div class="row">
		<?php 

		$head = $_POST['head'];
		$text = $_POST['text'];
		$tag = $_POST['tag'];
		$view_nick = $_POST['view_nick'];
		
		if (!$head) {
			
		}else{
			$sql = "insert into article(head, text, tag, nick, view_nick) values ('". $head ."', '". $text ."', '". $tag ."', '". $nick ."', '". $view_nick ."')";
			if (mysql_query($sql)) {
				echo "<div class='success'>Yeni Konu Eklendi</div>";
				header("Refresh: 2; /Project/");
			}
		}
		?>
			<div class="new-article">
				<h3>Yeni Yazı Ekle</h3>
				<form action="/Project/new-article.php" method="post">
					<input name="head" type="text" class="height40px form-control" placeholder="Yazının Başlığını Girin">
					<textarea name="text" class="form-control" rows="18"></textarea>
					 <label for="exampleInput">Etiket</label>
					<input name="tag" type="text" class="width25 form-control" placeholder="Etiket ekle">
					 <label for="exampleInput">Sadece yazılan kullanıcı görsün</label>
					 <input name="view_nick" type="text" class="width25 form-control" placeholder="nick">
					<input type="submit" class="btn btn-primary" value="Yayımla">
				</form>
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>
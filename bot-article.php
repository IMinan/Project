<?php include 'header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="new-article">
				<h3>Yeni Yazı Ekle</h3>
				<form action="/Project/bot-article-action.php" method="post">
					<input name="link" type="text" class="height40px form-control" placeholder="LİNK">
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
<?php include 'header.php'; ?>
	<div class="container">
		<div class="row">
			<?php 
				if ($nick == '') {
					echo "<div class='text-center'><div class='error'>Bu Sayfayı görebilmek için Üye olmanız gerekiyor</div><br><a href='register.php' class='text-center btn btn-info'>Üye ol!</a> <a href='login.php' class='text-center btn btn-primary'>Giriş Yap!</a></div>";
				}else{

			 ?>
			<div class="profile-article">
				<?php 


					if (isset($_GET['nick'])) {
						$article_nick = $_GET['nick'];

						$profile = mysql_query("SELECT * FROM article WHERE nick='". $article_nick ."' ORDER BY id DESC");
						echo '<center><h2>'. $article_nick .'</h2></center>';

						while ($row = mysql_fetch_array($profile)) {
							$head = $row['head'];
							$text = $row['text'];
							$id = $row['id'];
							echo '<div class="drop"><span id="'. $id .'">'. $head .'</span><a href="#" class="plus pull-right"><i class="fa fa-plus"></i></a><a href="#" class="minus pull-right"><i class="fa fa-minus"></i></a>';
						 	echo '<div id="'. $id .'" class="profile-article-text">'. $text .'</div></div>';
							}
					}else{
						echo "get içerisinde nick yok";
					}
				?>
			</div>

			<?php } ?>
		</div>
	</div>
<?php include 'footer.php'; ?>
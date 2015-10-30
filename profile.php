 <?php include 'header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="profile col-md-12">
				<div class="profile-info col-md-12">
					<?php 
						if ($nick == '') {
							echo "<div class='text-center'><div class='error'>Bu Sayfayı görebilmek için Üye olmanız gerekiyor</div><br><a href='register.php' class='text-center btn btn-info'>Üye ol!</a> <a href='login.php' class='text-center btn btn-primary'>Giriş Yap!</a></div>";
						}else{

							/* Else başlangıç */
					 ?>
					<div class="profile-nick"><?php echo $nick; ?></div>
					<div class="profile-history">
						<p><?php echo $email; ?></p>
					</div>
					<div class="profile-rank"> <?php echo $authority; ?></div>
				</div>
				<div class="clear"></div>
				<div class="profile-article">
					<?php 
						$article = mysql_query("select * from article  where nick='". $nick ."' ORDER BY id DESC");

						while ($row = mysql_fetch_array($article)) {
							$id = $row['id'];
							$head = $row['head'];
							$article_nick = $row['nick'];
							$text = $row['text'];
							$tag = $row['tag'];
							echo '<div class="drop"><span id="'. $id .'">'. $head .'</span><a href="#" class="plus pull-right"><i class="fa fa-plus"></i></a><a href="#" class="minus pull-right"><i class="fa fa-minus"></i></a>';
						 	echo '<div id="'. $id .'" class="profile-article-text">'. $text .'</div></div>';
						}
					?>
				</div>
				<?php /* Else bitiş */ }?>
			</div>
		</div>
	</div>
 <?php include 'footer.php'; ?>
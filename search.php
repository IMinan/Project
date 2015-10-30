<?php include 'header.php'; ?>
	<div class="container">
		<div class="search">
			<form class="search-form" action="search.php" method="get">
				<div class="form-group col-md-5">
					<input name="s" class="col-md-8 form-control" type="text" placeholder='Ara...'>
					<input type="Submit" value="Ara.." class="col-md-2 pull-right btn btn-primary">
				</div>
			</form>
		</div>

		<?php 

			$search_tag = $_GET['s'];

		 ?>
			<div class="clear"></div>
		<div class="search-article">
			<?php 
				$query_article = mysql_query("SELECT * FROM article WHERE tag='".$search_tag."'");
					

					if ($search_tag == '') {
						echo '<div class="clear"></div><div class="error">Arama yapmak için Yukarıdaki kutuyu kullanınız !</div>';
					}elseif($search_tag == ' ' /* buraya ne gelecek* */){
						echo '<div class="clear"></div><div class="error">Arana Etikete göre yazı bulunamadı !</div>';
					}else{
						echo '<div class="clear"></div><div class="success">Yazı Bulundu !</div>';
					}
				while ($row = mysql_fetch_array($query_article)) {
					$id = $row['id'];
					$head = $row['head'];
					$article_nick = $row['nick'];
					$text = $row['text'];
					$tag = $row['tag'];
				
				echo '
				<article id="'. $id .'">
					<div class="article-page">
						<div class="article-header"><a href="profiles.php?nick='. $article_nick .'" '. $article_nick .'">'. $article_nick .'</a><h3>'. $head .'</h3></div>

						<div class="article-body">
							<p>'. $text .'</p>
						</div>

						<div class="article-footer">
							<p><a href="search.php?s='. $tag .'">'. $tag .'</a></p>';
							
							if ($article_nick == $nick) {
								echo '<a class="delete" href="/Project/delete.php?delete&id='. $id .'" >Sil</a>';
								
							}

							elseif($nick == "admin"){
								echo '<a class="delete" href="/Project/delete.php?delete&id='. $id .'" >Sil</a>';
							}

							else{
							}

							echo '
						</div>
					</div>
				<article>';

				}
			?>
		</div>
	</div><?php include 'footer.php'; ?>
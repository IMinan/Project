<div class="container">
	<div class="row">
	<?php 
		$query_article = mysql_query("SELECT * FROM article ORDER BY id DESC");
		while ($row = mysql_fetch_array($query_article)) {
			$id = $row['id'];
			$head = $row['head'];
			$article_nick = $row['nick'];
			$text = $row['text'];
			$tag = $row['tag'];
			$view_nick = $row['view_nick'];

			if ($view_nick == '') {
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
							}elseif($nick == "admin"){
								echo '<a class="delete" href="/Project/delete.php?delete&id='. $id .'" >Sil</a>';
							}else{
							}
							echo '
						</div>
					</div>
				<article><div class="clear"></div>';
			}elseif($view_nick == $view_nick){
				if ($view_nick == $nick || $nick == 'admin') {
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
							}elseif($nick == "admin"){
								echo '<a class="delete" href="/Project/delete.php?delete&id='. $id .'" >Sil</a>';
							}else{
							}
							echo '
						</div>
					</div>
				<article><div class="clear"></div>';
				}else{}
			}else{

			}
			
		}
	?>
	</div>
</div>




<?php
		error_reporting(0);
		session_start();
		ob_start();
		if(!isset($_SESSION["login"])){	
			header('location: /Project/login.php');
		}else{
		}



	?>
<header>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="row">
				<div class="navbar-header col-md-4">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				     </button>
					<a href="/Project/" class="navbar-brand">Project</a>
				</div>

				<div class="col-md-8 collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav m-right">
						<li><a href="/Project/">Ana Sayfa</a></li>
						<li><a href="/Project/new-article.php/">Yeni Yazı</a></li>
						<li><a href="/Project/bot-article.php/">Yeni Bot</a></li>
						<li><a href="/Project/message.php">Mesaj</a></li>
						<li><a href="/Project/search.php">Makale Ara</a></li>
						<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hoş Geldiniz <?php echo $nick; ?></a>
							<ul class="dropdown-menu">
								<li><a href="/Project/profile.php">Profili Görüntüle</a></li>
								<li><a href="/Project/register.php">Yeni Kullanıcı</a></li>
								<li><a href="/Project/logout.php">Çıkış</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

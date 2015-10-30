<?php include 'header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="forminput">
				<form method="post">
					<input class="mesaj-input" type="text" name="mesaj" placeholder="">
					
					<input class="message-btn btn btn-primary pull-right" type="submit" value="Gönder">
				</form>
			</div>
			<?php 
				$message = 'minan';
			?>
			<?php if ($nick == $message) {?>
				<script type="text/javascript">
					$(document).ready(function(){
						$('.nick').addClass('my-nick');
					});
				</script>
			<?php } ?>

			<div class="message">
				<h2>Message</h2>

				<ul id="message-islem">
					 <li><span class="nick"><?php echo $message; ?></span><span class="">Message</span></li>
				</ul>
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>
<?php 

	if(isset($_GET['delete'])) // eger GET metodunda delete parametresi var ise
{
	if(isset($_GET['id'])) // eger bir ustteki "delete" parametresi var ise ve post_id var ise
	{
		$id = $_GET['id'];
		$is_post_query = mysql_query("SELECT * FROM article WHERE id='".$id."'");
		if(mysql_num_rows($is_post_query) > 0) // eger kayit sayisi 0'dan buyuk ise silinemk istenen post_id veritabanıda vardir.
		{
			$sil = mysql_query("DELETE FROM article WHERE id='". $id ."' ");
			if(mysql_affected_rows() > 0) // bir yukarida silme islemi yapildigi icin mysql_affected_rows ile veritbanında kac tane degisiklik yapilmis
			{
				echo "<div class='success'>İşleminiz  başarı ile geçekleşti</div>";
				header('location: /Project');

			}
			else{
				echo "<div class='error'>Silme işlemiz başarısız</div>";
			}
		}
		else
		{
			echo '<div class="error">Silmek istediğiniz mesaj veritabanında bulunamadı. Muhtemelen daha önceden silinmiş olabilir.</div>';
		}
	}
	else
	{
		echo '<div class="error">Lütfen silmek istediğiniz mesaj ID numarasını belirtiniz.</div>';
	}
}
else
{
	exit('<div class="error">gecersiz sayfa girisi</div>');
}


 ?>
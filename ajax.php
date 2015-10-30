<?php include 'header.php'; ?>

<?php 

	header('Refresh:2; /project/ajax.php');


 ?>

	 <?php 
 		$query = mysql_query("SELECT * FROM message ORDER BY id DESC");
 		while ($row = mysql_fetch_array($query)) {
 			$array['veriler'] = "<li id='". $row['id'] ."'><span>". $row['nick'] ."</span> ". $row['mess'] ."</li>";
 		}

 		$array['hata'] = 'hata '

 		echo json_encode($array);

 	?>
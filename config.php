<?php 
	
	$connect = mysql_connect('localhost', 'root', '') or die (mysql_error());
	mysql_select_db('Project',$connect) or die (mysql_error());

	mysql_query('SET CHARACTER utf-8');
	mysql_query('SET NAMES utf-8');
?>
<?php
	session_start();
	ob_start();
	session_destroy();
	header("location: /Project");
	ob_end_flush();
?>
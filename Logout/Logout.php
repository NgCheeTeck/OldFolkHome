<?php 
	
	session_start();
	
	session_unset();
	
	session_destroy(); 
		
	echo '<script> alert  ("Going back to mainpage in 5 seconds.")</script>';
	header("refresh:0; url=http://localhost/OldFolkHome/MainPage/Mainpage.php");

?>
<?php
 if (isset($_POST["login"])) {
	 
	session_start();

	$loginhstr=trim($_POST['loginhs']); 
	$loginhs = htmlentities(htmlspecialchars($loginhstr), ENT_QUOTES);

	if($loginhs=='harussukses') {
		
		$_SESSION['loginhsqu'] = $loginhs;
		
		echo "<script> alert('berhasil');window.location='home'</script>";	
				
	}
	else{
		echo "<script> alert('gagal coba lagi');window.location='javascript:history.go(-1)'</script>";
	}
 }
?>
<?php 
	include('_conn.php');
	include('config/_session.php');
	$id_kuda = $_POST['kuda'];
	//echo "$id_kuda";
	$sql = "CALL sp_belikuda('$login_session','$id_kuda')";
	mysqli_query($connection,$sql);
	header("location: index.php");
	//echo "$id_kuda";
?>
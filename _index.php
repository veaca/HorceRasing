<?php 
	include('_conn.php');
	include('config/_session.php');
	//echo "Hasil  : ".$_GET['res']."<br>";
	//echo "$id_kuda";
	$sql = "CALL sp_tambah_energi('$login_session')";
	mysqli_query($connection,$sql);
	header("location: index.php");
	//echo "$id_kuda";
?>
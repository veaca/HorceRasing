<?php 
	include('_conn.php');
	include('config/_session.php');
	//echo "Hasil  : ".$_GET['res']."<br>";
	$hasil = $_GET['res'];

	//echo "$id_kuda";
	$sql = "CALL sp_bandingscore('$login_session', $hasil)";
	mysqli_query($connection,$sql);
	header("location: index.php");
	//echo "$id_kuda";
?>
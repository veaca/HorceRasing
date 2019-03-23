<?php
    include('config/_session.php');
    $sql="CALL sp_gambar('$login_session')";
    if(mysqli_multi_query($connection,$sql)){
        $pamer=mysqli_store_result($connection);
    }
?>

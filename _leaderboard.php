<?php
    include('config/_session.php');
    $sql="CALL sp_leader()";
    if(mysqli_multi_query($connection,$sql)){
        $lead=mysqli_store_result($connection);
    }
?>

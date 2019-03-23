<?php
    include('_session.php');
    $sql="CALL sp_show('$login_session')";
    if(mysqli_multi_query($connection,$sql)){
        $result=mysqli_store_result($connection);
    }
?>

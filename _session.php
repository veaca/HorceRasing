<?php
    include('_login.php');
    $login_session=$_SESSION['sp_login'];

    if(!isset($login_session)){
        mysqli_close($connection);
        header('Location: login.php');
    }

    if(isset($_SESSION['sp_login_admin'])){
        $login_session_admin=$_SESSION['sp_login_admin'];
    }
?>

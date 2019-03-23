<?php
    include('_conn.php');
    session_start();

    if(isset($_POST['submit'])){
        if(empty($_POST['email']) || empty($_POST['password'])){
            $error = "Silahkan cek kembali data yang anda isikan.";
        }
        else{
            $email=$_POST['email'];
            $password=$_POST['password'];
            $sql="CALL sp_login('$email', '$password')";
            if(mysqli_multi_query($connection,$sql)){
                $result=mysqli_store_result($connection);
                while($row=mysqli_fetch_row($result)){
                    if($row[0] == 0){
                        $error = $row[1];
                        $_SESSION['sp_login']=$email;
                        header("location: index.php");
                    }
                    else if($row[0] == 1){
                        $_SESSION['sp_login_admin']=$email;
                        $_SESSION['sp_login']=$email;
                        header("location: admin.php");
                        $error = $row[1];
                    }
                }
            }
        }
    }
?>

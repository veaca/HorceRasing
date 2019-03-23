<?php
    include('_conn.php');

    if(isset($_POST['submit_register'])){
        if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
            $error="Silahkan cek kembali data yang anda isikan.";
        }
        else{
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            $sql = "CALL sp_daftar('$username', '$email', '$password');";
            if(mysqli_multi_query($connection,$sql)){
                $result=mysqli_store_result($connection);
                while($row=mysqli_fetch_row($result)){
                    if($row[0] == 0){
                        $error = $row[1];
                    }
                    else $error = $row[1];
                }
            }
        }
    }
?>

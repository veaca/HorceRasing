<?php
    include('config/_login.php');

    if(isset($_SESSION['sp_login_admin'])){
        header("location:admin.php");
    } else if(isset($_SESSION['sp_login'])){
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="content">
         <form class="" action="" method="post">
            <table>
                <tr>
                    <td><b>Email</b></td>
                    <td><input type="text" name"email" id="email"/></td>
                </tr>
                <tr>
                    <td><b>password</b></td>
                    <td><input type="password" name"password" id"password"</td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="submit" value="masuk">Login</button></td>
                        <td><a href="register.php">Sign Up Here</a></td>
                        <!-- <input type="submit" name="submit" value="masuk"/>
                        <input type="button" name="submit" value="register" onclick="location.href='register.php';"/> -->
                    </td>
                </tr>
            </table>
        </form>
    </div>
       
    </body>
</html>

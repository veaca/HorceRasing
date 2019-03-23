<?php
    include('_conn.php');
    include('config/_register.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="" method="post">
            <table>
                <tr>
                    <td>username</td>
                    <td><input type="text" name="username" id="username"/></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="text" name="email" id="email"/></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="text" name="password" id="password"/></td>
                </tr>
                <tr>
                    <td>
                        <input type="button" value="login" onclick="location.href='login.php';"/>
                        <input type="submit" value="register" name="submit_register"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

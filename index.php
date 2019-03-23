<?php
    include('config/_displayuser.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <?php while ($row=mysqli_fetch_row($result)){?>
                    <td>
                        <p>Username : <i><?php echo $row[0]; ?></i></p>
                        <p>Uang : <i><?php echo $row[1]; ?></i></p>
                    </td>
                <?php }?>
            </tr>
        </table>
        <table>
            <tr>
                <td><input type="button" name="play" value="play" onclick="location.href='play.php';"/></td>
                <td><input type="button" name="shop" value="shop" onclick="location.href='shop.php';"/></td>
                <td><input type="button" name="tutorial" value="tutorial" onclick="location.href='tutorial.php';"/></td>
                <td><input type="button" name="pamer" value="pamer" onclick="location.href='pamer.php';"/></td>
                <td><input type="button" name="submit" value="logout" onclick="location.href='logout.php';"/></td>

            </tr>
        </table>
    </body>
</html>

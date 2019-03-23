<?php
    include('_leaderboard.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table>
            <h1>LEADERBOARD</h1>
            <?php while ($row=mysqli_fetch_row($lead)){?>
                <tr>
                    <td>
                        <p>Username : <i><?php echo $row[0]; ?> Score : <i><?php echo $row[1]; ?></i></i></p>
                        <!-- //<p>Score : <i><?php echo $row[1]; ?></i></p> -->
                    </td>
                </tr>
            <?php }?>
        </table>
        <button type="button" name="kembali" onclick="location.href='index.php';">back</button>
</body>
</html>
<?php
    include('_pamer.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table>
            <tr>
                <?php while ($row=mysqli_fetch_row($pamer)){?>
                    <td>
                        <p>Nama : <i><?php echo $row[0]; ?></i></p>
                        <p>Ini Kudaku : <img height="200" width="200" src="<?php echo $row[1]; ?>"></p>
                    </td>
                <?php }?>
            </tr>
        </table>
</body>
</html>
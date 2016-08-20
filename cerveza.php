<?php
 		$servername = "localhost";
        $username = "bauldeco_carolin";
        $password = "}rT9ExEXu=Zu";
        $dbname =  "bauldeco_carolinareyes";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error){
            die ("connection failed" . $conn->connect_error);
        }

        $sql = "SELECT * FROM productos";
        $result = $conn->query($sql);

        $conn->close();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cerveza</title>
</head>
<body>

	<table border="1">
	    <?php while($row = $result->fetch_assoc()): ?>
	    <tr>
	        <td><?php echo utf8_encode($row['info']); ?></td>
	        <td><?php echo utf8_encode($row['lista']); ?></td>
	        <td><img src="img/<?php echo $row['img']; ?>"></td>
	    </tr>
	    <?php endwhile; ?>
	</table>

</body>
</html>
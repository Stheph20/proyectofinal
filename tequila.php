<?php
 		$servername = "localhost";
        $username = "bauldeco_carolin";
        $password = "}rT9ExEXu=Zu";
        $dbname =  "bauldeco_carolinareyes";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error){
            die ("connection failed" . $conn->connect_error);
        }

        $sql = "SELECT * FROM tequila";
        $result = $conn->query($sql);

        $conn->close();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cerveza</title>
    <style type="text/css">
        body{background-image: url("img/bello.jpg"); 
        color: #fff; font-family: 'Roboto Condensed', sans-serif; font-size: 25px;}
        .logo{margin: 10px 15px 15px 18em;} 
        tr, td{padding: 10px; margin: 20px;}
    </style>
</head>
<body>

    <img class="logo" width="30%" src="img/alar.png">

	<table border="1">
	    <?php while($row = $result->fetch_assoc()): ?>
	    <tr>
	        <td><?php echo utf8_encode($row['infote']); ?></td>
        </tr>

        <tr>
	        <td><?php echo utf8_encode($row['listte']); ?></td>
        </tr>

        <tr>
	        <td><img src="img/<?php echo $row['imate']; ?>"></td>
	    </tr>
	    <?php endwhile; ?>
	</table>

</body>
</html>
<?php
 		$servername = "localhost";
        $username = "bauldeco_carolin";
        $password = "}rT9ExEXu=Zu";
        $dbname =  "bauldeco_carolinareyes";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error){
            die ("connection failed" . $conn->connect_error);
        }

        $sql = "SELECT * FROM vodka";
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
        .slider{margin:10px 15em; padding: 10px; display: block; float: right;}
        tr, td{padding: 10px; margin: 20px;}
    </style>
</head>
<body>

        <img class="logo" width="30%" src="img/alar.png">

	<table border="1">
	    <?php while($row = $result->fetch_assoc()): ?>
	    <tr>
	        <td><?php echo utf8_encode($row['infovod']); ?></td>
        </tr>

        <tr>
	        <td><?php echo utf8_encode($row['listvod']); ?></td>
        </tr>

        <tr>
	        <td><img src="img/<?php echo $row['imgavod']; ?>"></td>
	    </tr>
	    <?php endwhile; ?>
	</table>

     <div class="slider" style="max-width 900px">
            <img class="foto" src="img/smirnoff.png" style="width:100%">
        </div>

</body>
</html>
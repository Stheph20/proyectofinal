 <?php
    if (isset($_GET['Nombre']) && isset($_GET['Edad']) && isset($_GET['Mail'])){
        
        $usr_nombre = $_GET['Nombre'];
        $usr_edad = $_GET['Edad'];
        $usr_mail = $_GET['Email'];

        $servername = "localhost";
        $username = "bauldeco_carolin";
        $password = "}rT9ExEXu=Zu";
        $dbname =  "bauldeco_carolinareyes";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error){
            die ("connection failed" . $conn->connect_error);
        }

        $sql = "INSERT INTO visitantes (nombre, edad, email)
                    VALUES ('$usr_nombre', '$usr_edad', '$usr_mail')";

                if($conn->query($sql) === TRUE){
                    echo "Ingreso listo";
                }else{
                    echo "Intentalo de nuevo";
                }
                $conn->close();
    } 
  ?>
<html>
    <head>
        
        <meta charset="utf-8">
        <style type="text/css">
        	body{background-image: url("img/bello.jpg");} 
        	.logo{margin: 10px 15px 15px 28em;}
        	input{padding: 5px; margin: 10px 0px 10px 560px;}
        	.mail{margin: 10px 0px 10px 470px; }
        	.enviar{margin:10px 0px 10px 10px;}
        	p{font-family: 'Roboto Condensed', sans-serif; text-align: center; color: #fff;}
        </style>
    </head>
    <body>

    	<img class="logo" width="30%" src="img/alar.png">
     
        <form name="frmPrueba" method="post" action="valida.php" >
            <p>Nombre(*):</p>    <input type="text" name="Nombre" id="uno" />
            
            <p>Edad(*):</p> <input type="text" name="Edad" id="dos" />
            
            <p>Mail:</p> <input class="mail" type="text" name="Email" id="tres" size="50" maxlength="50" /><p/>
           
            <input class="enviar" type="submit" name="Enviar" value="Enviar" />
        </form>
    </body>
</html>
 
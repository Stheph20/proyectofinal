<?php

     $error = array();
     $mensaje = array();
   
     $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
    
    if( !empty($_POST) )
    {
    	echo '<script language="javascript">alert("Tu formulario se envió con éxito");</script>';
        
         if( isset($_POST['Nombre']) && isset($_POST['Edad']) )
        {
             if( empty($_POST['Nombre']) )
                $error[] = "Campo obligatorio";
            else
            {
                 if( preg_match($patron_texto, $_POST['Nombre']) )
                    $mensaje[] = "Bien hecho!".$_POST['Nombre'];
            }
            if( empty($_POST['Edad']) )
                $error[] = "Campo obligatorio";
            {
                if( preg_match($patron_texto, $_POST['Edad']) )
                    $mensaje[] = "Edad: [".$_POST['Edad']."]";
                
            }
            if( (isset($_POST['Email']) ) && (!empty($_POST['Email'])) )
            	
            {

            }
            
        }if( count($error) > 0 )
        {
            echo "<p>Hubo un error</p>";
            
            for( $contador=0; $contador < count($error); $contador++ )
                echo $error[$contador]."<br/>";
        }
        else{
            for( $contador=0; $contador < count($mensaje); $contador++ )
                echo $mensaje[$contador]."<br/>";
        }
    }
    else{
        echo "<p>Hubo un error</p>";
    }
    echo "<p><a href='trabajofinal.html'>Volver a la página principal</a></p>";
?>
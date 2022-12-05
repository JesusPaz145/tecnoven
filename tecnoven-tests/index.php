<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Ejemplo de una web con PHP - aprenderaprogramar.com</title>
<meta charset="utf-8">
</head>
<body>
<p>Agregar Datos a Cliente_Detalle</p>
<form name = "form1" action="cargar.php" method = "post">   
            <div class = "container">    
                <div class = "form_group">    
                    <label>Producto:</label>   
                    <input type = "text" name = "producto" required/>    
                </div>    
                <div class = "form_group">    
                    <label>id_ruleta_resumen:</label>    
                    <input type = "text" name = "id_ruleta_resumen" required />    
                </div>    
                <div class = "form_group">    
                    <label>Ganador:</label>    
                    <input type = "text" name = "ganador" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Perfil:</label>    
                    <input type = "text" name = "perfil" required/>    
                </div> 
                <input type="submit" value="Registrar">   
            </div>    
        </form> 


<?php
/* Aquí vendría el código PHP */
echo 'Hola esta es una instrucción php y debería mostrarse este texto por pantalla';
/* Este código PHP podría ser una consulta a base de datos */
/* Y además podríamos mostrar esos datos */
?>
</body>
</html>
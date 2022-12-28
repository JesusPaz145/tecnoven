<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direcciones</title>
    <script src="js/push.min.js"></script>
    
</head> 
<body>
    <script>
        Push.create("Hola Mundo",{
            body:"Este es el cuerpo de la notificacion",
            icon: "images/logo.png",
            timeout: 5000,
            onClick: function () {
                window.focus();
                this.close();
            }
        });
    </script>
    <h1>Direcciones</h1>
    <?php
    include('mostrar.php');
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="panel_cliente.css" />
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="https://morrisjs.github.io/morris.js/css/morris.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="panel_cliente.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- INICIO MENU -->
    <div class="side-menu">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <div class="brand-wrapper">
                    <div class="brand-name-wrapper">
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
            </div><!-- Main Menu -->
            <div class="side-menu-container">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../Facturas/"><span class="glyphicon glyphicon-list-alt"></span> Facturas</a>
                    </li>
                    <li class="active">
                        <a href="../pago_en_linea/"><span class="glyphicon glyphicon-credit-card"></span> Pagar en
                            Linea</a>
                    </li>
                    <li>
                        <a href="../registrar_pago/"><span class="glyphicon glyphicon-saved"></span> Registrar Pago</a>
                    </li>
                    <li>
                        <a href="../cuenta_numeros/"><span class="glyphicon glyphicon-th-list"></span> Cuentas
                            Bancarias</a>
                    </li><!-- Dropdown-->
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl2">
                            <span class="glyphicon glyphicon-wrench"></span> Soporte <span class="caret"></span>
                        </a> <!-- Dropdown level 1 -->
                        <div class="panel-collapse collapse" id="dropdown-lvl2">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="../grid_mis_tickets">Tickets</a>
                                    </li>
                                </ul>
                                <!-- MENU - SERVICIOS - DROPDOWN -->
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl1"><span class="glyphicon glyphicon-user"></span>
                            Servicio <span class="caret"></span></a> <!-- Dropdown level 1 -->
                        <div class="panel-collapse collapse" id="dropdown-lvl1">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="../grid_portal_alertas_servicio/">Estatus de Nodo</a>
                                    </li>
                                    <li>
                                        <a href="../speedtest/">Speed test</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.panel-collapse collapse -->
                    </li>
                    <!-- PREGUNTAS FRECUENTES -->
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-2vl1"><span
                                class="glyphicon glyphicon-question-sign"></span> Preguntas Frecuentes <span
                                class="caret"></span></a> <!-- Dropdown level 1 -->
                        <div class="panel-collapse collapse" id="dropdown-2vl1">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="../direcciones/">Direcciones</a>
                                    </li>
                                    <li>
                                        <a href="#">Tasa del dia: <!--SC_FIELD_LABEL_tasa_cambio_bcv--></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
        </nav>
    </div>
    <!-- FIN MENU -->


</body>

</html>
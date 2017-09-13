﻿<?php
    include 'php/conn.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login a | QC Control System</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/Business.js"></script>
    <script src="js/Pagination.js"></script>
 

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <div> 
    </div>
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><a href="">English</a></i></p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/Qc-ControlSystem" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a class="navbar-brand" href="index.html"><img src="images/logo3.png" alt="logo" width="138" height="73" ></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="about-us.html">Sobre nosotros</a></li>
                        <li><a href="services.html">Servicios</a></li>
                   
                      
                        <li><a href="portfolio.html">Nuestros clientes</a></li> 
                        <li class="active"><a href="contact-us.html">Contacto</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->    
    <div class="wrapHistorial">  
    <h1>Recibos de pago</h1>          
     
    
    
    <div id="datosGenerales">          
        <?php
                    $con = mysqli_connect("www.qc-control.mx","profesio2","Prbendiciones2","recibos_nomina");

                    $result = mysqli_query($con,"Select  rER.idRelUsuariosRecibos,  emp.PrimerNombre ,emp.SegundoNombre , emp.ApellidoPaterno , emp.ApellidoMaterno, rER.idEmpleado,  emp.NSS, emp.RFC, emp.FechaInicio 'Fecha Ingreso' ,p.Puesto,tr.TipoRecibo,sem.idSemana, DATE( sem.FechaInicio) 'Fecha Inicio', DATE(sem.FechaFin) 'Fecha Fin' from relEmpleadosRecibos rER
                                inner join Empleados emp on rER.idEmpleado = emp.idEmpleado
                                inner join Puestos p on emp.idPuesto = p.idPuesto
                                inner join Semanas sem on rER.idRelSemana = sem.idIdentity
                                inner join TiposRecibo tr on rER.idTipoRecibo = tr.idIdentity 
                                Order by sem.idSemana asc");
                   

                    $bHeader = false;
                    $idRelReciboUsuario = 0;
                    $sPrimerNombre = '';
                    $sSegundoNombre = '';
                    $sApellidoPaterno = '';
                    $sApellidoMaterno = '';
                    $idEmpleado = '';
                    $sNSS = '';
                    $sRFC = '';
                    $dtFechaIngreso = '';
                    $sPuesto = '';

                    while($row = mysqli_fetch_assoc($result))
                    {
                       
                        if($bHeader == false)
                        {
                            $bHeader = true;
                            $sPrimerNombre = $row['PrimerNombre'];
                            $sSegundoNombre = $row['SegundoNombre'];
                            $sApellidoPaterno = $row['ApellidoPaterno'];
                            $sApellidoMaterno = $row['ApellidoMaterno'] ;
                            $idEmpleado = $row['idEmpleado'] ;
                            $sNSS = $row['NSS'] ;
                            $sRFC = $row['RFC'] ;
                            $dtFechaIngreso = $row['Fecha Ingreso'];
                            $sPuesto = $row['Puesto'] ;

                            echo "<div id=divUl >
                            <img id=imgUl >
                            <ul id=ulValues> 
                            <li><strong>NOMBRE : </strong>$sPrimerNombre $sSegundoNombre $sApellidoPaterno $sApellidoMaterno</li> 
                            <li><strong>Empleado : </strong>$idEmpleado</li> 
                            <li><strong>NSS : </strong>$sNSS</li> 
                            <li><strong>RFC : </strong>$sRFC</li> 
                            <li><strong>Fecha ingreso : </strong>$dtFechaIngreso</li> 
                            <li><strong>Puesto : </strong>$sPuesto</li>
                           </ul>
                            </div>";

                                echo "<table id=tableRecibos border= '0'>";
                                echo "<tr>";                      
                                echo "<th>TipoRecibo</th>";
                                echo "<th>idSemana</th>";
                                echo "<th>Fecha Inicio</th>";
                                echo "<th>Fecha Fin</th>";
                                echo "<th>Recibo</th>";
                                echo "<td>";
                                echo "</tr>";
                                echo "<tr>"; 
                        }
                        $idRelReciboUsuario = $row['idRelUsuariosRecibos'];
                        echo "<td>" .$row['TipoRecibo'] . "</td>";
                        echo "<td>" .$row['idSemana'] . "</td>";
                        echo "<td>" .$row['Fecha Inicio'] . "</td>";
                        echo "<td>" .$row['Fecha Fin'] . "</td>";
                        echo "<td><button id=$idRelReciboUsuario onclick=vShowPDF(this)>PDF</button></td>";
                        echo "</tr>";                     
                    }
                    echo "</table>";                    
                    mysqli_close($con); 
                     ?>         

	</div> 			 
     
    <div id="divError" class="alert-error"><?= $_SESSION['message'] ?></div> 
     
    <footer id="footerLogin">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="http://www.QC-Control.mx/" >QC Control System</a>. Todos los derechos reservados.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="about-us.html">Sobre Nosotros</a></li>
                        <li><a href="services.html">Servicios</a></li>
                        <li><a href="contact-us.html">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

    <script>
    $(".table").DataTable();
</script>
</body>
</html>
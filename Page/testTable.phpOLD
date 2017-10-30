 <?php
    include 'php/conn.php';
?>
<header>
    <link href="css/test.css" rel="stylesheet" />
    <script>
    function vShowPDF(el)
    {  
       // alert(el.id);
       // ABRIR PDF
    }
    </script>
</header>
<body> 
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

                                echo "<table border= '1'>";
                                echo "<tr>";                      
                                echo "<th>TipoRecibo</th>";
                                echo "<th>idSemana</th>";
                                echo "<th>Fecha Inicio/th>";
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
                        echo "<td><button id=$idRelReciboUsuario onclick=vShowPDF(this)>$idRelReciboUsuario</button></td>";
                        echo "</tr>";                     
                    }
                    echo "</table>";                    
                    mysqli_close($con); 
                     ?> 
                     </body>
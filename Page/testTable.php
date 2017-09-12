 <?php
    include 'php/conn.php';
?>
 <table class="table" id="tableDt">
                    <tr>
                        <th><?php echo$row['PrimerNombre'];?> <?php echo$row['SegundoNombre'];?><?php echo$row['ApellidoPaterno'];?></th>
                        <th><?php echo$row['Puesto'];?></th>
                        <th><?php echo$row['RFC'];?></th>
                        <th><?php echo$row['Puesto'];?></th>
                    </tr>
                    <?php
                    $con = mysqli_connect("www.qc-control.mx","profesio2","Prbendiciones2","recibos_nomina");
                    $result = mysqli_query($con,"Select emp.PrimerNombre ,emp.SegundoNombre , emp.ApellidoPaterno , emp.ApellidoMaterno, rER.idEmpleado,  emp.NSS, emp.RFC, emp.FechaInicio,p.Puesto,tr.TipoRecibo,sem.idSemana, DATE( sem.FechaInicio) 'Fecha Inicio', DATE(sem.FechaFin) 'Fecha Fin' from relEmpleadosRecibos rER
                                inner join Empleados emp on rER.idEmpleado = emp.idEmpleado
                                inner join Puestos p on emp.idPuesto = p.idPuesto
                                inner join Semanas sem on rER.idRelSemana = sem.idIdentity
                                inner join TiposRecibo tr on rER.idTipoRecibo = tr.idIdentity 
                                Order by sem.idSemana asc");
                    while($row = mysqli_fetch_assoc($result)):
                    ?>
                    <tr>                         
                        <td><?php echo $row['idSemana'];?></td>
                        <td><?php echo $row['Fecha Inicio'];?></td>
                        <td><?php echo $row['Fecha Fin'];?></td>  
                        <td><a href=""></td> 
                    </tr>

                    <?php endwhile; ?>
                </table>
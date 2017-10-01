<?php           
      $idGet = $_REQUEST['idFolio'];             
      $sSql = "select Recibo,NombreArchivo from recibos_nomina.relEmpleadosRecibos where idRelSemana = ".$idGet;
      $con = mysqli_connect("www.qc-control.mx","profesio2","Prbendiciones2","recibos_nomina");
      $result = mysqli_query($con,$sSql);       
 
       $cont = mysqli_num_rows($result);
       echo "<script>console.log(".$cont.")</script>";
       $row = mysqli_fetch_assoc($result);
       $file = $row["Recibo"];
       $fileName = $row["NombreArchivo"];
       echo "<script>console.log('".$fileName."');</script>";
       mysqli_close($con);
   
        header("Content-Length: ". strlen($file));
        header("Content-Type:application/pdf");
        header("Content-disposition: inline; filename='".$fileName );
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        ob_clean();
        flush();         
        echo $file;                 
?> 
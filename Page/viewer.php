<?php    
      session_start();       
      //$idGet = $_SESSION['idFolio'];  
      //$idGet = 67;

      $idGet = $_GET['idFolio'];  
      if(!isset($idGet))
      {         
        echo '<script>window.location = "../Page/login.php";</script>';
        exit();
      }  
      if(!isset($_SESSION['idEmpleado']))
      {         
        echo '<script>window.location = "../Page/login.php";</script>';
        exit();
      } 
      $sSql = "select Recibo,NombreArchivo from recibos_nomina.relEmpleadosRecibos where idRelSemana = ".$idGet;
      $con = mysqli_connect("www.qc-control.mx","profesio2","Prbendiciones2","recibos_nomina");
      $result = mysqli_query($con,$sSql);       
 
       $cont = mysqli_num_rows($result);
       //echo $idGet;
       //echo '<br>'.$cont.'</br>';
       //echo 'console.log('.$sSql.');';
       if($cont <= 0)
       {
          echo '<script> alert("Error: No se encontro el recibo seleccionado");</script>';         
          echo '<script>window.location = "../Page/historial.php";</script>';
          exit();
       }
        
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
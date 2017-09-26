<?php  
      /*  
      $idGet = $_REQUEST['idFolio'];
      echo $idGet;

      $sSql = "select Recibo from recibos_nomina.relEmpleadosRecibos where idRelUsuariosRecibos = ".$idGet;
      $con = mysqli_connect("www.qc-control.mx","profesio2","Prbendiciones2","recibos_nomina");
      $result = mysqli_query($con,$sSql);
      $row = mysqli_fetch_assoc($result);       
      */

       $file = 'test.pdf';
        
  
        header("Content-Length: ". filesize($file));
        header("Content-Type:application/pdf");
        header("Content-disposition: inline; filename" .basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        ob_clean();
        flush();
        readfile($file);
?>
/*
<html>
<head>           
      <script> 
        function vLoad(){                     
         var url = window.location.href;          
         document.getElementById("tabname").innerHTML = url;
      }
        </script>        
</head>
<body onload="vLoad()">
  <div id="tabname"> </div>
 </body>
</html>
*/
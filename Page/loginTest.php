<?php
    echo "<script>
        function Click(){
            alert('Click');
        }
    </script>";
?>

<html>
<title>Login test</title>
<head>
    <link href="css/loginTest.css" rel="stylesheet"> 
    
</head>
<body>
    <p>Test</p>
    <div id="idForm"> 
        <form class="formAdmin" action="loginTest.php">
            <h1>Empleados </h1> 
            <input type="text" placeholder="Usuario" id="usuario">
            <input type="text" placeholder="Numero de Empleado" id="password">
            <input type="submit" placeholder="Aceptar" id="btnAceptar" onclick="Click()">
        </form>
    </div>
    <table class="tblAdmin">
          
          <th>Empleado</th>
          <td>
              <tr> 1 row</tr>
              <tr> 2 row</tr>
              <tr> 3 row</tr>
          </td
            
    </table>
</body>
</html>s
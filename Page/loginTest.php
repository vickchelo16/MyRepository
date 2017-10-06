<?php

?>

<html>
<title>Login test</title>
<head>
    <link href="css/loginTest.css" rel="stylesheet"> 
    <script>
        function Click(){
            alert('Click');
        }
    </script>
</head>
<body>
    <p>Test</p>
    <div id="idForm">
    <form class="formLogin" action="loginTest.php" >
        <input type="text" placeholder="Usuario" id="usuario">
        <input type="text" placeholder="Contrasena" id="password">
        <input type="submit" placeholder="Aceptar" id="btnAceptar" onclick="Click()">
    </form>
    <form class="formAdmin" action="loginTest.php">
        <p>SOLO ADMINISTRACION</p>
        <input type="text" placeholder="Usuario" id="usuario">
        <input type="text" placeholder="Contrasena" id="password">
        <input type="submit" placeholder="Aceptar" id="btnAceptar" onclick="Click()">
    </form>
    </div>
</body>
</html>
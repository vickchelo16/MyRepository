 
<?php  
        //echo '<script> alert("Error: Entro con ... ");</script>';              
        session_start();
        $_SESSION['message'] = '';
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if(strpos($url,'error=empty1') !== false){ 
            $_SESSION['message'] = 'Escriba su usuario';       
            vShowError($_SESSION['message']);
        }
        else if(strpos($url,'error=empty2') !== false){            
            $_SESSION['message'] = 'Escriba su contrase&ntilde;a';
            vShowError($_SESSION['message']);
        }
        else if(strpos($url,'error=usernameempty') !== false){            
            $_SESSION['message'] = 'Usuario no existe';
            vShowError($_SESSION['message']);
        } 
        else if(strpos($url,'error=passwordWrong') !== false){
            $_SESSION['message'] = 'Contrase&ntilde;a incorrecta';
            vShowError($_SESSION['message']);  
        }

         
        function vShowError($error){             
            ?>  
            <style type="text/css"> .alert-error
            {
                background-color: white; 
                text-align: center;
                margin: 0 auto;
                padding-top: 0;
                color: red;
            }
            </style>   

            <?php 
        }
    $con = mysqli_connect('www.qc-control.mx','root_qccontrol','Prbendiciones2',"recibos_nomina");       
    if(isset($_POST['usernameInp'])){    

        $_SESSION['userLogin'] = $_POST['usernameInp'];
        $unameGot = $_POST['usernameInp'];
        $passwordGot = $_POST['passwordInp'];

        if(empty($unameGot)){
            //header("Location: ../Page/login.php?error=empty1");
            echo "<script>location='../login.php?error=empty1'</script>";
            exit();
        }
        if(empty($passwordGot)){
            //header("Location: ../Page/login.php?error=empty2");
            echo "<script>location='../login.php?error=empty2'</script>";
            exit();
        }
        
        $sql = "SELECT NickName FROM Empleados where idEmpleado = ".$unameGot."";                                       
        $result = mysqli_query($con,$sql);         
        $uicheck = mysqli_num_rows($result);         
        mysqli_free_result($result);
        if($uicheck <= 0){
             //header("Location: ../Page/login.php?error=usernameempty");
             echo "<script>location='../login.php?error=usernameempty'</script>";
             exit();
        }
         
        if($uicheck > 0){             
            $sqlAccess = "SELECT NickName FROM  Empleados where idEmpleado = ".$unameGot." and BINARY Contrasena = '".$passwordGot."'";                 
            $resultAcess = mysqli_query($con,$sqlAccess);            
            $uicheckAcess = mysqli_num_rows($resultAcess);                          
            /* while ($row2 = mysqli_fetch_assoc($resultAcess)) {
                echo $row2['PrimerNombre'];
            }*/
            mysqli_free_result($resultAcess);
            if($uicheckAcess >= 1){       
                $_SESSION['idEmpleado'] = $unameGot; 
                //header("Location: ../Page/historial.php");
                echo "<script>location='historial.php'</script>";
                die();
            }
            else{
                //header("Location: ../Page/login.php?error=passwordWrong");
                echo "<script>location='login.php?error=passwordWrong"</script>;
                exit();
            }
        }          
        mysqli_close($con);         
    }  
 ?>  
 
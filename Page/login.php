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
    
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/Business.js"></script>
   
   <!--
    <script>
        window.onload=function(){             
            
            var imgError = document.createElement('img');
            imgError.src = 'images/error.png';
            imgError.name = 'imgError'
            imgError.width = 50;
            imgError.height = 50;
            document.getElementById('divError').appendChild(imgError);
            
            //document.getElementById('imgError').style.width = 50;
            //document.getElementById('imgError').style.height = 50;
            
            /* document.getElementById("image-holder").innerHTML = "<img src='image.png' alt='The Image' />";

            /*  
            document.getElementById('divError').style.color = red;
            document.getElementById('divError').style.width = 50px;
            document.getElementById('divError').style.height = 50px; 
              */
        }
    </script>-->
    <script> 
    function vValidateEmpty(){
       var inputUser = document.forms["Form"]["usernameInp"];
       var inputPass = document.forms["Form"]["passwordInp"];

       if( inputUser.value == ""){               
            inputUser.style.border = "2px solid red";
            inputUser.focus();
            return false;
       }
       else{
            inputUser.style.border = "2px solid #1790d6";
       }

       if( inputPass.value ==""){
            inputPass.style.border = "2px solid red";
            inputPass.focus();
            return false;
       }
       else{
            inputPass.style.border = "2px solid #1790d6";
       }
    } 
    </script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
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
    <div class="wrap-login">
            <div class="loginFace">
                <img src="images/users.png" alt="users">
            </div>
            <form method="POST" class="formMain" name="Form" action="login.php" autocomplete="off" onsubmit="return vValidateEmpty()">                    
                <h1>Login</h1>
                <h4>Introduce tu numero de empleado y contraseña para acceder a tus recibos de pago.</h4>
                <input type="text-indent:17px;" id="user" name="usernameInp"  placeholder= "Usuario ..." maxlength="15" onblur="vValidateEmpty()" autofocus>
                <p id="errorUsuario" ></p>
                <input type="password" id="pass" name="passwordInp" placeholder= "Contrase&ntilde;a ..." maxlength="15" onblur="vValidateEmpty()">
                <p id="errorPass"></p>
                <input type="submit" name="submit" value="ENTRAR" class="btn-login" /> 
            </form>
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
</body>
</html>
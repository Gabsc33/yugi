<?php
    include('config/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>TIENDA EL YUGIS</title>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
        <title>Menu De Navegacion Con Listas</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <meta charset="UTF-8">
    <title>Pie de pagina</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilos1.css">
    <link rel="stylesheet" href="productos.css">
     <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <style type="text/css">
        form{
            max-width: 460px;
            width: calc(100% - 40px);
            padding: 20px;
            background: #D6EAF8;
            border-radius: 5px;
            margin: auto;
        }
        form h3{
            margin: 5px 0;
        }
        form input{
            padding: 7px 10px;
            width: calc(100% - 25px);
            margin-bottom: 10px;
        }
        form button{
            padding: 10px 15px;
            width: calc(100% - 25px);
            background: #FADBD8;
            border: none;
            color: black;
        }
        form p{
            margin: 0;
            margin-bottom: 5px;
            color: red;
            font-size: 14px;
        }
</style>
</head>
<body>
     <!-- Gaspak -->
     <header>
        <div class="logo-place"><a href="../index.php"><img src="imagenes/logoorical.png"></a></div>
         <div class="search-place">
             <input type="text" id="idbusqueda" placeholder="Encuenta todo lo que necesitas...">
             <button class="btn-main btn-search"><i class="fa fa-search" aria-hidden="true"></i>
             </button>
         </div>
        <div class="options-place">
            <div class="item-option" title="Inicia Sesion Administrador"><a href="login.php"><i class="fa fa-user-circle-o"aria-hidden="true"></i></a></div>
             <div class="item-option" title="Ingresar"><a href="../login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></div>
             <div class="item-option" title="Mis compras"><a href="../pedidos.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>

         </div>
     </header>
          <div class="main-content">
            <div class="content-page">
                <div>
                 <form action="config/login.php" method="POST">
                     <h3>Iniciar Sesion</h3>
                     <input type="text" name="ema" placeholder="Correo">
                     <input type="password" name="pas" placeholder="Contraseña">
                      <?php
                        if (isset($_GET['e'])){
                            switch ($_GET['e']){
                                case '1':
                                echo '<p>Error de Conexion</p>';
                                break;
                                case '2':
                                echo '<p>Email invalido</p>';
                                break;
                                case '3':
                                echo '<p>Contraseña incorrecta</p>';
                                break;
                                default:
                                break;
                            }

                         }

                      ?>
                     <button type="submit">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
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
            background: #00FFFF;
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
            background: red;
            border: none;
            color: #fff;
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
        <div class="logo-place"><a href="index.php"><img src="imagenes/logoorical.png"></a></div>
         <div class="search-place">
             <input type="text" id="idbusqueda" placeholder="Encuenta todo lo que necesitas...">
             <button class="btn-main btn-search"><i class="fa fa-search" aria-hidden="true"></i>
             </button>
         </div>
         <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
        </ul>
        <div class="options-place">
            <div class="item-option" title="Inicia Sesion Administrador"><a href="gestion/login.php"><i class="fa fa-user-circle-o"aria-hidden="true"></i></a></div>
             <div class="item-option" title="Ingresar"><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></div>
             <div class="item-option" title="Mis compras"><a href="pedidos.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>

         </div>
     </header>
          <div class="main-content">
            <div class="content-page">
                <div>
                 <form action="servicios/login.php" method="POST">
                     <h3>Iniciar Sesion</h3>
                     <input type="text" name="emausu" placeholder="Correo">
                     <input type="password" name="pasusu" placeholder="Contraseña">
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
                 <br>
                 <br>
                 <div>
                 <form action="servicios/register.php" method="POST">
                     <h3>Registrate</h3>
                     <input type="text" name="nomusur" placeholder="Nombre">
                     <input type="text" name="apeusur" placeholder="Apellidos">
                     <input type="text" name="emausur" placeholder="Correo">
                     <input type="password" name="pasusur" placeholder="Contraseña">
                     <input type="password" name="pasusu2r" placeholder="Confirmar Contraseña">
                      <?php
                        if (isset($_GET['er'])){
                            switch ($_GET['er']){
                                case '1':
                                echo '<p>Error de Conexion</p>';
                                break;
                                case '2':
                                echo '<p>Email ya esta siendo usado</p>';
                                break;
                                case '3':
                                echo '<p>Las Contraseñas no Coinciden</p>';
                                break;
                                default:
                                break;
                            }

                         }

                      ?>
                     <button type="submit">Crear Cuenta</button>
                 </form>
                 </div>





           <!--::::Pie de Pagina::::::-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="imagenes/logoorical.png" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>TIENDA ESPECIALIZADA EN PRODUCTO SELLADO DEL JUEGO DE CARTAS YUGIOH</p>
                <p>TIENDA ESPECIALIZADA EN CARTAS COLECCIONABLES</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/El-kuriboh-De-YUGI-109158295146573/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/elkuribohdeyugi/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/ElKuribohDeYugi" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/channel/UCePoZ3dArqvHmxTHf3NcX9Q" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>EL KURIBOH DE YUGI</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
 
     </body>
     </html>
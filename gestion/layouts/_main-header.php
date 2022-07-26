 <style type="text/css">
        .menu-opciones{
            display: none;
            width: 150px;
            background: #fff;
            position: fixed;
            top: 70px;
            right: 50px;
            color: #333;
            box-shadow: 0 0 8px 3px rgb(150, 150, 150);
            border-radius: 5px;
            font-family: 'sen', sans-serif;
        }
        .menu-opciones ul{
            margin: 0;
            padding: 0;
        }
        .menu-opciones ul li{
            display: block;
        }
        .menu-opciones ul li a{
            color: #333;
            text-decoration: none;
            font-size: 12px;
            font-family: 'sen', sans-serif;
        }
        .menu-opcion{
            padding: 10px 15px;
        }
        </style>
<header>
        <div class="logo-place"><a href="index.php"><img src="imagenes/logoorical.png"></a></div>
         <div class="search-place">
             <input type="text" id="idbusqueda" placeholder="Encuenta lo que necesitas..." value="<?php if(isset($_GET['text'])){echo $_GET['text'];}else{echo '';} ?>">
             <button class="btn-main btn-search" onclick="search_producto()"><i class="fa fa-search" aria-hidden="true"></i></button>
         </div>
         <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
        </ul>
        <div class="options-place">
             <?php
                if (isset($_SESSION['codusu'])){
                    echo '<div class="item-option" onclick="mostrar_opciones()"><i class="fa fa-user-circle-o"aria-hidden="true"></i><p>'.$_SESSION['nomusu'].'</p></div>';
                }else{
            ?>
            <div class="item-option" title="Inicia Sesion Administrador"><a href="gestion/login.php"><i class="fa fa-user-circle-o"aria-hidden="true"></i></a></div>
             <div class="item-option" title="Ingresa"><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></div>
             <?php
             }
             ?>
             <div class="item-option" title="Mis compras"><a href="pedidos.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>
         </div>
         
     </header>
     <script type="text/javascript">
         function mostrar_opciones() {
            if (document.getElementById("ctr-menu").style.display=="none") {
             document.getElementById("ctr-menu").style.display="block";
         }else{
             document.getElementById("ctr-menu").style.display="none";
         }
         }
     </script>
     <div class="menu-opciones" id="ctr-menu">
         <ul>
             <li><a href="historial.php">
                 <div class="menu-opcion">Historial</div>
             </a></li>
             <li><a href="_logout.php">
                 <div class="menu-opcion">Salir</div>
             </a></li>
         </ul>
     </div>
    
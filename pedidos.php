<?php
    session_start();
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
    <link rel="stylesheet" href="pedidos.css">
     <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <style type="text/css">
        input{
            width: 300px;
            padding: 10px;
            font-size: 15px;
            background-color: #fefefe;
            border: 1px solid #ccc;
            font-family: 'sen' sans-serif;
            margin-bottom: 5px;
        }
        
</style>
</head>
<body>
     <!-- Gaspak -->
    <?php include("layouts/_main-header.php"); ?>
         
     </header>
     <div class="main-content">
         <div class="content-page">
            <h3>Mi Carrito De Compra</h3>
            <div class="body-pedidos" id="space-list">
                
            </div>
            <input class="ipt-procom" type="text" id="dirusu" placeholder="Direccion" >
            <br>
            <input class="ipt-procom" type="text" id="telusu" placeholder="Telefono" >
            <br>
            <button onclick="procesar_compra()" id="botoncompra">Procesar Compra</button>
         </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
               $.ajax({
                   url:'servicios/pedido/get_porprocesar.php',
                   type:'POST',
                   data:{},
                   success:function(data){
                       console.log(data);
                       let html='';
                       for (var i = 0; i < data.datos.length; i++) {
                           html+=
                           '<div class="item-pedido">'+
                            '<div class="pedido-img">'+
                                '<img src="assets/products/'+data.datos[i].rutimapro+'">'+
                            '</div>'+
                            '<div class="pedido-detalle">'+
                                '<p>'+data.datos[i].nompro+'</p>'+
                                '<p><b>Precio:</b> MXN. '+data.datos[i].prepro+'</p>'+
                                '<p><b>Fecha:</b> '+data.datos[i].fecped+'</p>'+
                                '<p><b>Estado:</b> '+data.datos[i].estado+'</p>'+
                                '<p><b>Dirección:</b> '+data.datos[i].dirusuped+'</p>'+
                                '<p><b>Celular:</b> '+data.datos[i].telusuped+'</p>'+
                            '</div>'+
                        '</div>';
                }
                document.getElementById("space-list").innerHTML=html;

             },
                   error:function(err){
                    console.error(err);
                   }
               });
           });
        function procesar_compra() {
            let dirusu=document.getElementById("dirusu").value;
            let telusu=$("#telusu").val();
            if (dirusu=="" || telusu=="") {
                alert("Complete los campos");
            }else{
                $.ajax({
                   url:'servicios/pedido/confirm.php',
                   type:'POST',
                   data:{
                      dirusu:dirusu,
                      telusu:telusu
                   },
                   success:function(data){
                       console.log(data);
                       if (data.state) {
                         window.location.href="pedidolisto.php";
                       }else{
                        alert(data.detail);
                       }

             },
                   error:function(err){
                    console.error(err);
                   }
               });
            }
        }
    </script>
    
     </body>
     </html>
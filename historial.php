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
     <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <style type="text/css">
        .item-option{
            font-size: 35px;
            font-family: 'sen', sans-serif;
            display: flex;
            color: #fff;
        }
        .item-option p{
            font-size: 15px;
            margin: 0;
            margin-left: 5px;
            
        }
        .caja-detalle{
            width: 100%;
            display: flex;
        }
        .caja-detalle .img {
            width: 300px;
        }
        .caja-detalle .img img{
            width: 100%;
        }
        .caja-detalle .detalle{
            width: calc(100% - 50px);
            padding: 10px;
        }
</style>
</head>
<body>
     <!-- Gaspak -->
     <?php include("layouts/_main-header.php"); ?>
     <div class="main-content">
         <div class="content-page">
             <div class="title-section">Mis Compras Realizadas</div>
             <div class="products-list" id="space-list">

                

             </div>
         </div>
     </div>
     <script type="text/javascript src=js/main-scripts.js"></script>
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
                   url:'servicios/pedido/get_pedidos_all.php',
                   type:'POST',
                   data:{},
                   success:function(data){
                       console.log(data);
                       let html='';
                       for (var i = 0; i < data.datos.length; i++) {
                           html+='<div class="caja-detalle">'+
                         '<div class="img">'+
                             '<img src="assets/products/'+data.datos[i].rutimapro+'">'+

                         '<div class="detalle">'+
                             '<h3>'+data.datos[i].nompro+'</h3>'+
                             '<h4>'+data.datos[i].despro+'</h4>'+
                             '<h4>'+formato_precio(data.datos[i].prepro)+'</h4>'+
                           '</div>'+
                         '</div>'+
                     '</a>'+
                 '</div>';
                }
                document.getElementById("space-list").innerHTML=html;

             },
                   
               });
           });
           function formato_precio(valor){
               let svalor=valor.toString();
               let array=svalor.split(".");
               return "MXN  "+array[0]+".<span>"+array[1]+"</span>";
           }
       </script>
     </body>
     </html>
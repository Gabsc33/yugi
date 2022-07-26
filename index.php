<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>EL KURIBOH DE YUGI</title>
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
     <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <!--texto y imagen css-->
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="estilos texto y imagen.css">
    <link rel="stylesheet" href="estilo2.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
        a{
            color: #fff;
        }
        </style>
</head>
<body>
     <!-- Gaspak -->
     <?php include("layouts/_main-header.php"); ?>
     <div class="slider">
        <ul>
            <li>
<img src="YGO_KuribohKollectionAccessories_WebSlider-pchpa4bt560gurjgjlzmjx84lg503y1ke6xlbzmhyo.png" alt="">
</li>
            <li>
<img src="sky.png" alt="">
</li>
            <li>
<img src="kuris.png" alt="">
</li>       
            <li>
<img src="YUGIOH-1.png" alt="">
</li>
        </ul>
    </div>
    <div class="container-all">
       
        <h1 class="title" id="parrafo"><center>QUIENES SOMOS</center></h1>
        <img src="oricalcos.png" onmouseover="this.width=5000;this.height=400;" onmouseout="this.width=300;this.height=300;" width="300" height="300" />

        
        <h1 class="sub-title">EL KURIBOH DE YUGI</h1>
        <p>Somos una tienda virtual especializada en el juego de cartas coleccionables de yugioh nuestro propósito es dar a conocer más el juego, por medio de el producto sellado, así como de cartas sueltas de colección o cartas para reforzar tu baraja</p>
        <p>Introduciéndose dentro del mundo del Trading Card Game, (TCG, por sus siglas en ingles) cubriendo una necesidad amplia del mercado, ofreciendo, tiempo, calidad y precio.
            En nuestra tienda encontrarás productos recientes, qué apenas se hayan lanzado, así como Tambien encontrarás producto coleccionable, traído directamente desde corea, con el fin de diversificar las rarezas de las cartas, ya que el producto, OCG (Official Card Game) qué es exclusivo del continente asiático tiene mejores rarezas Y algunos coleccionistas les gusta más
            </p>
        <p>Nuestro emblema es el monstruo de yugi llamado kuriboh ya que este personaje es muy iconico, Y es fácil para las personas que vean la página relacionarlo con yugioh, Y con el juego de cartas coleccionables.</p>
        
    </div>
    <script type="text/javascript src=js/main-scripts.js"></script>
    <!--::::Pie de Pagina::::::-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="index.php">
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
    <script type="text/javascript" src="js/inicio-scripts.js"></script>
       <script type="text/javascript">
           (function(){
               $.ajax({
                   url:'',
                   type:'POST',
                   data:{},
                   success:function(data){

                   }
               });
           })();
       </script>


       
      


     </body>
     </html>
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
        
</style>
</head>
<body>
     <!-- Gaspak -->
     <?php include("layouts/_main-header.php"); ?>
     <div class="main-content">
         <div class="content-page">
             <div class="title-section"></div>
             <div class="products-list" id="space-list">
                 <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/prosmatic.png">
                            <div class="detail-title">Yu-Gi-Oh! Booster Box Korean</div>
                            <div class="detail-description">Cartas oficiales de Yugioh Colección de arte prismático- Caja de refuerzo, cartas super coleccionables</div>
                            <div class="detail-price">MX/. 699.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/2021tin.png">
                            <div class="detail-title">Yu-Gi-Oh! 2021 Lata de Batallas Antiguas</div>
                            <div class="detail-description">¡La segunda pieza de una antigua leyenda está delante de ti! preparate para el duelo.</div>
                            <div class="detail-price">MX/. 399.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/brothers.png">
                            <div class="detail-title">Yu-Gi-Oh! Hermanos de Leyenda</div>
                            <div class="detail-description">¡Los Hermanos Kuriboh de Yugi están aquí por fín! Kuribabilonia y Ocaso de las Cinco Estrellas.</div>
                            <div class="detail-price">MX/. 1899.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/duelover.png">
                            <div class="detail-title">Yu-Gi-Oh! Caja de sobrecarga</div>
                            <div class="detail-description">¡Prepara tu Deck para los Monstruos de Enlace completamente nuevos! listo para la sobrecarga.</div>
                            <div class="detail-price">MX/. 999.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/goldeldorado.png">
                            <div class="detail-title">Yu-Gi-Oh! máxima de Oro El Dorado</div>
                            <div class="detail-description">Cada caja incluye 4 paquetes con 7 tarjetas cada uno, con cartas doradas.</div>
                            <div class="detail-price">MX/. 699.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/legendarycollection.png">
                            <div class="detail-title">Yu-Gi-Oh! COLECCIÓN LEGENDARIA </div>
                            <div class="detail-description">Legendary Collection: Gameboard es especial de Legendary Collection.</div>
                            <div class="detail-price">MX/. 3099.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/barajasyugi.png">
                            <div class="detail-title">Yu-Gi-Oh! Barajas Legendarias de Yugi</div>
                            <div class="detail-description">Decks Legendarios de Yami Yugi Utilizados A Lo largo de las Temporadas.</div>
                            <div class="detail-price">MX/. 1399.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/herosdecks.png">
                            <div class="detail-title">Yu-Gi-Oh! Barajas de héroes legendarios</div>
                            <div class="detail-description">mazos legendarios de héroes Este juego de cajas viene con 3 mazos únicos.</div>
                            <div class="detail-price">MX/. 799.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/dueldevastator.png">
                            <div class="detail-title">Yu-Gi-Oh! Devastador de duelo</div>
                            <div class="detail-description">Duel Devastator es un juego de coleccionista de TCG, cartas de colección.</div>
                            <div class="detail-price">MX/. 1799.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/burst.png">
                            <div class="detail-title">Yu-Gi-Oh! TCG: ráfaga del destino</div>
                            <div class="detail-description">Burst of Destiny el último refuerzo central para el Yu-Gi-Oh! con nuevas tarjetas.</div>
                            <div class="detail-price">MX/. 2299.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/obeliscoB.png">
                            <div class="detail-title">Yu-Gi-Oh! Baraja de Dios Obelisco </div>
                            <div class="detail-description">crear un Deck alrededor de una Carta de Dios Egipcio ¡no busques más.</div>
                            <div class="detail-price">MX/. 279.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/toonchaos.png">
                            <div class="detail-title">Yu-Gi-Oh! Toon Chaos box</div>
                            <div class="detail-description">la primera serie animada del Reino del Duelista, Caos Toon trae cartas nuevas.</div>
                            <div class="detail-price">MX/. 4999.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/SPD.png">
                            <div class="detail-title">Yu-Gi-Oh! Speed Duel GX</div>
                            <div class="detail-description">Prepárate para empezar tu juego con la nueva Speed Duel GX: Duel Academy.</div>
                            <div class="detail-price">MX/. 649.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/yugiplata.png">
                            <div class="detail-title">Yu-Gi-Oh! Yami Yugi corean</div>
                            <div class="detail-description">Yu-Gi-Oh Tarjetas Duelist Road pieza de memoria: Yami Yugi Booster Box.</div>
                            <div class="detail-price">MX/. 649.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/blueeyes.jpeg">
                            <div class="detail-title">Blue-Eyes White Dragon - LOB-001 - Ultra Rare 1st Edition</div>
                            <div class="detail-description">Legend of Blue Eyes White Dragon fue la primera expansión de Yugioh TCG, esta carta es de las más caras</div>
                            <div class="detail-price">MX/. 109000.<span>00</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/jetdragon.jpeg">
                            <div class="detail-title">Blue-Eyes Jet Dragon - BACH-EN004 - Starlight Rare</div>
                            <div class="detail-description">del box Battle of Chaos Llega el dragón de ojos azules en rareza Starlight Para reforzar tu pareja de ojos azules</div>
                            <div class="detail-price">MX/. 1999.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/ghostbelle.jpeg">
                            <div class="detail-title">Ghost Belle  - DIFO-EN100 - Starlight Rare 1st Edition</div>
                            <div class="detail-description"> del Box dimensión Force Llega la bella fantasma y mansión embrujada en rareza Starlight Rare 1st Edition</div>
                            <div class="detail-price">MX/. 7999.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/darkmagiciangirlghost.jpeg">
                            <div class="detail-title">Dark Magician Girl - GFP2-EN177 - Ghost Rare 1st Edition</div>
                            <div class="detail-description"> la carta de la colección más cara de fantasmas del pasado segunda edición, llega a la chica más oscura en rareza fantasma</div>
                            <div class="detail-price">MX/. 7999.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/yata.jpeg">
                            <div class="detail-title">Yata-Garasu - LOD-000 - Secret Rare 1st Edition</div>
                            <div class="detail-description"> DESPUÉS DE ESTAR BANEADA POR 18 AÑOS VUELVE DE ENTRE LAS SOMBRAS EL TEMIBLE Yata-Garasu.</div>
                            <div class="detail-price">MX/. 6999.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/wk.jpeg">
                            <div class="detail-title">Ultimate Rare - Winged Kuriboh LV10 - CRV-EN005 Unlimited</div>
                            <div class="detail-description"> Cybernetic Revolution fue la expansión número 16 de Yugioh TCG. Fue lanzado en agosto de 2005 y constaba de 85 cartas en total.</div>
                            <div class="detail-price">MX/. 19999.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/wk9.jpeg">
                            <div class="detail-title">Winged Kuriboh LV9 - YG03-EN001 - Ultra Rare year 1999 promo set</div>
                            <div class="detail-description"> Es una tarjeta promocional de Yugioh (sin edición) de Yu-Gi-Oh! Juego de cartas promocionales Yugioh. Esta es Ultra Rara.</div>
                            <div class="detail-price">MX/. 249.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/wku.jpeg">
                            <div class="detail-title">Ultimate Rare - Winged Kuriboh - TLM-EN005 1st Edition</div>
                            <div class="detail-description">The Lost Millennium fue la decimoquinta expansión de Yugioh TCG. Fue lanzado en junio de 2005 y constaba de 85 cartas en total.</div>
                            <div class="detail-price">MX/. 7799.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/kuriboh.jpeg">
                            <div class="detail-title">Kuriboh - MRD-071 - Super Rare 1st Edition De la segunda expansión</div>
                            <div class="detail-description"> Metal Raiders fue la segunda expansión de Yugioh TCG. Fue lanzado en junio de 2002 y constaba de 144 cartas en total.</div>
                            <div class="detail-price">MX/. 1999.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/kuriboharte.jpeg">
                            <div class="detail-title">Kuriboh - PCY-E005 - Secret Rare,Arte alterno promocional</div>
                            <div class="detail-description"> es una carta promocional de Yugioh (sin edición) de Yu-Gi-Oh! Juego de cartas promocionales Yugioh. Este es un Secreto Raro, de Arte Alternativo de kuriboh.</div>
                            <div class="detail-price">MX/. 799.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/skykagary.jpeg">
                            <div class="detail-title">Ultimate Rare - Sky Striker Ace - Kagari - OP08-EN002</div>
                            <div class="detail-description">Miembro de
                                Caza del Cielo As, Caza del Cielo
                                
                                Soporte a
                                Caza del Cielo</div>
                            <div class="detail-price">MX/. 799.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/skyshizuku.jpeg">
                            <div class="detail-title">Forca Celeste - As - Shizuku - OP09-PT003 - Ultimate Rare</div>
                            <div class="detail-description">Miembro de
                                Caza del Cielo As, Caza del Cielo
                                
                                Soporte a
                                Caza del Cielo</div>
                            <div class="detail-price">MX/. 799.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/skyace.jpeg">
                            <div class="detail-title">Sky Striker Ace - Roze - IGAS-EN020 - Starlight Rare 1st </div>
                            <div class="detail-description">Miembro de
                                Caza del Cielo As, Caza del Cielo
                                
                                Soporte a
                                Caza del Cielo</div>
                            <div class="detail-price">MX/. 799.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/engage.jpeg">
                            <div class="detail-title">Sky Striker Mobilize - Engage! 1st Edition Secret </div>
                            <div class="detail-description">Miembro de
                                Caza del Cielo As, Caza del Cielo
                                
                                Soporte a
                                Caza del Cielo</div>
                            <div class="detail-price">MX/. 799.<span>99</span></div>
                        </div>
                    </a>
                </div>
                <div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="assets/products/skyraye.jpeg">
                            <div class="detail-title">Sky Striker Ace - Raye - MP19-EN259 - Prismatic Secret Rare</div>
                            <div class="detail-description">Miembro de
                                Caza del Cielo As, Caza del Cielo
                                
                                Soporte a
                                Caza del Cielo</div>
                            <div class="detail-price">MX/. 799.<span>99</span></div>
                        </div>
                    </a>
                </div>
                

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
                   url:'servicios/producto/get_all_products.php',
                   type:'POST',
                   data:{},
                   success:function(data){
                       console.log(data);
                       let html='';
                       for (var i = 0; i < data.datos.length; i++) {
                           html+='<div class="product-box">'+
                     '<a href="producto.php?p='+data.datos[i].codpro+'">'+
                         '<div class="product">'+
                             '<img src="assets/products/'+data.datos[i].rutimapro+'">'+
                             '<div class="detail-title">'+data.datos[i].nompro+'</div>'+
                             '<div class="detail-description">'+data.datos[i].despro+'</div>'+
                             '<div class="detail-price">'+formato_precio(data.datos[i].prepro)+'</div>'+
                         '</div>'+
                     '</a>'+
                 '</div>';
                }
                document.getElementById("space-list").innerHTML=html;

             },
                   error:function(err){
                    console.error(err);
                   }
               });
           });
           function formato_precio(valor){
               let svalor=valor.toString();
               let array=svalor.split(".");
               return "MXN  "+array[0]+".<span>"+array[1]+"</span>";
           }
       </script>
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
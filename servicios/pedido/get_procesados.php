<?php 
include('../_conexion.php');
$response=new stdClass();

function estado2texto($id){
    switch ($id) {
        case '1':
            return 'Por Procesar';
            break;
        case '2':
            return 'Por Pagar';
            break;
        case '3':
            return 'Por Entregar';
            break;
        case '4':
            return 'En Camino';
            break;
        case '5':
            return 'Entregado';
            break;
        
        default:
            break;
    }
}

$datos=[];
$i=0;
$sql="select *,ped.estado estadoped from pedido ped
inner join PRODUCTO pro 
on ped.codpro=pro.codpro
where ped.estado!=1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
    $obj=new stdClass();
    $obj->codped=$row['codped'];
    $obj->codpro=$row['codpro'];
    $obj->nompro=utf8_decode($row['nompro']);
    $obj->prepro=$row['prepro'];
    $obj->rutimapro=$row['rutimapro'];
    $obj->fecped=$row['fecped'];
    $obj->dirusuped=utf8_decode($row['dirusuped']);
    $obj->telusuped=$row['telusuped'];
    $obj->estado=($row['estadoped']);
    $obj->estadotext=estado2texto($row['estadoped']);
    $datos[$i]=$obj;
    $i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
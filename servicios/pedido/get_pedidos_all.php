<?php 
include('../_conexion.php');
$response=new stdClass();

session_start();
$codusu=$_SESSION['codusu'];
$datos=[];
$i=0;
$sql="select * from pedido ped
inner join PRODUCTO pro
on ped.codpro=pro.codpro
where ped.codusu=$codusu";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
    $obj=new stdClass();
    $obj->nompro=utf8_decode($row['nompro']);
    $obj->despro=utf8_decode($row['despro']);
    $obj->fecped=$row['fecped'];
    $obj->dirusuped=$row['dirusuped'];
    $obj->telusuped=$row['telusuped'];
    $obj->prepro=$row['prepro'];
    $obj->rutimapro=$row['rutimapro'];
    $datos[$i]=$obj;
    $i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
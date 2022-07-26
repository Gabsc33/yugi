<?php 
//1: Error de conexion
//2: Email invalido
//3: contraseña incorrecta
include('conexion.php');
$ema=$_POST['ema'];
$sql="SELECT * FROM admin WHERE ema='$ema'";
$result=mysqli_query($con,$sql);
if ($result){
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if ($count!=0) {
       $pas=$_POST['pas'];
       if ($row['pas']!=$pas) {
          header('Location: ../login.php?e=3');
       }else{
         session_start();
         $_SESSION['cod']=$row['cod'];
         $_SESSION['ema']=$row['ema'];
         $_SESSION['nom']=$row['nom'];
         header('Location: ../productos.php');
       }
    }else{
       header('Location: ../login.php?e=2');
    }
}else{
   header('Location: ../login.php?e=1');
}
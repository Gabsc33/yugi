<?php 
//1: Error de conexion
//2: Email invalido
//3: contraseña incorrecta
include('_conexion.php');
$emausu=$_POST['emausur'];
$nomusu=$_POST['nomusur'];
$apeusu=$_POST['apeusur'];
$sql="SELECT * FROM USUARIO WHERE emausu='$emausu'";
$result=mysqli_query($con,$sql);
if ($result){
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if ($count==0) {
      //puede crear un nuevo usuario
       $pasusu=$_POST['pasusur'];
       $pasusu2=$_POST['pasusu2r'];
       if ($pasusu!=$pasusu2) {
          header('Location: ../login.php?er=3');
       }else{        
$sql="INSERT INTO USUARIO (codusu,nomusu,apeusu,emausu,pasusu,estado)
VALUES ('','$nomusu','$apeusu','$emausu','$pasusu',1)";
$result=mysqli_query($con,$sql);
$codusu=mysqli_insert_id($con);
         session_start();
         $_SESSION['codusu']=$codusu;
         $_SESSION['emausu']=$emausu;
         $_SESSION['nomusu']=$nomusu;
         $_SESSION['apeusu']=$apeusu;
         header('Location: ../');
       }
    }else{
       header('Location: ../login.php?er=2');
    }
}else{
   header('Location: ../login.php?er=1');
}
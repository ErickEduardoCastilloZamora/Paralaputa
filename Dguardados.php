<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="ladybug";

 
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 $Nombre=$_POST['Nombre'];
 $Edad=$_POST['Edad'];
 $Direccion=$_POST['Direccion'];
 $Teléfono=$_POST['Teléfono'];
 $Personaje=$_POST['Personaje'];

 $sql="INSERT INTO eleccion_de_personaje VALUES(
           '$Nombre',
           '$Edad',
           '$Direccion',
           '$Teléfono',
           '$Personaje')";

 $ejecutar=mysqli_query($con,$sql);

 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='Index.html'>Volver</a>";
 }
?>
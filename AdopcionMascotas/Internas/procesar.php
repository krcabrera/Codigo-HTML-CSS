
<?php 

include("../dll/confg.php");
  include("../dll/class_mysqli.php");
  $miconexion=new class_mysqli();
  $miconexion->conectar(DBHOST,DBUSER,DBPASS,DBNAME);

  $nombres=$_POST['nombres'];
  $apellidos=$_POST['apellidos'];
  $correo=$_POST['correo'];
  $cedula=$_POST['cedula'];
  $direccion=$_POST['direccion'];
  $fechanacimiento=$_POST['fechanacimiento'];
  $telefono=$_POST['telefono'];


   

  $sql="insert into personal values('','$nombres','$apellidos','$cedula','$correo','$direccion','$telefono','$fechanacimiento')";
  //$sql="update personal set nombres= 'Daniela',apellidos='pardo' where id =7";

   $resSQL= $miconexion->consulta($sql);
   if ($resSQL==""){
    echo "Problemas de ejecucion del SQL";
   }else{
    echo '<script>alert("sentencia ejecutada..");</script>';
    echo "<script>location.href'../'</script>";
}
?>
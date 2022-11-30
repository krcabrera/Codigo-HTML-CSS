
//$conexion= new mysqli("127.0.0.1","root","","petsdb");
//if ( !$conexion) {
// 	echo "hay un error de conexion a la db";
//}


<?php
include("confg.php");
$conexion = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
if(!$conexion){
    echo "hay un error de conexion a la db";
}
?>
	
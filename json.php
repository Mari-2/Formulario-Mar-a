<?php
date_default_timezone_set('America/Caracas');
print "Datos del Usuario";
$Nombre = $_POST{"nombre"};
$matriz= json_decode ($Nombre);
var_dump($matriz);
$Apellido=$_POST{"apellido"};
$matriz= json_decode ($Apellido);
var_dump($matriz);
$Documentoid=$_POST{"cedula"};
$matriz= json_decode ($Documentoid);
var_dump($matriz);
$Fechadenacimiento=$_POST{"fechanaci"};
$matriz= json_decode ($Fechadenacimiento);
var_dump($matriz);
$dia_actual = date("Y-m-d");
$matriz= json_decode ($dia_actual);
var_dump($matriz);
$edad_diff = date_diff(date_create($Fechadenacimiento), date_create($dia_actual));
$matriz= json_decode ($edad_diff);
var_dump($matriz);
$Genero=$_POST{"Genero"};
$matriz= json_decode ($Genero);
var_dump($matriz);
$Telefono=$_POST{"telefono"};
$matriz= json_decode ($Telefono);
var_dump($matriz);

echo "<br/> Nombre: ".$Nombre." ";  
echo "<br/> Apellido: ".$Apellido." ";
echo "<br/>Documento de identidad: ".$Documentoid." ";
echo "<br/>Fecha de nacimiento: ".$Fechadenacimiento." ";
echo '<br/> Edad: '.$edad_diff->format('%y');
echo "<br/>Telefono ".$Telefono." ";
echo "<br/>Género ".$Genero." ";
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<body>

</body>
</html>



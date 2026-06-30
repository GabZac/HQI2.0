<?php
session_start();
require_once("conexion.php");

$id=$_SESSION["id_usuario"];

$sql="SELECT fecha, horas_dormidas
FROM registros_sueno
WHERE id_usuario=?
ORDER BY fecha";

$stmt=$conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();

$resultado=$stmt->get_result();

$fechas=[];
$horas=[];

while($fila=$resultado->fetch_assoc()){
$fechas[]=$fila["fecha"];
$horas[]=(float)$fila["horas_dormidas"];
}

echo json_encode([
"fechas"=>$fechas,
"horas"=>$horas
]);
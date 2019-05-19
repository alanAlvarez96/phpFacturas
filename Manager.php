<?php
include "Tools/DB.php";
header('Content-Type: application/json');
$cfdi=$_POST['cfdi'];
$rfc=$_POST['rfc'];
$rs=$_POST['rs'];
$dom=$_POST['dom'];
$trans=(int)['trans'];
$conexion=new DataBase();
$query="insert into cliente(rfc, razonSocial, domicilio) values ('$rfc','$rs','$dom')";
$conexion->request($query);
$query="insert into factura(rfc, idTransaccion, cfdi) VALUES ('$rfc',$trans,'$cfdi') ";
$conexion->request($query);
$conexion->disconnect();
$respuesta['status']=1;
echo json_encode($respuesta);
?>

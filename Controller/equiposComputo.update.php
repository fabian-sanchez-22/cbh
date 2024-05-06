<?php

include_once "../Model/EquipoComputo.php";
$nombre = $_POST["txtNombreMod"];
$anydesk = $_POST["txtAnydeskMod"];
$ip = $_POST["txtIpMod"];
$responsable = $_POST["txtResponsableMod"];
$fechaMantenimiento = $_POST["txtFechaMantenimientoMod"];
$id = $_POST["id"];

$equipoComputoM = new \modelo\EquipoComputo;
$equipoComputoM->setId($id);
$equipoComputoM->setNombre($nombre);
$equipoComputoM->setAnydesk($anydesk);
$equipoComputoM->setIp($ip);
$equipoComputoM->setResponsable($responsable);
$equipoComputoM->setFechaMantenimiento($fechaMantenimiento);

$response = $equipoComputoM->update();
echo json_encode($response);
unset($equipoComputoM);
unset($response);
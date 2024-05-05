<?php
include_once "../Model/EquipoComputo.php";
$anydesk = $_POST ["txtAnydesk"];
$nombre = $_POST ["txtNombre"];
$ip = $_POST ["txtIp"];
$responsable = $_POST ["txtResponsable"];
$fechaMantenimiento = $_POST ["txtFechaMantenimiento"];
$equiposComputoM = new \modelo\EquipoComputo();
$equiposComputoM->setNombre($nombre);
$equiposComputoM->setAnydesk($anydesk);
$equiposComputoM->setIp($ip);
$equiposComputoM->setResponsable($responsable);
$equiposComputoM->setFechaMantenimiento($fechaMantenimiento);
$response = $equiposComputoM->create();


echo json_encode($response);


unset($equiposComputoM);
unset($response);

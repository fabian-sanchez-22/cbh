<?php

include_once "../Model/EquipoComputo.php";
$id = $_GET ['id'];

$equipoComputoM = new \modelo\EquipoComputo;
$equipoComputoM->setId($id);
$response = $equipoComputoM->readUpdate();

echo json_encode($response);
unset($equipoComputoM);
unset($response);
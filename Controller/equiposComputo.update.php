<?php

include_once "../Model/EquipoComputo.php";

$anydesk = $_POST["txtAnydeskMod"];
$id = $_POST["id"];

$equipoComputoM = new \modelo\EquipoComputo;
$equipoComputoM->setAnydesk($anydesk);
$equipoComputoM->setId($id);

$response = $equipoComputoM->update();
echo json_encode($response);
unset($equipoComputoM);
unset($response);
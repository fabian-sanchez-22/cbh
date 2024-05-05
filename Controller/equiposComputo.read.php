<?php
include_once "../Model/EquipoComputo.php";

$equipoComputoM = new \modelo\EquipoComputo();
$response = $equipoComputoM->read();

echo json_encode($response);
unset($equipoComputoM);
unset($response);
<?php

include_once "../Model/EquipoComputo.php";

$id = $_POST["id"];
$equiposComputoM = new \modelo\EquipoComputo();
$equiposComputoM->setId($id);
$response = $equiposComputoM->delete();

echo json_encode($response);
unset($equiposComputoM);
unset($response);
<?php
include_once "../Model/EquipoComputo.php";
$anydesk = $_POST ["txtAnydesk"];
$equiposComputoM = new \modelo\EquipoComputo();
$equiposComputoM->setAnydesk($anydesk);
$response = $equiposComputoM->create();


echo json_encode($response);


unset($equiposComputoM);
unset($response);

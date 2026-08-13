<?php
$requestData = json_decode(file_get_contents('php://input'), true) ?: [];
$auth = isset($requestData['auth']) ? $requestData['auth'] : '';
for ($i = 0; $i < 4; $i++) { include $_SERVER["DOCUMENT_ROOT"] . '/include/rezume-item.php'; }
?>

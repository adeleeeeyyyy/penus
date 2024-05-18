<?php
require_once 'database/conn.php';
require_once 'controller/siswaPendaftarController.php';

$pendaftarController = new siswaPendaftarController($connection);
$pendaftarController->listPendaftar();
?>
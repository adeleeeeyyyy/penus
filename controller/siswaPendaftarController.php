<?php
require_once 'model/siswaPendaftarModel.php';

class siswaPendaftarController {
    private $pendaftarModel;

    public function __construct($connection){
        $this->pendaftarModel = new siswaPendaftarModel($connection);
    }

    public function listPendaftar() {
        $pendaftar = $this->pendaftarModel->renderDataPendaftar();
        include 'view/ppdb2024.php';
    }
}
?>
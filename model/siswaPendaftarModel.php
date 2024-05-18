<?php
class siswaPendaftarModel {
    private $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    public function renderDataPendaftar(){
        $query = "SELECT * FROM data_pendaftar";
        $result = mysqli_query($this->connection, $query);
        if ($result === false){
            die("query gagal: ".mysqli_eror($this->connection));
        }
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
?>
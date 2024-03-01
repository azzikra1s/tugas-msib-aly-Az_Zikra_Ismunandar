<?php

//data brosur penjualan mobil,motor
class Kendaraan {
    protected $jenis;
    private $harga;

    public function __construct($jenis, $harga) {
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function getHarga() {
        return $this->harga;
    }
}

class Motor extends Kendaraan {
    private $nama;

    public function __construct($jenis, $harga, $nama) {
        parent::__construct($jenis, $harga);
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Mobil extends Kendaraan {
    private $nama;
    private $jenisMobil;

    public function __construct($jenis, $harga, $nama, $jenisMobil) {
        parent::__construct($jenis, $harga);
        $this->nama = $nama;
        $this->jenisMobil = $jenisMobil;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getJenisMobil() {
        return $this->jenisMobil;
    }

    public function getInfoKendaraan() {
        return "Model Kendaraan: {$this->getNama()}, Jenis: {$this->getJenisMobil()}, Harga: {$this->getHarga()} juta.";
    }
}

$varioMotor = new Motor("Motor", 30, "Honda Vario");
$civicMobil = new Mobil("Mobil", 100, "Honda Civic", "Sedan");

echo $civicMobil->getInfoKendaraan() . "\n";

?>
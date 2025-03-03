<?php
class Anggota {
    // Properti
    private $idAnggota;
    private $nama;
    private $alamat;

    // Konstruktor
    public function __construct($idAnggota, $nama, $alamat) {
        $this->idAnggota = $idAnggota;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    // Getter dan Setter untuk ID Anggota
    public function getIdAnggota() {
        return $this->idAnggota;
    }

    public function setIdAnggota($idAnggota) {
        $this->idAnggota = $idAnggota;
    }

    // Getter dan Setter untuk Nama
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter dan Setter untuk Alamat
    public function getAlamat() {
        return $this->alamat;
    }

    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }

    // Metode untuk menampilkan informasi anggota
    public function displayInfo() {
        echo "ID Anggota: " . $this->idAnggota . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Alamat: " . $this->alamat . "<br><br>";
    }
}
?>

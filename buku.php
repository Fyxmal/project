<?php
class Buku {
    // Properti
    private $isbn;
    private $judul;
    private $pengarang;
    private $jumlahStok;

    // Konstruktor
    public function __construct($isbn, $judul, $pengarang, $jumlahStok) {
        $this->isbn = $isbn;
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->jumlahStok = $jumlahStok;
    }

    // Getter dan Setter untuk ISBN
    public function getIsbn() {
        return $this->isbn;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    // Getter dan Setter untuk Judul
    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    // Getter dan Setter untuk Pengarang
    public function getPengarang() {
        return $this->pengarang;
    }

    public function setPengarang($pengarang) {
        $this->pengarang = $pengarang;
    }

    // Getter dan Setter untuk Jumlah Stok
    public function getJumlahStok() {
        return $this->jumlahStok;
    }

    public function setJumlahStok($jumlahStok) {
        $this->jumlahStok = $jumlahStok;
    }

    // Metode untuk menampilkan informasi buku
    public function displayInfo() {
        echo "ISBN: " . $this->isbn . "<br>";
        echo "Judul: " . $this->judul . "<br>";
        echo "Pengarang: " . $this->pengarang . "<br>";
        echo "Jumlah Stok: " . $this->jumlahStok . "<br><br>";
    }
}
?>
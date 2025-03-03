<?php
require_once 'Buku.php';
require_once 'Anggota.php';

// Contoh penggunaan kelas Buku
$buku1 = new Buku("978-602-03-9244-4", "Pemrograman Berbasis Objek", "John Doe", 10);
$buku2 = new Buku("978-602-03-9288-7", "Algoritma dan Struktur Data", "Jane Doe", 5);

echo "<h2>Data Buku:</h2>";
$buku1->displayInfo();
$buku2->displayInfo();

// Contoh penggunaan kelas Anggota
$anggota1 = new Anggota("A001", "Ahmad", "Jalan Sudirman 45");
$anggota2 = new Anggota("A002", "Budi", "Jalan Merdeka 67");

echo "<h2>Data Anggota:</h2>";
$anggota1->displayInfo();
$anggota2->displayInfo();
?>
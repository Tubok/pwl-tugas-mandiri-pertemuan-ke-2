<?php
include 'Mahasiswa.php';
include 'MataKuliah.php';
include 'MahasiswaTransfer.php';

$daftar_nilai = [
	"1" => ["sks" => 4, "nilai" => "A"],
	"2" => ["sks" => 3, "nilai" => "B"],
	"3" => ["sks" => 2, "nilai" => "C"],
	"4" => ["sks" => 4, "nilai" => "B"],
];

$mahasiswa_1 = new MahasiswaTransfer($daftar_nilai);
$matkul_1 = new MataKuliah();
$matkul_2 = new MataKuliah();

$matkul_1->setData('A11.12345', 'Pemrograman Berbasis Web');
$matkul_2->setData('A11.12346', 'Pemrograman Web Lanjut');

$mahasiswa_1->setData('A11.2024.15964', 'David Cornelius Saputra', [$matkul_1, $matkul_2], '2006-1-13);

echo '<pre>';
print_r($mahasiswa_1);
echo '</pre>';
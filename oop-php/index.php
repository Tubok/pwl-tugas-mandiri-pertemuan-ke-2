<?php
include "Mahasiswa.php";

$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');

$mahasiswa_1 = new Mahasiswa();
$mahasiswa_1->setData('A11.2024.15964', 'David Cornelius Saputra', 'Teknik Informatika');

echo "Data Mahasiswa: <br>";
$mahasiswaTI->printData();
$mahasiswa_1->printData();
<?php

$mahasiswa = [
    "nama" => "Raihan Wendra Baswara",
    "prodi" => "informatika",
    "fakultas" => "FIF",
    "sisa_uang" => 5000000,
    "hutang_perpusatkaan " => false,
    "ipk"   => 3.3
];


$jumlah_sks = 20;
$harga_per_sks  = 150000;
$total_tagihan = $jumlah_sks * $harga_per_sks;
$sisa_uang = $mahasiswa["sisa_uang"] - $total_tagihan;

function cek_keuangan($sisa_uang){
    if ($sisa_uang >= 0){
        echo "Lunas, bisa ambil sks";
    } else {
        echo "Ditolak, uang kurang";
    }
}

function status_akademik($sisa_uang, $mahasiswa){
    if (($mahasiswa["ipk"] >= 3.0 && $mahasiswa["sisa_uang"] >= 0) || ($mahasiswa["hutang_perpusatkaan "] == false && $mahasiswa["sisa_uang"] >= 0)){
        echo "Diterima, bisa ambil sks";
    } else {
        echo "Ditolak, ipk atau sisa uang tidak memenuhi syarat";
    }
}
 

echo "=========BIODATA MAHASISWA=========". "<br>";
echo "Nama: " . $mahasiswa["nama"] . "<br>";
echo "Prodi: " . $mahasiswa["prodi"] . "<br>";
echo "Fakultas: " . $mahasiswa["fakultas"] . "<br>";
echo "Sisa Uang: " . "Rp. " . $mahasiswa["sisa_uang"] . "<br>";
echo "Hutang Perpusatkaan: " . ($mahasiswa["hutang_perpusatkaan "] ? "Ada" : "Tidak Ada") . "<br>";
echo "IPK: " . $mahasiswa["ipk"] . "<br>";
echo "Total Tagihan: " . "Rp. " . $total_tagihan . "<br>";
echo "Sisa Uang Setelah Bayar: " . "Rp. " . $sisa_uang . "<br>";
echo "Status KRS: " ;
cek_keuangan($sisa_uang);
echo "<br>";
echo "Status Akademik: ";
status_akademik($sisa_uang, $mahasiswa);
echo "<br>";




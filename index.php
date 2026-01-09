<?php
$nama = "Raihan Wendra Baswara";
$umur = 19 ;
$jumlahTabungan = 200000000;
$hobi = ["Mancing", "Main Game", "Main bola"];

echo "namaku: $nama <br>"; 
echo "umur: $umur<br> "; 
echo "tabungan:  $jumlahTabungan<br> "; 

if ($jumlahTabungan > 0){
    echo "status keuangan : saya sekarang memiliki uang";
} else {
    echo "status keuangan : saya sekarang tidak ada uang";
}

foreach ($hobi as $key => $value){
    $x = $key + 1;
    echo "<br>hobi ke- $x = $value";
}

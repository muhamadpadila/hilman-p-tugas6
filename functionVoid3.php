<?php
// Membuat fungsi
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi yang sudah dibuat
perkenalan("Jarwo", "Hi");
echo "<hr>";

$saya = "Bambang";
$ucapanSalam = "Selamat pagi";

// Memanggilnya lagi tanpa mengisi parameter $salam
perkenalan($saya);
?>

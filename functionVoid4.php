<?php
// Membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// Memanggil fungsi yang sudah dibuat
echo "Umur saya adalah " . hitungUmur(2003, 2022) . " tahun";
?>

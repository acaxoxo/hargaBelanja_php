<?php
function hitungDiskon($totalBelanja) {
    $diskon = 0;
    if ($totalBelanja >= 100000) {
        $diskon = 0.10;
    } elseif ($totalBelanja >= 50000) {
        $diskon = 0.05;
    }  
    return $diskon;
}

function hitungTotalBayar($totalBelanja) {
    $diskon = hitungDiskon($totalBelanja);
    $jumlahDiskon = $totalBelanja * $diskon;
    $totalBayar = $totalBelanja - $jumlahDiskon;
    return $totalBayar;
}

$totalBelanja = 45000;
$totalBayar = hitungTotalBayar($totalBelanja);

echo "Total belanja: Rp. " . number_format($totalBelanja, 2, ',', '.') . "\n";
echo "Total yang harus dibayar setelah diskon: Rp. " . number_format($totalBayar, 2, ',', '.') . "\n";
?>
<?php

$nilai = [80, 78, 72, 84, 92, 88];

echo "Nilai saya = ";
foreach ($nilai as $total) {
    echo "<b>$total</b> ";
}
echo "<br>";

// Mencari nilai terbesar
echo "Dari keseluruhan, nilai yang paling tinggi adalah = <b>" . max($nilai) . "</b><br>";
// Mencari nilai terkecil
echo "Sedangkan nilai yang paling kecil adalah = <b>" . min($nilai) . "</b><br>";


// Mengurutkan nilai dari yang terkecil
sort($nilai);
echo "Apabila diurutkan dari yang terkecil menjadi = ";
foreach ($nilai as $angka) {
    echo "<b>$angka</b> ";
}
echo "<br>";b 

// Mengurutkan nilai dari yang terbesar
rsort($nilai);
echo "Apabila diurutkan dari yang terbesar menjadi = ";
foreach ($nilai as $angka) {
    echo "<b>$angka</b> ";
}
echo "<br>";

// Mencari nilai rata-rata
$rata_rata = round(array_sum($nilai) / count($nilai));
echo "Rata-rata dari keseluruhan nilai saya adalah = <b>$rata_rata</b> <br>";

// Mengubah nilai 72 menjadi 75 karena perbaikan
$nilai[2] = 75;
echo "Setelah mendapatkan perbaikan dari <b>72</b>, saya mendapat nilai = <b>$nilai[2]</b> <br>";

// Menampilkan nilai sekarang
echo "Jadi nilai saya sekarang = ";
foreach ($nilai as $angka) {
    echo "<b>$angka</b> ";
}
echo "<br>";

// Mengurutkan nilai dari yang terbesar setelah perubahan
rsort($nilai);
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi = ";
foreach ($nilai as $angka) {
    echo "<b>$angka</b> ";
}
echo "<br>";

?>

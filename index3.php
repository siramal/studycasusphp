<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

echo "<ol>";
foreach ($data as $orang) {
    $tahun = $orang['tahun'];
    echo "<li>" . $orang['nama'] . " : lahir" . (($tahun % 4 == 0 && ($tahun % 100 != 0 || $tahun % 400 == 0)) ? "" : " BUKAN") . " pada tahun kabisat (" . $tahun . ")</li>";
}
echo "</ol>";
?>

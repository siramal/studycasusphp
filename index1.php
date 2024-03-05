<?php
    
    $nilai = 90; 

    $hasil = ($nilai >= 75) ? 'Kompeten' : 'Belum Kompeten';
   
    $warna = ($nilai >= 75) ? 'green' : 'red';

    echo "Nilai kompetensi: {$nilai} <span style='color: {$warna};'>($hasil)</span>";
?>
<?php
class NilaiMahasiswa {
    public function getNilaiRataRata($nTugas, $nKuis, $nUTS, $nUAS) {
        $rataRata = ($nTugas + $nKuis + $nUTS + $nUAS) / 4;
        return $rataRata;
    }
}

$nilai = new NilaiMahasiswa();
 
$tugas = 80;
$kuis = 80;
$UTS = 85;
$UAS = 90;

$hasilRataRata = $nilai->getNilaiRataRata($tugas, $kuis, $UTS, $UAS);

echo "**********Hasilnya adalah************\n<br>";
echo "Tugas : " . $tugas . "\n<br>";
echo "Kuis  : " . $kuis . "\n<br>";
echo "UTS   : " . $UTS . "\n<br>";
echo "UAS   : " . $UAS . "\n<br>";
echo "Nilai Rata-rata: " . $hasilRataRata . "\n<br>";

?>
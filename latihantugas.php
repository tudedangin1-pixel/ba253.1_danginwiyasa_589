<?php

class Mahasiswa {
    public $nama;
    public $nim;
    private $nilai;

    public function setNilai($nilai) {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
        } else {
            echo "Nilai $nilai tidak valid!<br>";
        }
    }

    public function getNilai() {
        return $this->nilai;
    }

    public function getPredikat() {
        if ($this->nilai >= 85) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 55) {
            return "C";
        } else {
            return "D";
        }
    }
}

$mhs1 = new Mahasiswa();
$mhs1->nama = "Andi";
$mhs1->nim = "22030101";
$mhs1->setNilai(88);

echo "Nama: " . $mhs1->nama . "<br>";
echo "NIM: " . $mhs1->nim . "<br>";
echo "Nilai: " . $mhs1->getNilai() . "<br>";
echo "Predikat: " . $mhs1->getPredikat() . "<br><hr>";

$mhs2 = new Mahasiswa();
$mhs2->nama = "Budi";
$mhs2->nim = "22030102";

echo "Nama: " . $mhs2->nama . "<br>";
echo "NIM: " . $mhs2->nim . "<br>";
$mhs2->setNilai(120);

?>
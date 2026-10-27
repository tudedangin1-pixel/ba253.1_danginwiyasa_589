<?php

class Pegawai {
    protected $nama;
    protected $gaji;

    public function __construct ($nama, $gaji){
        $this->nama = $nama;
        $this->gaji = $gaji;

    }
    public function tampilkanInfo (){
        echo "Nama : " . $this->nama . "<br>";
        echo "Gaji : Rp" . number_format($this->gaji, 0, ',', '.') . "<br>";
    }
}

class Manager extends Pegawai {
    private $tunjangan;

    public function __construct($nama, $gaji, $tunjangan){
        parent::__construct($nama,$gaji);
        $this->tujangan = $tunjangan;

    }
    public function tampilkanInfo(){
        parent::tampilkanInfo();
        echo "Tunjangan: Rp" . number_format($this->tunjangan, 0, ',','.') . "<br>";

    }
}
 
class Staf extends Pegawai{
    private $lembur;

    public function __construct($nama, $gaju, $lembur){
        parent::__construct($nama, $gaji);
        $this->lembur = $lembur;

    }
    public function tampilkanInfo(){
        parent::tampilkanInfo();
        echo " Lembur : Rp" . number_format($this->lembur, 0, ',','.') . "<br>";
        
    }
}

echo "<h3>Informasi Pegawai Umum</h3>";
$pegawai1 = new Pegawai("Budi", 4000000);
$pegawai1->tampilkanInfo();

echo "<hr>";

echo "<h3>Informasi Manager</h3>";
$manager1 = new Manager("Siti", 7000000, 2500000);
$manager1->tampilkanInfo();

echo "<hr>";

echo "<h3>Informasi Staf</h3>";
$staf1 = new Staf("Joko", 3500000, 500000);
$staf1->tampilkanInfo();

?>
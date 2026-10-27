<?php

class kendaraan {
    
    Protected $merek;
    Protected $warna;

    public function __construct($pMerk, $pWarna)
    {
        $this->merk = $pMerk;
        $this->warna = $pWarna;

    }

    public function nyalakan()
    {
        echo $this->merk ." Berwarna " .$this->warna . "dinyalakan. <br>";
    }
}


class Motor extends Kendaraan {
    public function bunyiKlakson(){
        echo $this->merk . "Bunyi Kelakson Motor : Blar Blar";

    }

}

class Mobil extends Kendaraan {
    public function klakson(){
        echo $this->merk . "Bunyi Kelakson Mobil : Duar Duar";
        
    }
}

$motor1 = new Motor("Yamaha", 'Biru');
$motor1->nyalakan();
echo "<br>";
$motor1->bunyiKlakson();
echo "<hr>";

$mobil1 = new Mobil("Tesla", 'Putih');
$mobil1->nyalakan();
echo "<br>";
$mobil1->Klakson();
<?php
class Mobil1 {
    public function nyalakan ($model){
        echo "Mobil $model dinyalakan . <br>";
    }
}

$mobil = new Mobil1 ();

$mobil->nyalakan("Pajero" . "Fortuner");
$mobil->nyalakan("Wuling" . "AirEV");
?>
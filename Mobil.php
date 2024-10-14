<?php
class Mobil {
    // Properti
    public $nama;
    public $merk;

    function Cetak_Info() {
        echo "Nama Mobil: $this->nama, Merk: $this->merk";
    }
}

class MobilSports extends Mobil {
    public $speed;

    function Turbo() {
        echo "Speed: $this->speed";
    }
}

class CityCar extends Mobil {
    public $model;

    function Irit() {
        echo "Model: $this->model";
    }

    function Sensor() {
        echo "Sensor aktif untuk model: $this->model";
    }
}
//Mobil Biasa
$mobil2 = new MobilSports();
$mobil2->nama = "Kijang";
$mobil2->merk = "Toyota";
$mobil2->Cetak_Info();

echo "<br />";
//Mobil Sports
$mobil2 = new MobilSports();
$mobil2->nama = "Porsche 911";
$mobil2->merk = "Porsche AG, Jerman";
$mobil2->speed = "320 kmph";
$mobil2->Cetak_Info();
echo "<br />";
$mobil2->Turbo();

echo "<br />";
//City Car
$mobil3 = new CityCar();
$mobil3->nama = "Ayla";
$mobil3->merk = "Daihatsu";
$mobil3->model = "Mobil Irit";
$mobil3->Cetak_Info();
echo "<br />";
$mobil3->Irit();
echo "<br />";
$mobil3->Sensor();
?>

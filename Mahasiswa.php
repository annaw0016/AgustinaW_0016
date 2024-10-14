<?php
class Mahasiswa{
    //properti
    public $nama;
    public $nim;
    public $jurusan;

    //Method
    function Cetak_Info(){
        echo "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
        
    }
}
    //penggunaan
    $data_mahasiswa = new Mahasiswa();
    echo var_dump($data_mahasiswa);
    echo "<br />";
    $data_mahasiswa->nama = "Anna";
    $data_mahasiswa->nim = "23.230.0016";
    $data_mahasiswa->jurusan = "Sistem Informasi";
    $data_mahasiswa->Cetak_Info();
    ?>

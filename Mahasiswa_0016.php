<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    function cetakInfo() {
        echo "Mahasiswa bernama: $this->nama<br>";
        echo "NIM: $this->nim<br>";
        echo "jurusan: $this->jurusan<br>";
    }
}

// Class MahasiswaAktif turunan class Mahasiswa
class MahasiswaAktif extends Mahasiswa {
    public $semester;
    public $status;

    function infoStatus() {
        echo "Semester: $this->semester<br>";
        echo "Status: $this->status<br>";
    }
}

// Class MahasiswaBeasiswa turunan class MahasiswaAktif
class MahasiswaBeasiswa extends MahasiswaAktif {
    public $jenisBeasiswa;
    public $besaranBeasiswa;

    function infoBeasiswa() {
        echo "Jenis Beasiswa: $this->jenisBeasiswa<br>";
        echo "Besaran Beasiswa: Rp $this->besaranBeasiswa<br>";
    }
}

// Class MahasiswaMagang turunan class MahasiswaAktif
class MahasiswaMagang extends MahasiswaAktif {
    public $perusahaanMagang;
    public $lamaMagang; // dalam bulan

    function infoMagang() {
        echo "Perusahaan Magang: $this->perusahaanMagang<br>";
        echo "Lama Magang: $this->lamaMagang bulan<br>";
    }
}

// Contoh penggunaan class MahasiswaAktif
$mahasiswa1 = new MahasiswaAktif();
$mahasiswa1->nama = "Anna";
$mahasiswa1->nim = "23.230.0016";
$mahasiswa1->jurusan = "Sistem Informasi";
$mahasiswa1->semester = "3";
$mahasiswa1->status = "Aktif";
$mahasiswa1->cetakInfo();
$mahasiswa1->infoStatus();
echo "<br>";

// Contoh penggunaan class MahasiswaBeasiswa
$mahasiswaBeasiswa = new MahasiswaBeasiswa();
$mahasiswaBeasiswa->nama = "Budi";
$mahasiswaBeasiswa->nim = "23.230.0023";
$mahasiswaBeasiswa->jurusan = "Teknik Informatika";
$mahasiswaBeasiswa->semester = "4";
$mahasiswaBeasiswa->status = "Aktif";
$mahasiswaBeasiswa->jenisBeasiswa = "Beasiswa Unggulan";
$mahasiswaBeasiswa->besaranBeasiswa = 5000000;
$mahasiswaBeasiswa->cetakInfo();
$mahasiswaBeasiswa->infoStatus();
$mahasiswaBeasiswa->infoBeasiswa();
echo "<br>";

// Contoh penggunaan class MahasiswaMagang
$mahasiswaMagang = new MahasiswaMagang();
$mahasiswaMagang->nama = "Citra";
$mahasiswaMagang->nim = "23.230.0035";
$mahasiswaMagang->jurusan = "Manajemen Informatika";
$mahasiswaMagang->semester = "5";
$mahasiswaMagang->status = "Aktif";
$mahasiswaMagang->perusahaanMagang = "PT. Teknologi Cerdas";
$mahasiswaMagang->lamaMagang = 6;
$mahasiswaMagang->cetakInfo();
$mahasiswaMagang->infoStatus();
$mahasiswaMagang->infoMagang();
echo "<br>";

// Menggunakan var_dump untuk menampilkan informasi dari objek MahasiswaAktif
echo var_dump($mahasiswa1);
echo "<br>";
echo var_dump($mahasiswaBeasiswa);
echo "<br>";
echo var_dump($mahasiswaMagang);
?>

<?php
class mobil
{
    public string $nama;
    public string $merk;


    function __construct ($nama, $merk  )
    {
        $this->nama = $nama;
        $this->merk = $merk;

    }

    function infomobil()
    {
        echo "Nama Mobil : $this->nama, Merk : $this->merk\n";
    }
}

// class MobilSport
class MobilSport extends mobil {
    public $speed;

    // Constructor
    public function __construct($nama, $merk, $speed) {
        parent::__construct($nama, $merk); // Call parent constructor
        $this->speed = $speed;
    }

    // Override CetakInfo to include additional info
    public function turbo() {
        echo "Turbo mode diaktifkan! </br> Kecepatan: " . $this->speed . " km/h.</br>";
    }
}

// class CityCar
class CityCar extends mobil {
    public $model;

    // Constructor
    public function __construct($nama, $merk, $model) {
        parent::__construct($nama, $merk); // Call parent constructor
        $this->model = $model;
    }

    public function irit() {
        echo "CityCar ini irit bahan bakar.</br>";
    }

    public function sensor() {
        echo "Sensor deteksi objek aktif.</br>";
    }

    // Override CetakInfo to include additional info
    
}

// Example usage:
// MobilSport
$MobilSport = new MobilSport("F40", "Ferrari", 367);
$MobilSport->infomobil();
$MobilSport->turbo();

echo "</br>";

// CityCar
$cityCar = new CityCar("Yaris", "Toyota", "1.5 G CVT");
$cityCar->infomobil();
$cityCar->irit();
$cityCar->sensor();
?>
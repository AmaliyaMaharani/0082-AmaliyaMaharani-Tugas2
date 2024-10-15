<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil Sport dan City Car</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f7;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            color: #ffffff;
            background-color: #001f3f;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .car-info {
            background-color: #ffffff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .car-info img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .car-details {
            padding: 10px;
            font-size: 16px;
            color: #001f3f;
        }
        .car-details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Kelas Induk
    class Mobil {
        public $nama;
        public $merk;
        public $image;

        public function __construct($nama, $merk, $image) {
            $this->nama = $nama;
            $this->merk = $merk;
            $this->image = $image;
        }

        public function tampilkanInfo() {
            echo "<div class='car-info'>";
            echo "<img src='$this->image' alt='$this->nama'>";
            echo "<div class='car-details'>";
            echo "<p><strong>Nama Mobil:</strong> $this->nama</p>";
            echo "<p><strong>Merk:</strong> $this->merk</p>";
            echo "</div>";
        }
    }

    // Kelas Turunan Mobil Sport
    class MobilSport extends Mobil {
        public $speed;
        public $turbo;

        public function __construct($nama, $merk, $speed, $turbo, $image) {
            parent::__construct($nama, $merk, $image);
            $this->speed = $speed;
            $this->turbo = $turbo;
        }

        public function tampilkanInfo() {
            echo "<h2>Mobil Sport</h2>";
            parent::tampilkanInfo();
            echo "<div class='car-details'>";
            echo "<p><strong>Speed:</strong> $this->speed km/h</p>";
            echo "<p><strong>Turbo:</strong> $this->turbo</p>";
            echo "</div>";
            echo "</div>";
        }
    }

    // Kelas Turunan City Car
    class CityCar extends Mobil {
        public $model;
        public $irit;
        public $sensor;

        public function __construct($nama, $merk, $model, $irit, $sensor, $image) {
            parent::__construct($nama, $merk, $image);
            $this->model = $model;
            $this->irit = $irit;
            $this->sensor = $sensor;
        }

        public function tampilkanInfo() {
            echo "<h2>City Car</h2>";
            parent::tampilkanInfo();
            echo "<div class='car-details'>";
            echo "<p><strong>Model:</strong> $this->model</p>";
            echo "<p><strong>Irit:</strong> $this->irit</p>";
            echo "<p><strong>Sensor:</strong> $this->sensor</p>";
            echo "</div>";
            echo "</div>";
        }
    }

    // Contoh Penggunaan
    $mobilSport = new MobilSport("McLaren", "720s", 341, "Yes", "mclaren.jpg");
    $mobilSport->tampilkanInfo();

    echo "\n";

    $cityCar = new CityCar("Daihatsu Ayla", "Daihatsu", "2023", "21 km/liter", "Sensor parkir belakang", "ayla.jpg");
    $cityCar->tampilkanInfo();
    ?>
</div>

</body>
</html>

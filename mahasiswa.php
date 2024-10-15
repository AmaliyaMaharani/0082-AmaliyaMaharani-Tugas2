<?php
// Class Mahasiswa
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
    public $semester;
    public $ipk; // Tambahkan atribut IPK

    // Constructor untuk inisialisasi
    public function __construct($nama, $nim, $jurusan, $semester, $ipk) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->semester = $semester;
        $this->ipk = $ipk; // Inisialisasi IPK
    }

    // Method untuk menampilkan informasi mahasiswa
    public function tampilkanInfo() {
        echo "<div class='info-box'>";
        echo "<p><strong>Nama:</strong> " . $this->nama . "</p>";
        echo "<p><strong>NIM:</strong> " . $this->nim . "</p>";
        echo "<p><strong>Jurusan:</strong> " . $this->jurusan . "</p>";
        echo "<p><strong>Semester:</strong> " . $this->semester . "</p>";
        echo "<p><strong>IPK:</strong> " . $this->ipk . "</p>"; // Tampilkan IPK
        echo "</div>";
    }
}

// Turunan untuk jenjang D3
class MahasiswaD3 extends Mahasiswa {
    public $prodi; // Tambahan properti spesifik D3

    // Constructor dengan properti tambahan
    public function __construct($nama, $nim, $jurusan, $semester, $ipk, $prodi) {
        parent::__construct($nama, $nim, $jurusan, $semester, $ipk);
        $this->prodi = $prodi;
    }

    // Method khusus untuk menampilkan informasi prodi D3
    public function tampilkanInfoD3() {
        echo "<h2 class='title-d3'>Informasi Mahasiswa D3</h2>";
        $this->tampilkanInfo();
        echo "<p><strong>Program Studi:</strong> D3 " . $this->prodi . "</p>";
    }
}

// Turunan untuk jenjang S1
class MahasiswaS1 extends Mahasiswa {
    public $fakultas; // Tambahan properti spesifik S1

    // Constructor dengan properti tambahan
    public function __construct($nama, $nim, $jurusan, $semester, $ipk, $fakultas) {
        parent::__construct($nama, $nim, $jurusan, $semester, $ipk);
        $this->fakultas = $fakultas;
    }

    // Method khusus untuk menampilkan informasi fakultas S1
    public function tampilkanInfoS1() {
        echo "<h2 class='title-s1'>Informasi Mahasiswa S1</h2>";
        $this->tampilkanInfo();
        echo "<p><strong>Fakultas:</strong> " . $this->fakultas . "</p>";
    }
}

// Membuat objek untuk Mahasiswa D3
$mahasiswaD3 = new MahasiswaD3("Sebastian Vettel", "23.220.0020", "Komputerisasi Akuntansi", 4, 3.75, "Komputerisasi Akuntansi");

// Membuat objek untuk Mahasiswa S1
$mahasiswaS1 = new MahasiswaS1("Amaliya Maharani", "23.230.0082", "Sistem Informasi", 3, 3.90, "Fakultas Ilmu Komputer");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Mahasiswa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .title-d3 {
            color: #6c63ff; /* Warna pastel ungu */
        }
        .title-s1 {
            color: #ff6584; /* Warna pastel pink */
        }
        .info-box {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            border: 2px solid #e0e0e0;
            transition: all 0.3s ease;
        }
        .info-box:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-color: #ddd;
        }
        .info-box p {
            margin: 10px 0;
            font-size: 16px;
        }
        .info-box p strong {
            color: #444;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
        }
        /* Pastel theme colors */
        body {
            background-color: #f7f3e9; /* Warna pastel krem */
        }
        h2.title-d3 {
            background-color: #e0d7ff; /* Latar belakang ungu pastel */
            padding: 10px;
            border-radius: 10px;
        }
        h2.title-s1 {
            background-color: #ffe0e6; /* Latar belakang pink pastel */
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Menampilkan informasi mahasiswa D3
    $mahasiswaD3->tampilkanInfoD3();

    // Menampilkan informasi mahasiswa S1
    $mahasiswaS1->tampilkanInfoS1();
    ?>
</div>

</body>
</html>

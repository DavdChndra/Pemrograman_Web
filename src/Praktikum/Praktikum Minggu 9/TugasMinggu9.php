<?php
echo "<h2>Praktikum Pemrograman Web (Minggu 9)</h2>";

// SOAL 1
$nama_lengkap = "David Chandra"; // Ganti disini
$kelas = "S1IT-KJ-23-003"; // Ganti disini
$nim = "103062330056"; // Ganti disini
echo "<h3>1. Variabel</h3>";
echo "Nama: $nama_lengkap <br>";
echo "Kelas: $kelas <br>";
echo "NIM: $nim <br>";

// SOAL 2
echo "<h3>2. Percabangan (IF-ELSE)</h3>";
$nilai = 95; // Ganti disini
if ($nilai >= 81 && $nilai <= 100) {
    $indeks = "A";
} elseif ($nilai >= 70 && $nilai <= 80) {
    $indeks = "AB";
} else {
    $indeks = "Tidak Lulus";
}
echo "Nilai: $nilai <br>Indeks: $indeks <br>";

// SOAL 3
echo "<h3>3. Perulangan FOR</h3>";
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}
echo "";

// SOAL 4
echo "<h3>4. Function</h3>";
function sapa($nama = "Mahasiswa") {
    echo "Selamat datang, $nama!<br>";
}
sapa("Ari");
sapa();
echo "";

// SOAL 5
echo "<h3>5. Array</h3>";
$nama = array("udin", "ari", "sapii");
echo $nama[1] . "<br>";
echo $nama[2] . "<br>";
echo $nama[0] . "<br>";
echo "";

// SOAL 6
echo "<h3>6. While Loop Bilangan Genap</h3>";
$i = 2;
while ($i <= 50) {
    echo $i . " ";
    $i += 2;
}
echo "";

// SOAL 7
echo "<h3>7. Function Luas Persegi Panjang</h3>";
function luasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}
$panjang = 15; // Ganti disini
$lebar = 5; // Ganti disini
$hasil = luasPersegiPanjang($panjang, $lebar);
echo "Luas Persegi Panjang $panjang * $lebar = $hasil<br>";

// SOAL 8
echo "<h3>8. Operasi Matematika</h3>";
$a = 30; // Ganti disini
$b = 5;     
echo "Angka 1: $a<br>";
echo "Angka 2: $b<br>";
echo "Penjumlahan: " . ($a + $b) . "<br>";
echo "Pengurangan: " . ($a - $b) . "<br>";
echo "Perkalian: " . ($a * $b) . "<br>";
echo "Pembagian: " . ($a / $b) . "<br>";

// SOAL 9
echo "<h3>9. Form PHP Hitung Penjumlahan</h3>";
?>
<form method="post">
    Angka 1: <input type="number" name="angka1" required><br>
    Angka 2: <input type="number" name="angka2" required><br>
    <button type="submit" name="hitung">Hitung</button>
</form>
<?php
if (isset($_POST['hitung'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $hasil = $angka1 + $angka2;
    echo "Hasil Penjumlahan: $hasil<br>";
}
echo "";

// SOAL 10
echo "<h3>10. Tanggal dan Waktu</h3>";
date_default_timezone_set("Asia/Jakarta");
$hari = date("l");
$hari_indo = [
    "Sunday" => "Minggu",
    "Monday" => "Senin",
    "Tuesday" => "Selasa",
    "Wednesday" => "Rabu",
    "Thursday" => "Kamis",
    "Friday" => "Jumat",
    "Saturday" => "Sabtu"
];
$tanggal = date("d F Y");
$jam = date("H:i:s");
echo "Hari ini: " . $hari_indo[$hari] . ", " . date("d M Y") . "<br>";
echo "Waktu sekarang: $jam";
?>
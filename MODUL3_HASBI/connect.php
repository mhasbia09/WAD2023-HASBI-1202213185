<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->
<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = "localhost";
$dbuser = "root";
$dbname = "modul3_wad";
$dbpass = "";
$conn = mysqli_connect($dbhost, $dbuser, $dbname, $dbpass);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if($conn) {
    echo "<script>alert('Koneksi Berhasil');</script>";
} else {
    echo "<script>alert('Koneksi Gagal: ');</script>";
}
// 
?>
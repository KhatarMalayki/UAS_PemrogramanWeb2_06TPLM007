<?php
/***************************************************
Halaman ini merupakan contoh halaman pemeriksaan session. Pemeriksaan session biasanya
dilakukan jika suatu halaman memiliki akses terbatas. Misalnya harus login terlebih dahulu.
****************************************************/
session_start();
//pemeriksaan session
if (isset($_SESSION['login'])) {
//jika sudah login
//menampilkan isi session
echo "<h1>Selamat Datang ". $_SESSION['login'] ."</h1>";
echo "<h2>Halaman ini hanya bisa diakses jika Anda sudah login</h2>";
echo "<h2>Klik <a href='home.php'>di sini</a> untuk menuju homepage</h2>";
} else {
//session belum ada artinya belum login
die ("Anda belum login! Anda tidak berhak masuk ke halaman
ini.Silahkan login <a href='index.html'>di sini</a>");}
?>
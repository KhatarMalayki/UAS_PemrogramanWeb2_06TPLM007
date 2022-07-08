<html>
<head>
 <title>Login</title>
</head>
<?php
/****************************************************
Halaman ini merupakan halaman contoh penciptaan session. Perintah session_start() harus
ditaruh di perintah pertama tanpa spasi di depannya. Perintah session_start() harus ada pada
setiap halaman yang berhubungan dengan session
*****************************************************/
//echo "Hallo...";
session_start();
if (isset ($_POST['Login'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];//periksa login
if ($user == "RakaSubagja" && $pass = "191011401179") {
//menciptakan session
$_SESSION['login'] = $user;
//menuju ke halaman pemeriksaan session
echo "<h1>Anda berhasil LOGIN</h1>";
echo "<h2>Klik <a href='session2.php'>di sini</a>
untuk menuju ke halaman pemeriksaan session";
} elseif ($user == "khatar" && $pass = "191011401166") {
    //menciptakan session
    $_SESSION['login'] = $user;
    //menuju ke halaman pemeriksaan session
    echo "<h1>Anda berhasil LOGIN</h1>";
    echo "<h2>Klik <a href='session2.php'>di sini</a>
    untuk menuju ke halaman pemeriksaan session";
}elseif($user == "rafly" && $pass = "201299") {
    //menciptakan session
    $_SESSION['login'] = $user;
    //menuju ke halaman pemeriksaan session
    echo "<h1>Anda berhasil LOGIN</h1>";
    echo "<h2>Klik <a href='session2.php'>di sini</a>
    untuk menuju ke halaman pemeriksaan session";
}elseif($user == "novia" && $pass = "201299") {
    //menciptakan session
    $_SESSION['login'] = $user;
    //menuju ke halaman pemeriksaan session
    echo "<h1>Anda berhasil LOGIN</h1>";
    echo "<h2>Klik <a href='session2.php'>di sini</a>
    untuk menuju ke halaman pemeriksaan session";
}elseif($user == "fajar" && $pass = "201299") {
    //menciptakan session
    $_SESSION['login'] = $user;
    //menuju ke halaman pemeriksaan session
    echo "<h1>Anda berhasil LOGIN</h1>";
    echo "<h2>Klik <a href='session2.php'>di sini</a>
    untuk menuju ke halaman pemeriksaan session";
} else{
echo "user tidak bisa login";
echo "<h2>Klik <a href='index.php'>di sini</a>
untuk menuju ke halaman login";

}
} 
?>
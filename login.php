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
} elseif ($user == "MohamadKhatarMalayki" && $pass = "191011401166") {
    //menciptakan session
    $_SESSION['login'] = $user;
    //menuju ke halaman pemeriksaan session
    echo "<h1>Anda berhasil LOGIN</h1>";
    echo "<h2>Klik <a href='session2.php'>di sini</a>
    untuk menuju ke halaman pemeriksaan session";
}elseif($user == "RaflyZahrandiPermana" && $pass = "191011401133") {
    //menciptakan session
    $_SESSION['login'] = $user;
    //menuju ke halaman pemeriksaan session
    echo "<h1>Anda berhasil LOGIN</h1>";
    echo "<h2>Klik <a href='session2.php'>di sini</a>
    untuk menuju ke halaman pemeriksaan session";
}elseif($user == "NoviaIsnaini" && $pass = "191011402705") {
    //menciptakan session
    $_SESSION['login'] = $user;
    //menuju ke halaman pemeriksaan session
    echo "<h1>Anda berhasil LOGIN</h1>";
    echo "<h2>Klik <a href='session2.php'>di sini</a>
    untuk menuju ke halaman pemeriksaan session";
}elseif($user == "MuhammadFajarHandika" && $pass = "191011402404") {
    //menciptakan session
    $_SESSION['login'] = $user;
    //menuju ke halaman pemeriksaan session
    echo "<h1>Anda berhasil LOGIN</h1>";
    echo "<h2>Klik <a href='session2.php'>di sini</a>
    untuk menuju ke halaman pemeriksaan session";
}elseif($user == "MuhamadIchsanDarmawan" && $pass = "191011401142") {
    //menciptakan session
    $_SESSION['login'] = $user;
    //menuju ke halaman pemeriksaan session
    echo "<h1>Anda berhasil LOGIN</h1>";
    echo "<h2>Klik <a href='session2.php'>di sini</a>
    untuk menuju ke halaman pemeriksaan session";
}elseif($user == "Dosen" && $pass = "123") {
    //menciptakan session
    $_SESSION['login'] = $user;
    //menuju ke halaman pemeriksaan session
    echo "<h1>Anda berhasil LOGIN</h1>";
    echo "<h2>Klik <a href='session2.php'>di sini</a>
    untuk menuju ke halaman pemeriksaan session";
} else{
echo "user tidak bisa login";
echo "<h2>Klik <a href='index.html'>di sini</a>
untuk menuju ke halaman login";

}
} 
?>
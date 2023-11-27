<?
session_start();

//Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
	//Jika belum, arahkan kembali ke halaman login
	header("Location: Tugas5e.php");
	exit();
}

// Ambil username dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<center><h2>Selamat Datang, Admin</h2>
	<p>Ini Adalah Halaman Admin.</p>
	<p>Username Anda: <?php echo $username; ?></p></center>
</body>
</html>
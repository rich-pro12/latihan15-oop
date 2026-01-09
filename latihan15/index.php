<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>

<?php include 'includes/nav.php'; ?>

<?php
$file = "public/".$page.".php";
if(file_exists($file)){
    include $file;
}else{
    echo "<h3>Halaman tidak ditemukan</h3>";
}
?>

</body>
</html>

<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:?page=login");
}
?>
<h3>Dashboard</h3>
<p>Halo, <?=$_SESSION['nama_lengkap']?></p>
<a href="?page=kelola_kategori">Kelola Kategori</a>

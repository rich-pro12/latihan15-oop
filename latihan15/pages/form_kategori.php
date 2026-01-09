<?php
require 'includes/config.php';
$conn = db_connect();

if($_POST){
    mysqli_query($conn,"INSERT INTO tbl_kategori VALUES
    ('$_POST[id]','$_POST[nama]')");
    header("Location:?page=kelola_kategori");
}
?>

<form method="post">
ID <input name="id"><br>
Nama <input name="nama"><br>
<button>Simpan</button>
</form>

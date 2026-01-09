<?php
session_start();
require 'includes/config.php';
$conn = db_connect();

$data = mysqli_query($conn,"SELECT * FROM tbl_kategori");
?>

<h3>Data Kategori</h3>
<a href="?page=form_kategori">Tambah</a>
<table border="1">
<tr><th>ID</th><th>Nama</th></tr>
<?php while($r=mysqli_fetch_assoc($data)): ?>
<tr>
<td><?=$r['kategori_id']?></td>
<td><?=$r['kategori_nama']?></td>
</tr>
<?php endwhile; ?>
</table>

<?php
session_start();
require 'includes/config.php';

$conn = db_connect();
$username = $_POST['username'];
$password = $_POST['password'];

$q = mysqli_query($conn,"SELECT * FROM tbl_user 
    WHERE username='$username' AND password='$password'");

$data = mysqli_fetch_assoc($q);

if($data){
    $_SESSION['user_id'] = $data['user_id'];
    $_SESSION['user_level'] = $data['user_level'];
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    header("Location:?page=dashboard");
}else{
    echo "Login gagal";
}

<?php
date_default_timezone_set('Asia/Jakarta');

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','db_latihan15');

function db_connect(){
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$conn){
        die("Koneksi gagal");
    }
    return $conn;
}

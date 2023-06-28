<?php
// koneksi ke database
include_once('config.php');

// ambil informasi id dari data yang dihapus 
$id = $_GET['id'];

// hapus data
$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE id=$id");

// kembali ke halaman home
header("location:home.php");
?>
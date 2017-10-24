<?php
include('koneksi.php');

$kelas  	    = $_POST['kelas'];
$jurusan_id  	= $_POST['jurusan_id'];
$wali_kelas     = $_POST['wk'];
$tambah = "INSERT INTO kelas SET kelas='$kelas', jurusan_id='$jurusan_id',wali_kelas='$wali_kelas'";
mysqli_query($koneksi,$tambah);
header("location:lihatdata.php");
?>
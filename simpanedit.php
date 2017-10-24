<?php
include ('koneksi.php');
$id 	= $_POST['id'];
$nama_kelas = $_POST['kelas'];
$jurusan_id = $_POST['jurusan_id'];
$wali_kelas = $_POST['wk'];


$edit = "UPDATE kelas SET kelas ='$nama_kelas', jurusan_id='$jurusan_id', wali_kelas='$wali_kelas'WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:lihatdata.php");
?>
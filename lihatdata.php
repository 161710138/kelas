<!DOCTYPE html>
<html>
<head>
<body bgcolor="aqua">
<a href="lihatdata.php"></a>
  
    <h1>Data Kelas</h1>

        <td><a href='tambah.php?id=$data[id]'>Tambah Data ></a></td>
		<br></br>

<table border="2">
<th>Nomor</th>
<th>kelas</th>
<th>jurusan_id</th>
<th>wali_kelas</th>
<th colspan="3">Opsi</th>
<?php

include('koneksi.php');

$ma = mysqli_query($koneksi,"SELECT kelas.id, kelas.kelas, kelas.wali_kelas, jurusan.jurusan as nama_jurusan FROM kelas Join jurusan on jurusan.id = kelas.jurusan_id");
$no =1;
foreach ($ma as $data) {
	echo "<tr>
	<td>$no</td>
	<td>".$data['kelas']."</td>
	<td>".$data['nama_jurusan']."</td>
	<td>".$data['wali_kelas']."</td>
	<td><a href= 'show.php?id=$data[id]'>Show</a></td>
	<td><a href= 'edit.php?id=$data[id]'>Edit</a></td>
	<td><a href= 'delete.php?id=$data[id]'>Delete</a></td>
	</tr>";
     $no++;
 }
	?>
	</center>
</table>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Kelas</title>
</head>
<body  bgcolor="aqua">
    <?php
    include('koneksi.php');
    $id = $_GET['id'];
    $b = mysqli_query($koneksi,"SELECT * FROM kelas WHERE id='$id'");
    $data = mysqli_fetch_array($b);
    ?>
    <center><h3>Show Data Kelas</h3></center>
    <fieldset style="width: 50%; margin: auto;">
    <legend>Form Show Biodata Kelas</legend>
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
        <p>
            kelas <br />
            <input type="text" name="kelas" class="form-control" value="<?php echo $data['kelas'];?>" readonly>
        </p>
        <p>
            jurusan id <br />
            <input type="text" name="jurusan_id" class="form-control" value="<?php echo $data['jurusan_id'];?>" readonly>
        </p>
        <p>
            Wali Kelas <br />
            <input type="text" name="wk" class="form-control" value="<?php echo $data['wali_kelas'];?>" readonly>
        </p>
    </fieldset>
    <br /><center><a href="lihatdata.php" class="btn btn-primary">&Lt; Lihat Data</a></center>
</body>
</html>
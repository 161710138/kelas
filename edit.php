</html>
<!DOCTYPE html>
<html>
<head>
    <title>Kelas</title>
</head>
<body bgcolor="aqua">
    <?php
    include('koneksi.php');
    $id = $_GET['id'];
    $b = mysqli_query($koneksi,"SELECT * FROM kelas WHERE id='$id'");
    $data = mysqli_fetch_array($b);
    ?>
    <center><h3>Edit Data Kelas</h3></center>
    <fieldset style="width: 50%; margin: auto;">
    <legend>Form Edit Biodata Kelas</legend>
        <form action="simpanedit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
        <p>
        kelas <br/>
        <input type="text" name="kelas" value="<?php echo $data['kelas'];?>" required />
    </p>
    
    <p>
        Wali Kelas <br/>
        <input type="text" name="wk" value="<?php echo $data['wali_kelas'];?>" required />
    </p>
    
    <p>
        <label>Jurusan id</label>
        
        <?php
        include('koneksi.php');
        $jr = mysqli_query($koneksi,"SELECT * FROM jurusan");
        ?>
        <select name="jurusan_id">
          <option>-</option>
          <?php
          foreach ($jr as $data) {
          ?>
          <option value="<?php echo $data['id']  ?>"> <?php echo $data['jurusan']?> </option>
          <?php
          }  ?>
        </select>
    </p>
        <p>
            <input type="submit" value="Simpan" />
        </p>
        </form>
    </fieldset>
    <br /><center><a href="lihatdata.php" class="btn btn-primary">&Lt; Lihat Data</a></center>
</body>
</html>
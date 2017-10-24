<h1 align="center">Input Biodata Kelas</h1>
<fieldset style="width: 50%; margin: auto;">
	<legend>Form Input Biodata Kelas</legend>

	<form action="tambahpro.php" method="post">
<p>
			Kelas <br />
			<input type="text" name="kelas" required>
		</p>
		<p>
			Wali_kelas <br />
			<input type="text" name="wk" required>
		</p>


			Jurusan <br />
			<?php
			include ('koneksi.php');
			$jr = mysqli_query($koneksi, "SELECT * FROM jurusan");?>
				<select name="jurusan_id">
				<option>-</option>
				<?php
					foreach ($jr as $data) {
						?>
				<option value="<?php echo $data['id'];?>"><?php
					echo $data['jurusan']?></option>
				<?php
				}?>			
					
				</select>
		</p>
		
		   
		<p>
			<input type="submit" value="simpan" />
			<input type="reset" value="reset" onclick="return confirm('hapus data yang telah diinput')">
			</p>
		</form>
		</fieldset>
        <br />
	    <center><a href="lihatdata.php">&Lt; Tabel Biodata Kelas</a></center>
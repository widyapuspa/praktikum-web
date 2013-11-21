<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Menciptakan Tabel</title>
		<style type="text/css">
		body{
			background-color:#00CC00;
		}
		</style>
        <link rel="stylesheet" type="text/css" href="../../bootstrap.min.css" />
        <script type="text/javascript" src="../../bootstrap.min.js"></script>
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="form-horizontal" style="text-align:center">
        	<div class="control-group">
            	<label class="control-label" for="NIM">NIM</label>
                <div class="controls">
                	<input type="text" name="nim" placeholder="NIM" />
                </div>
            </div>
            <div class="control-group">
            	<label class="control-label" for="Nama">Nama</label>
                <div class="controls">
                	<input type="text" name="nama" placeholder="Nama" />
                </div>
            </div>
            <div class="control-group">
            	<label class="control-label" for="Alamat">Alamat</label>
                <div class="controls">
                	<input type="text" name="alamat" placeholder="Alamat" />
                </div>
            </div>
            <div class="control-group">
            	<div class="controls">
                	<input type="submit" class="btn btn-primary" value="Seleksi" />
                </div>
            </div>
      </form>
		<?php
			require_once '../koneksi.php';
			//jika field nim dan nama diisi lalu disubmit
			if(isset($_POST['nim']) && isset($_POST['nama'])){
				$nim = $_POST['nim'];
				$nama = $_POST['nama'];
				$alamat = $_POST['alamat'];
					
				//tambahkan data baru ke tabel
				$sql = "INSERT INTO mahasiswa VALUES ('".$nim. "', '" .$nama. "','" .$alamat. "' )";
				$res = mysql_query($sql);
				if($res){
					echo '<h3 class="text-center">Data Berhasil Ditambahkan</h3>';
					@mysql_close($res);
				}else{
					echo '<h3 class="text-center">Gagal Menambah Data</h3> <br />';
					echo mysql_error();
				}
			}
			echo '<hr />';
			//Memanfaatkan script pengambilan data untuk menampilkan hasil
			require_once './seleksi.php';
		?>
	</body>
</html>
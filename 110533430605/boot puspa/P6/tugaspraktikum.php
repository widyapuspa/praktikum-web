<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Tugas Praktikum</title>
        <link rel="stylesheet" type="text/css" href="../bootstrap.min.css" />
	</head>

	<body>
		<?php
			require_once "./koneksi.php";
			$sort= isset($_GET['sort']) ? $_GET['sort'] : 'DESC';
			if($sort=='DESC'){
				$temp='ASC';
				$sort=$temp;
			}else{
				$temp='DESC';
				$sort=$temp;
			}
		?>
		<h1 class="text-center">Pengurutan Data</h1>
		<center>
		<table class="table table-hover">
			<tr>
				<th>#</th>
				<td width="100"><a href="<?php echo '?kolom=nim&sort='.$sort; ?>">NIM</a></td>
				<td width="150"><a href="<?php echo '?kolom=nama&sort='.$sort; ?>">Nama</a></td>
				<td><a href="<?php echo '?kolom=alamat&sort='.$sort; ?>">Alamat</a></td>
			</tr>
			
			<?php
			$kolom = isset($_GET['kolom']) ? $_GET['kolom'] : 'nim';
			$sql = 'SELECT * FROM mahasiswa ORDER BY '.$kolom.' '.$sort;
			$i=1;
			$result=mysql_query($sql);
			while($row=mysql_fetch_row($result)){?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row[0];?></td>
					<td><?php echo $row[1];?></td>
					<td><?php echo $row[2];?></td>
				</tr>
				<?php
				$i++;
			}
			?>
		</table>
		</center>
	</body>
</html>
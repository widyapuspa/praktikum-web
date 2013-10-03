<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Tabel Fleksibel</title>
	</head>

	<body>
		<?php 
			$baris=3;
			$sel=10;
			$kolom=4;
			$lebar = $kolom * 100;
			echo '<h1>Tabel Fleksibel </h1><br />';
			echo "<table width=".$lebar." border=1>";
			$row = 0;
			$cel = 1;
			while ($row < $baris && $cel <= $sel){
				echo "<tr>";
				$col = 0;
				while ($col < $kolom){
					if ($cel <= $sel){
						echo "<td><div align=center>".$cel."</div></td>";
						$cel++;
					}
					$col++;
				}
				echo "</tr>";
				$row++;
			}
			echo "</table>";
		?>
	</body>
</html>
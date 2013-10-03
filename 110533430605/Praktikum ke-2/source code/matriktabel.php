<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Program Matrik Tabel</title>
	</head>

	<body>
		<?php 
			function tabel($baris,$kolom){
				echo '<center><table border=1>'; 
				for($tr=1;$tr<=$baris;$tr++){ 
      				echo "<tr>"; 
        			for($td=1;$td<=$kolom;$td++){ 
               			echo "<td>row: ".$tr." column: ".$td."</td>"; 
        			} 
    				echo "</tr>"; 
				}
 
				echo "</table></center>"; 
			}
			$rows = 4; //jumlah baris yang akan dibuat
			$cols = 2; //jumlah kolom yang akan dibuat
			echo '<h1 style="text-align:center">Matrik Tabel '.$rows.' baris dan '.$cols.' kolom</h1>';
			tabel($rows,$cols);
		?>
	</body>
</html>

<link rel="stylesheet" type="text/css" href="../../bootstrap.min.css" />
<?php 
	// File: seleksi.php 
 
	require_once '../koneksi.php'; 
 
 
	$sql = 'SELECT * FROM mahasiswa'; 
	$res = mysql_query($sql); 
	if ($res) { 
  		if (mysql_num_rows($res)) { ?> 
		    <table class="table table-hover"> 
    			<tr> 
    				<th>#</th> 
      				<th width=100>NIM</th> 
      				<th width=150>Nama</th> 
	  				<th>Alamat</th> 
    			</tr> 
    		<?php 
    			$i = 1; 
    			while ($row = mysql_fetch_row($res)) { ?> 
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
  			<?php 
  		} else { 
    		echo '<h3 class="text-center">Data Tidak Ditemukan</h3>'; 
  		} 
  		@mysql_close($res); 
	} 
?>
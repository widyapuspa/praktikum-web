<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kalkulator</title>

</head>
	<?php  
  		$variabel1 = $_POST['variabel1'];  
		$variabel2 = $_POST['variabel2'];  
		$operator = $_POST['operator'];  
  		
		if ($operator == "tambah")  {  
 			$hasil = $variabel1 + $variabel2;  
 			$tanda = "+";   
 		}  
		else if ($operator == "kurang")  {  
 			$hasil = $variabel1 - $variabel2;  
 			$tanda = "-";  
 		}  
		else if ($operator == "kali")  {  
 			$hasil = $variabel1 * $variabel2;  
 			$tanda = "*";   
 		}  
		else if ($operator == "bagi")  {  
 			$hasil = $variabel1 / $variabel2;  
 			$tanda = "/";  
 		}  
		else if ($operator == ""){
			$tanda = "operator salah";	
			$hasil = "perhitungan gagal";
		}
	?>
 
 <div align="center">  
  <table width="411" height="156" border="1">  
    <tr>  
      <td colspan="2"><div align="center">Hasil Perhitungan</div></td>  
    </tr>  
    <tr>  
      <td>Nilai Pertama</td>  
      <td>&nbsp; <?php echo "$variabel1"; ?></td>  
    </tr>  
    <tr>  
      <td>Operator</td>  
      <td>&nbsp; <?php echo "$tanda"; ?></td>  
    </tr>  
    <tr>  
      <td>Nilai kedua</td>  
      <td>&nbsp; <?php echo "$variabel2"; ?></td>  
    </tr>  
    <tr>  
      <td>Hasil</td>  
      <td>&nbsp; <?php echo "$hasil"; ?></td>  
    </tr>  
  </table>  
</div>  
  
<body>
</body>
</html>
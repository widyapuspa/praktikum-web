<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Greeting</title>
	</head>

	<body>
		<?
			function greeting_site($jam){  
 				if ($jam >= 00 and $jam < 10 ){   
   					$greeting="Selamat Pagi";   
  				}else if ($jam >= 10 and $jam < 15 ){   
   					$greeting="Selamat Siang";  
 				}else if ($jam >= 15 and $jam < 18 ){   
   					$greeting="Selamat Sore";      
 				}else if ($jam >= 18 and $jam <= 24 ){   
   					$greeting="Selamat Malam";     
 				}else {   
  					$greeting="Error";  
 				}  
 				return $greeting;  
			}
			$waktu = date("G:i");
			echo '<h1>Selamat Datang</h1>';
			echo '<h1>'.greeting_site($waktu).'</h1>';
			echo  '<h1>Sekarang Jam '.$waktu.'</h1>';
		?>
	</body>
</html>

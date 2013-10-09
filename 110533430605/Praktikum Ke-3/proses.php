<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hasil Login</title>
</head>

<body>
	<?php
		$username = "puspa";
		$password = "puspa";
		$id = $_REQUEST['user_name'];
		$passwd = $_REQUEST['password'];
		if(is_string($id) && is_string($passwd)){
			if($id==$username && $passwd==$password){
				echo '<h1>Selamat Datang '.$id.'</h1>';	
			}else{
				echo '<h1>Gagal Login Cek Kembali Username dan Password Anda!!!</h1>';	
			}
		}else{
			echo '<h1>Username dan Password tidak boleh berupa non-string</h1>';	
		}
	?>
</body>
</html>
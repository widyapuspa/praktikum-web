<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Metode Post</title>
</head>

<body>
	<form action="<?php $_SERVER ['PHP_SELF'];?>" method="post">
    	Nama
    	<input type="text" name="nama" /> <br />
    	<input type="submit" value="OK" />
    </form>
    
    <?php 
		if (isset ($_POST['nama'])){
			echo 'Hello, ' . $_POST['nama'];
			}
	?>
</body>
</html>
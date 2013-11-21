<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Halaman Administrator</title>
		<style type="text/css">
			body{
				background-color:#00CC00;
				color:#FFFFFF;
			}
			.inner{
				margin: 200px auto;
				padding: 20px;
				width:240px;
				border:1px solid #333
			}
		</style>
	</head>

	<body>
		<?php
			//include file eksternal
			require_once('./proses.php');
			
			init_login();
			validate();
		?>
		<h3>Simulasi Halaman Admin</h3>
		<p>
			<a href="?m=Logout">Logout</a>
		</p>
		Menu-menu Admin Disini
	</body>
</html>
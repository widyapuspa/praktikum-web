<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'myweb';
	
	$cnn = mysql_connect($host,$user,$pass);
	if(!$cnn){
		exit('<h3 style="text-align:center">Koneksi Gagal</h3>');
	}
	$db = mysql_select_db($db);
	if(!$db){
		exit('<h3 style="text-align:center">Gagal Memilih Database</h3>');
	}
?>
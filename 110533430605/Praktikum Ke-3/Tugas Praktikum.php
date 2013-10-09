<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas Praktikum</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function cek(input){
	huruf= /^[A-Za-z]{1,}$/;
	return huruf.test(input);	
}
function validitas(form){
	var id = form.user_name.value;
	var passwd = form.password.value;
	if(id == "" || passwd == ""){
		alert("Username dan Password Tidak Boleh Kosong...!!");
		form.user_name.focus();
		return false;
	}else if(!cek(id) == true || !cek(passwd) == true){
			alert("Username dan Password Harus Berupa Huruf");
		form.user_name.focus();
		return false;
	}else{
		return true;	
	}
}
</script>
</head>

<body>
	<form name="form1" method="post" action="proses.php" onSubmit="return validitas(this)">
    
<div id="kotak_login">
    	<h1 align="center">Login</h1>
   	<hr align="center" width="275" size="5" color="#6C0"/>
   	<p align="center">Username<br />
     		<input name="user_name" type="text" id="user_name" />
        	<br />
        	Password<br />
        	<input name="password" type="password" id="password" />
        	<br />
        	<br />
        	<input type="submit" value="Login" style="background:#0C0; font-family:'Comic Sans MS', cursive; color:#FFF; cursor:pointer;"/>
    	</p>
    </div>

</body>
</html>
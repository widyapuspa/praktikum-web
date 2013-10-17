<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kalkulator</title>
<script type="text/javascript">
function cek(input){
	huruf= /^[A-Za-z]{1,}$/;
	return huruf.test(input);	
}
function validitas(form){
	var variabel1 = form.variabel1.value;
	var variabel2 = form.variabel2.value;
	if(variabel1 == "" || variabel2 == ""){
		alert("Variabel Tidak Boleh Kosong...!!");
		form.kalkulator.focus();
		return false;
	}else if(cek(variabel1) == true || cek(variabel2) == true){
			alert("Variabel harus berupa angka");
		form.variabel1.focus();
		return false;
	}else{
		return true;	
	}
}
</script>

</head>

<body>
	<div id="calculator" align="center">
     

    <form name="kalkulator" method="post" action="proses.php" onsubmit="return validitas(this)">
    	<table border="1">  
    	<tr>  
     		<td colspan="2"><div align="center">Kalkulator Sederhana Puspa</div></td>  
    	</tr> 
        <tr>
    		<td>Angka 1</td>
        	<td><input name="variabel1" type="number" id="variabel1" size="40px"/></td>
        </tr>
        <tr>
        	<td>Operator</td>
        	<td><input name="operator" type="radio" value="tambah" checked="checked"/>tambah	
        		<input name="operator" type="radio" value="kurang"  />kurang	
        		<input name="operator" type="radio" value="kali"    />kali		
        		<input name="operator" type="radio" value="bagi"    />bagi		
            </td>
        </tr>
        <tr>
        	<td>Angka 2</td>
        	<td><input name="variabel2" type="number" id="variabel2" size="40px"/> </td>
        </tr>
        <tr>  
     		<td colspan="2"><div align="center"><input name="submit" type="submit" id="Submit" value="Hitung"/></div></td>  
    	</tr> 
        
      </table>
    </form>

        <br />
    </div>
</body>
</html>
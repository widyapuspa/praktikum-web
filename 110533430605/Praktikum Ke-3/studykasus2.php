<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Data CheckBox</title>
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
			Hobby
			<input type="checkbox" name="hobby[]" value="Membaca"
			<?php
				if (isset($_POST['hobby'])){
					foreach ($_POST['hobby'] as $key => $val){
						if($val == 'Membaca'){
							echo 'checked="checked"';
						}
					}
				}
			?>
			/>Membaca
			<input type="checkbox" name="hobby[]" value="Olahraga"
			<?php
				if (isset($_POST['hobby'])){
					foreach($_POST['hobby'] as $key => $val){
						if($val == 'Olahraga'){
							echo 'checked="checked"';
						}
					}
				}
			?>
			/>Olahraga
			<input type="checkbox" name="hobby[]" value="Menyanyi"
			<?php
				if (isset($_POST['hobby'])){
					foreach($_POST['hobby'] as $key => $val){
						if($val == 'Menyanyi'){
							echo 'checked="checked"';
						}
					}
				}
			?>
			/>Menyanyi
			<input type="submit" value="OK" />
		</form>

		<?php
			//Ekstraksi Nilai
			if (isset($_POST['hobby'])){
				foreach ($_POST['hobby'] as $key => $val){
					echo $key.'->'.$val.'<br />';
				}
			}
		?>
	</body>
</html>
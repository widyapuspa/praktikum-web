<link rel="stylesheet" type="text/css" href="../bootstrap.min.css" />
<script type="text/javascript" src="../bootstrap.min.js"></script>
<?php
	function init_login(){
		//simulasi data account nama dan password
		$nama = 'admin';
		$pass = 'admin';
		session_start();
		if(isset($_POST['nama']) && isset($_POST['pass'])){
			$n = trim($_POST['nama']);
			$p = trim($_POST['pass']);
			
			if(($n === $nama) && ($p===$pass)){
				//jika sama,set cookie
				$_SESSION['login']=$n;
				//redireksi
				?>
				<script type="text/javascript">
					document.location.href="./";
				</script>
				<?php
			}else{
				echo '<h1 style="margin:10px auto;text-align:center;">nama/password tidak sesuai</h1>';
				return false;
			}
		}
	}
	function validate(){
		if(!isset($_SESSION['login'])){
			?>
			<div class="inner">
				<form action="" method="post" class="form-horizontal">
                	<div class="control-group">
						<label class="control-label" for="nama">Nama</label>
        		        <div class="controls">
                			<input type="text" name="nama" placeholder="Username" />
                		</div>
               		</div>
               		<div class="control-group">
						<label class="control-label" for="Password">Password</label>
                		<div class="controls">
                			<input type="password" name="pass" placeholder="Password" />
               			 </div>
               		</div>
                    <div class="control-group">
    					<div class="controls">
                        	<input type="submit" value="Sign In" class="btn btn-primary" />
    					</div>
  					</div>
               </form>
			<!--
            				<td><input type="text" name="nama" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="pass" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Login" /></td>
						</tr>
					</table>
				</form>
               -->
			</div>
			<?php
			exit;
		}
		if(isset($_GET['m']) && $_GET['m'] == 'Logout'){
			//hapus cookie
			if(isset($_SESSION['login'])){
				unset($_SESSION['login']);
				session_destroy();
			}
			
			//redireksi halaman
			?>
			<script type="text/javascript">
				document.location.href="./";
			</script>
			<?php
		}
	}
?>
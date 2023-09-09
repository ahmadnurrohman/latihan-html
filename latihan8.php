<!DOCTYPE html>
<html>
	<head>
		<title>Data Seleksi</title>
	</head>
	<body>
		<form action ="<?php $_SERVER ['PHP_SELF']; ?>" method ="POST">
		Pekerjaan
		<select name="job" style="width:100px;">
			<option value ="Mahasiswa">Mahasiswa</option>
			<option value ="Buruh Harian Lepas">Buruh Harian Lepas</option>
			<option value ="Wiraswasta">Wiraswasta</option>
			<option value ="PNS">PNS</option>
			<option value ="Wirausaha">Wirausaha</option>
			<option value ="Guru">Guru</option>
			<option value ="Nelayan">Nelayan</option>
			<option value ="Karyawan Swasta">Karyawan Swasta</option>
		</select><br/>
		<input type ="submit" value="OK" /><br/>
		</form>
		
		<?php
			if (isset ($_POST['job'])){
				echo $_POST['job'];
			}
		?>
	</body>
    </html>
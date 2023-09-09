<html>
<head>
	<title>Studi Kasus: Preselecting pada Seleksi</title>
</head>
<body><center><div style="background:#234234; padding-top:50px; width:400px;height:400px">
	<h2>Daftar Nama Lengkap</h2>
	<strong>Nama panggilan:</strong><br>
	<em>Silakan pilih untuk menampilkan nama lengkap</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="nama">
			<option value="nta" 
			<?php if (isset($_POST['nama'])&&$_POST['nama']=='nta') {
				echo "selected";
			} ?>
			>nta</option>
			<option value="nes" <?php if (isset($_POST['nama'])&&$_POST['nama']=='nes') {
				echo "selected";
			} ?>>nes</option>
			<option value="oneng" 
			<?php if (isset($_POST['nama'])&&$_POST['nama']=='oneng') {
				echo "selected";
			} ?>
			>oneng</option>
			<option value="win" 
			<?php if (isset($_POST['nama'])&&$_POST['nama']=='win') {
				echo "selected";
			} ?>
			>win</option>
			<option value="ri" 
			<?php if (isset($_POST['nama'])&&$_POST['nama']=='ri') {
				echo "selected";
			} ?>
			>ri</option>
		</select>
		<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['nama'])) {
		switch ($_POST['nama']) {
			case 'nta':
				echo "<div id='nilai'>Nama lengkap : Rista</div>";
				break;

			case 'nes':
				echo "<div id='nilai'>Nama lengkap : Nesti Utari</div>";
				break;

			case 'oneng':
				echo "<div id='nilai'>Nama lengkap : Rahayu Agustina</div>";
				break;

			case 'win':
				echo "<div id='nilai'>Nama lengkap : Whindy Norma C</div>";
				break;

			case 'ri':
				echo "<div id='nilai'>Nama Lengkap : Eri Maulana</div>";
				break;	
			default:
				# code...
				break;
		}
	}
	 ?>
</div>
</center></body>
</html>
<?php 
	include_once("function/helper.php");
	include_once("function/koneksi.php");
	$a = $_POST['keputusan'];
	$b = $_POST['total'];
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hasil Test</title>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div class="test-gambar">
		<img src="images/corona.jpg" alt="gambar 2 orang lagi ngobrol" width="400px" height="400px">
	</div>
	<div class="tulisan-hasil">
		<h1 align="center"><?= "$nama, $umur <em>(thn)</em>"; ?></h1>
		<h1 align="center"><?= $a; ?></h1>
	</div>
	<div class="button-kembali">
		<?php if ($b == 0) { ?>
			<a href="<?php echo BASE_URL . "index.php?page=test";  ?> " style="background-color:tomato; border-radius: 5px; ">Isi Dulu</a>
		<?php }else{ ?>
			<a href="<?php echo BASE_URL . "proses_simpan.php?simpan=ada&nama=$nama&hasil=$a";  ?> " style=" border-radius: 5px;">Save & Kembali</a>
		<?php } ?>
	</div>
	<script src="script.js"></script>
</body>
</html>

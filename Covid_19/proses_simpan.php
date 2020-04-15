<?php 

include_once("function/helper.php");
include_once("function/koneksi.php");

$nama = $_GET['nama'];
$hasil = $_GET['hasil'];

if ($_GET['simpan'] == 'ada') {
		$sql = "INSERT INTO tb_hasil VALUES(null,'$nama','$hasil')";
		$query = mysqli_query($koneksi,$sql);
		if($query){
			echo "<script>alert('Data Telah berhasil disimpan Arigatou Gozaimasu');document.location.href='index.php?page=main'</script>";
		}else{
			echo "<script>alert('Data Gagal Disimpan');document.location.href='index.php?page=test'</script>";
		}
	}

?>
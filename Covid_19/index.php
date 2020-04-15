<?php 

include_once("function/helper.php");
include_once("function/koneksi.php");

//isset fungsinya untuk mengecek sebuah variable dan disini kita memakai ternary opetor yaitu ? (if true) : (if false)
$page = isset($_GET['page']) ? $_GET['page'] : false;
$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;

?>


<!-- file index adalah file yang utama yang akan ditampilkan pertama kali oleh w browser saat kita mengakses
program weshop ini -->


<!DOCTYPE html>
<html>
<head>
	<title>Covid-19</title>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>

   <div id="container">
   	    <!-- ini adalah pembuka tag header -->
	   	<div id="header">

	   		<div id="menu">
	   			<div id="user" style="color: white;">
						<?php 
	   						echo "<a href='" . BASE_URL . "index.php?page=main'>Home</a>
	   							  <a href='" . BASE_URL . "index.php?page=test'>Test</a>";
						 ?>
	   			</div>

	   		</div>

	   	</div>
		<!-- ini adalah penutup tag header -->

		<!-- ini adalah pembuka tag content -->
	   	<div id="content">
	   		<?php 
	   			$filename = "$page.php"; //ini adalah variable page yang di concate dengan string .php 
	   			if (file_exists($filename)) {
	   				include ($filename);
	   			}else{
	   				include ("main.php");
	   			}
	   		 ?>
	   	</div>
		<!-- ini adalah penutup tag content -->

		<!-- ini adalah pembuka tag footer -->
		<div class="footer" align="center">	
			<p>	coyright &copy; Muhammad Rizky Pangestu 2020</p>
		</div>

   </div>

</body>
</html>
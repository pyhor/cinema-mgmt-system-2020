<DOCTYPE html>
<html lang='en'>
<head>
	<title>Berjaya Membeli</title>
	<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
	<header><?php include 'header.php'; ?></header>
	<nav><?php include 'nav.php'; ?></nav>
	<section>
		<article>
			<?php
				//Ambil data dari url
				$id = $_GET['id'];
				$notiket = $_GET['notiket'];
				
				//Ambil masa apabila proses pembelian berlaku
				date_default_timezone_set("Asia/Kuala_Lumpur");
				$tbeli = date("Y/m/d H:i:s");
				
				//Sambung ke pangkalan data
				include 'capaian.php';
				
				//Query pembelian
				$sql = "insert into pembelian (id, notiket, tarikh_beli) values ('$id', '$notiket', '$tbeli')";
				$run = mysqli_query($connect, $sql);
				if($run){
					//Query ubah status tiket
					$sql2 = "update tiket set status = 'Telah Dibeli' where notiket = '$notiket'";
					mysqli_query($connect, $sql2);
					
					echo "<p><big>Tahniah!! Pembelian Tiket Anda Telah Disahkan.<br><br>Sila Kilk Semak Tempahan Untuk Mendapat Statistik Anda.</p></big>";
				}else{
					echo "<p><big>Maaf, Pembelian tiket anda gagal disahkan. Sila cuba lagi.</p></big>";
				}
				
				//Query ubah status tiket
				$sql2 = "update tiket set status = 'Telah Dibeli' where notiket = '$notiket'";
				mysqli_close($connect);
			?>
		</article>
		<aside><?php include 'asideinfo.php'; ?></aside>
	</section>
	<footer><?php include 'footer.php'; ?></footer>
</body>
</html>
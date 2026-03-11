<DOCTYPE html>
<html lang="en">
<head>
   <title>Delete Wayang</title>
   <link rel="stylesheet"type="text/css"href="style2.css">
</head>
<body>
   <header>
         <?php include'header2.php'; ?>
	</header>
	      <nav>
		       <?php include'navadmin.php'; ?>
		  </nav>
		  <section>
		    <article>
			     <?php
				 //Ambil data dari URL
				 $id=$_GET['id'];
				 //sambung ke Pangkalan Data
				 include'capaian.php';
				 //Query arahan padam
				 $sql="DELETE FROM wayang WHERE kodwayang='$id'";
				 if(mysqli_query($connect,$sql)){
				 echo"<p><big>Rekod Berjaya Dipadam</big></p>";
				 echo"<br><button onclick='halamanSebelum()'>Halaman Sebelum</button>";
				 }else{
				 echo"<p><big>Rekod Gagal Dipadam</big></p>";
				 echo"<br><button onclick='halamanSebelum()'>Halaman Sebelum</button>";
				 }
				 mysqli_close($connect);
				 ?>
				 <!--Javascript:Butang Fungsi Kembali ke Halaman Sebelum-->
				              <br><br><script>
							         function halamanSebelum(){
									         window.history.back();
								    }
							   </script>
							   </article>
							   <aside>
							         <?php include'sidenavadmin.php';?>
								</aside>
				</section>
	<footer>
	       <?php include'footer.php';?>
	</footer>
</body>
</html>
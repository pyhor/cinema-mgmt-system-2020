<DOCTYPE html>
<html lang="en">
<head>
   <title>Delete Tontonan</title>
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
				 $sql="DELETE FROM tontonan WHERE kodtontonan='$id'";
				 
				 if(mysqli_query($connect,$sql)){
				 echo"<p><big>Rekod Berjaya Dipadam</p></big>";
				 echo"<br><br><br><button onclick='halamanSebelum()'>Halaman Sebelum</button>";
				 }else{
				 echo"<p><big>Rekod Gagal Dipadam</p></big>";
				 echo"<br><br><br><button onclick='halamanSebelum()'>Halaman Sebelum</button>";
				 }
				 mysqli_close($connect);
				 ?>
	 <!--Javascript:Butang Fungsi Kembali ke Halaman Sebelum-->
				              <script>
							         function halamanSebelum(){
									         window.history.back();
								    }
							   </script>
				</article>
				 <aside>
				        <?php include'sidenavadmin.php'; ?>
				 </aside>
				</section>
	<footer>
	       <?php include'footer.php'; ?>
	</footer>
</body>
</html>
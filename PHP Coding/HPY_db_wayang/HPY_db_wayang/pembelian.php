<DOCTYPE html>
<html lang="en">
<head>
	<title>Pembelian Tiket Wayang</title>
	<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body>
	<header>
		<?php include'header.php';?>
	</header>
	      <nav>
	      	<?php include'nav.php';?>
	      </nav>
	        <section>
	        	<article>
				      <?php if(!empty($_COOKIE['id'])){
					  include'borangpembelian.php';
					  ?>
	        	</article>
	        	<aside>
				       <?php include'borangsemaktiket.php';
					   }else{
					   echo"<p><big>Maaf. Sila Login dahulu";
					   echo"<br><br>Kemudian klik menu Pembelian</big></p>";
					   }?>
	        	</aside>
	        </section>
	 <footer>
	 	<?php include'footer.php';?>
	 </footer>
</body>
</html>

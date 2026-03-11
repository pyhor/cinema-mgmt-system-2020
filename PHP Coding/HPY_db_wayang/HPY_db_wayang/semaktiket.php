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
	      			include'borangsemaktiket.php';
	      		    }else{
	      		    	   echo"<p><big>Maaf. Sila Login Dahulu.";
	      		    	   echo"<br><br>Kemudian Klik Menu Pembelian Tiket.</big></p>";
	      		    }?>
	      	</article>
			<aside>
			 <?php include'asideinfo.php';?>
			</aside>
	      </section>
    <footer>
    	<?php include'footer.php';?>
    </footer>
</body>
</html>
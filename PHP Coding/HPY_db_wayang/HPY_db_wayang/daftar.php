<DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Tiket Wayang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
	      		 <?php if(empty($_COOKIE['id'])){
	    		include'borangdaftar.php';
	    	    }else{
	    	    	  echo"<p><big>Anda Masih Dalam Login.<br><br> Tidak Boleh Daftar Sekarang.";
                      echo"<br><br>Boleh Logout <a href='logout.php'>Di Sini</a>.</big></p><br>";
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
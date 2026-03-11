<DOCTYPE html>
<html lang="en">
<head>
	<title>Papar Kerusi</title>
	<link rel="stylesheet"type="text/css"href="style2.css">
</head>
<body>
	<header>
		<?php include'header2.php';?>
	</header>
	      <nav>
	      	<?php include'navadmin.php';?>
	      </nav>
	        <section>
	        	<article>
				     <?php if(!empty($_COOKIE['idadmin'])){
	    		include'paparkerusi.php';
	    	    }else{
	    	    	  echo"<p><big>Maaf. Sesi Login Telah Tamat.";
	    	    	  echo"<br>Mohon Admin Login Semula.";
	    	    	  echo"<br>Klik <a href='loginadmin.php'>di sini</a> untuk Login semula.</p></big>";
	    	          }?>
	        	</article>
	        </section>
	 <footer>
	 	<?php include'footer.php';?>
	 </footer>
</body>
</html>
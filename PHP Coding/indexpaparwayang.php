<DOCTYPE html>
<html lang="en">
<head>
	<title>Papar Wayang</title>
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
	    		include'paparwayang.php';
	    	    }else{
	    	    	  echo"<p><big>Maaf. Sesi Login Telah Tamat.";
	    	    	  echo"<br><br>Mohon Admin Login Semula.";
	    	    	  echo"<br><br>Klik <a href='loginadmin.php'>Di Sini</a> Untuk Login Semula.</p></big>";
	    	          }?>
	        	</article>
	        </section>
	 <footer>
	 	<?php include'footer.php';?>
	 </footer>
</body>
</html>
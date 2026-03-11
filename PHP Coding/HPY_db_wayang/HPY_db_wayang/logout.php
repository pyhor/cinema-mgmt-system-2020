<DOCTYPE html>
<html lang="en">
<head>
    <title>Logout</title>
	<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body>
   <header>
         <?php include'header.php';?>
   </header>
         <nav>
		       <?php include 'nav.php';?>
		 </nav>
		       <section>
			     <article>
				   <?php
					       if(!empty($_COOKIE['id'])){
						   //set expired cookie kepada 1 jam lepas
						   setcookie("id","",time()-3600);
						   echo"<p><big>Anda Telah Berjaya Logout.";
						   echo"<br><br>Terima Kasih. Selamat Datang Lagi.</p></big>";
						   }else{
					         echo"<p><big>Anda Belum Login.";
							 echo"<br><br>Sila Klik Menu Login.</p></big><br><br>";
						   }?>
					  </article>
					  <aside>
						   <?php include'asideinfo.php'?>
					  </aside>
			   </section>
	<footer>
	       <?php include'footer.php';?>
	</footer>
</body>
</html>
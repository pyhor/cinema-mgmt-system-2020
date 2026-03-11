<DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Logout</title>
	<link rel="stylesheet"type="text/css"href="style2.css">
</head>
<body>
	<header>
		<?php include'header.php';?>
	</header>
	<nav>
	      	<?php include'navadmin.php';?>
	      </nav>
	        <section>
	        	<article>
	        		<?php
	        		 if(!empty($_COOKIE['idadmin'])){
	        		      //set expired cookie kepada 1 jam lepas
	        		      	setcookie("idadmin","",time()-3600);
	        		      	echo"<p><big>Anda Telah Berjaya Logout.</p></big>";
							echo"<p><big>Jika Anda Hendak Login Lagi Klik <a href='loginadmin.php'>Di Sini</a>.</big></p>";
							echo"<p><big>Jika Anda Hendak Ke Laman Pelanggan Klik <a href='index.php'>Di Sini</a>.</big></p>"; 
						   }else{
							   echo"<p><big>Anda Belum login.</p></big>";
							   echo"<p><big>Sila Klik <a href='loginadmin.php'>Di Sini</a> Untuk Login.</big></p>";
						   }
						   ?>
				</article>
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




					         
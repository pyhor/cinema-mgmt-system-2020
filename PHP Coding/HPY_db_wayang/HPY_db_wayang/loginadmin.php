<html lang="en">
<head>
	<title>Login Admin</title>
	<link rel="stylesheet"type="text/css"href="style2.css">
</head>
<body>
	<header>
		<?php include'header.php';?>
	</header>
	<nav>
             <?php include'navsideplng.php'; ?>
         </nav>
	        <section>
	        	<article>
				      <?php if(empty($_POST['admin'])){
	      			include'borangloginadmin.php';
	      		    }else{
	      		    	   echo"Maaf Sila Login Dahulu.";
						   $id=$_POST['id'];
						include'borangloginadmin.php';
	      		    }?>
	        	</article>
				<aside>
			<?php include'plngside.php';?>
		</aside>
	        </section>
	 <footer>
	 	<?php include'footer.php';?>
	 </footer>
</body>
</html>
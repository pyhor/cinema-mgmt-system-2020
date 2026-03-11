<DOCTYPE html>
<html lang="en">
<head>
     <title>Login Tiket Wayang</title>
	 <link rel="stylesheet"type="text/css"href="style.css">
</head>
<body>
   <header>
          <?php include'header.php'; ?>
   </header>
         <nav>
             <?php include'nav.php'; ?>
         </nav>
                <section>
                  <article>
                       <?php if(empty($_COOKIE['id'])){
                        include 'boranglogin.php';
                       }else{
                             echo"<p><big>Anda Masih Dalam Login.";
                             echo"<br><br>Boleh Logout <a href='logout.php'>Di Sini</a>.</big></p><br>";
							 $id=$_COOKIE['id'];
							 include'statistikanda.php';
							 }
					   ?>
					   </article>
					   <aside>
					         <?php include'asideinfo.php'; ?>
					   </aside>
				</section>
	<footer>
	       <?php include'footer.php'; ?>
	</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Statistik Tiket Anda</title>
   <link rel="stylesheet"type="text/css"href="style.css">
</head>
<body>
   <header>
          <?php include'header.php'; ?>
   </header>
    <nav>
	      	<?php include'nav.php';?>
	      </nav>
		       <section>
			    <article>
				     <?php if(!empty($_COOKIE['id'])){
					        $id=$_COOKIE['id'];
							include'statistikanda.php';
							include'hasilcari.php';
							}else{
						        echo"<p><big>Maaf. Sila Login Dahulu<br>";
								echo"<br>Kemudian Klik Menu Semakan</p></big>";
							}?><br><br>
							<button onclick="fungsiBack()">BACK</button>
<script type="text/javascript">
	function fungsiBack(){
		window.history.back();
	}
</script>
					</article>
					</aside>
				   </section>
	<footer>
	       <?php include'footer.php'; ?>
	</footer>
</body>
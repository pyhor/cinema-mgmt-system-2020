<!-- Borang pendaftaran pelanggan baharu -->
<?php if(empty($_POST['daftar'])){?>
	<p><img src="images/plng1.png"style="float:left;"></p> 
<h2>Daftar Pelanggan</h2>
<form action='daftar.php' method='POST'>
<p><i>*Required Field </i></p><br>
<label>*Nama Anda:</label>
 <input type="text"name="nama"placeholder="Nama Anda"required><br><br>
   <label>*No Kad Pengenalan Anda:</label>
   <input type="text"name="nokp"minlength="12"maxlength="12"placeholder="000000000000"required><br><br>
   <label>*Umur Anda:</label>
   <input type="number"name="umur"placeholder="Umur"min="10" max="100"required><br><br>
   <label>*Email Anda:</label>
   <input type="email"name="email"placeholder="email@mail.com"required><br><br>
   <input type="submit"name="daftar"value="DAFTAR"><br>
</form>
<!-- Proses pendaftaran -->
<?php 
	}else{
		if((!empty($_POST['nama']))and (!empty($_POST['nokp']))and(!empty($_POST['umur']))and(!empty($_POST['email']))){    
    $nama=$_POST['nama'];
	$nokp=$_POST['nokp'];
	$umur=$_POST['umur'];
	$email=$_POST['email'];
			/* Sambung ke database */
			include 'capaian.php';
			/* aturcara SQL */
			$query="INSERT INTO pelanggan(nokp,umur,email,nama)VALUES('$nokp','$umur','$email','$nama');";
			/* Laksana aturcara SQL */
			$run=mysqli_query($connect, $query);
			/* Papar hasil aturcara SQL */
			if($run){
	         echo"<script type ='text/javascript'>
			 window.alert('Tahniah!!  Pendaftaran Anda Telah Berjaya.')
			 </script>";
			 echo"<p><big>Hello, <b>$nama !</b></big></p><br><h3>Login menggunakan maklumat ini:</h3><br><p><big>Username Anda: $email<br><br>Katalaluan Anda: $nokp</p></big>";
			}else{
				echo"<p><big>Maaf! Anda Gagal Daftar";
		  echo"<br><br>Sila Daftar Semula <a href='daftar.php'>Di Sini</a> .</big></p>";
			}
			/* Putus sambungan ke database */
			mysqli_close($connect);
		}
	}
?>
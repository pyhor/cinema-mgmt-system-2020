<?php if(empty($_POST['login'])){ ?>
<!--Bahagian Borang Input Pengguna-->
<p><img src="images/plng2.png"style="float:left;"></p> 
<h2>Login Pelanggan</h2>
<form action="login.php"method="POST">
<p><i>*Required Field </i></p><br>
* <input type="email"name="email"placeholder="Email Anda"required><br><br>
* <input type="text"name="nokp"minlength="12" maxlength="12" placeholder="NoKp Anda" required><br><br>
<p><img src="images/plng6.png"style="float:right;"></p> 
<input type="submit"name="login"value="LOGIN"><br>
</form><br><br>
<p>Jika Anda Belum Mendaftar. Daftar <a href="daftar.php">Di Sini<a/>.</p>
<?php }else{
 //Bahagian Proses Data
  $email=$_POST['email'];
  $nokp=$_POST['nokp'];
 //Sambung Fail ke DBMS
  include'capaian.php';
  //Query
  $query="select id,nokp from pelanggan where '$email'=email AND '$nokp'=nokp";
  //Laksanakan Query
  $run=mysqli_query($connect,$query);
  //Panggil Data
  $data=mysqli_fetch_array($run);
  $id=$data['id'];
  $nokp=$data['nokp'];
  if($id>=1){
         echo"<p><big>Tahniah, ".$email." berjaya login.</big></p>";
		 //membina cookie bagi 86400saat=1 hari
		 $tamat=time()+(86400*30);
		 setcookie('id',$id,$tamat);
		 echo"<p><big>Selamat Datang, ".$email.".</br></big><p><br>";
	include'statistikanda.php';
	}else{
	      echo"<p><big>Maaf! Anda Gagal Login";
		  echo"<br><br>Sila Login Semula <a href='login.php'>Di Sini</a>.</big></p>";
		  echo"<br><br><p>Jika Anda Belum Mendaftar <a href='daftar.php'>Di Sini<a/> Ke Daftar.</p>";
		  }
		  mysqli_close($connect);
		  }
		  ?>
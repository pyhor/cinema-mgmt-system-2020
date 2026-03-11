<!--Bahagian Pertama:Borang-->
<?php if(empty($_POST['loginadmin'])){ ?>
<p><img src="images/adm1.png"style="float:left;"></p> 
<h2>Login Admin</h2>
<p>Hanya admin dibenarkan akses di halaman ini</p>
<form action="loginadmin.php"method="POST">
<p><i>*Required Field </i></p><br>
   * <input type="text"name="id"placeholder="ID Admin"required>
   * <input type="password"name="pswd"placeholder="Katalaluan"required>
   <input type="submit"name="loginadmin"value="LOGIN">
</form><br><br><br><br>
<p><i><big>Jika Anda Bukan Admin Klik <a href="index.php">Di Sini</a> .</p></i></big>
<!--Bahagian Kedua:Pemprosesan Data-->
<?php 
}else{
    //semakkan data yang dihantar tidak kosong
	if((!empty($_POST['id']))and(!empty($_POST['id']))){
	//pindahkan data secara POST ke sini
	$id=$_POST['id'];
	$pswd=$_POST['pswd'];
	//Sambung ke pangkalan data
	include'capaian.php';
	//Query
	$SQL="select*from admin where idadmin='$id'AND katalaluan='$pswd'";
	//Semak
	$semak=mysqli_query($connect,$SQL);
	$hasil=mysqli_fetch_array($semak);
	$idadmin=$hasil['idadmin'];
	$namaadmin=$hasil['nama'];
	if(!empty($idadmin)){
	//membina cookie bagi 86400saat=1 hari
	$tamat=time()+(86400*30);
	setcookie('idadmin',$idadmin,$tamat);
	       echo"<h2>Salam kunjungan $namaadmin.</h2>";
		   echo"<br><big>Klik <a href='admin.php'>Di Sini</a> Sekarang Untuk Masuk. </big><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	}else{
	       echo"<p><big>Maaf ! Anda Bukan Admin.";
		   echo"<br><br>Klik <a href='index.php'>Di Sini</a> Sekarang.</big></p>";
	}
	}else{
	       echo"<p><big>Sila Masukkan Admin ID Dan Katalaluan Yang Telah Ditetap !";
		   echo"<br><br>Sila Login Semula <a href='loginadmin.php'>Di Sini</a>.</big></p>";
}
 } 
 ?>
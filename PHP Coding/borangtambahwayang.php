<?php if(empty($_POST['tambahfilem'])){ ?>
<p><img src="images/adm3.png"style="float:left;"></p> 
<h2>Tajuk Wayang</h2>
   <form action="selenggarawayang.php"method="POST">
   <p><i>*Required Field </i></p><br>
   <label>*Kod Wayang:</lable>
   <input type="text"name='kodwayang'placeholder="4000"max="12"required><br><br>
   <label>*Tajuk Wayang:</label>
   <input type="text"name='tajukwayang'placeholder="Tajuk Filem"required><br><br>
   <label>*Ulasan:</label><br>
   <textarea name="ulasan" cols="50" rows="5" placeholder="Ulasan Ringkas Filem"required></textarea><br><br>
   <label>*Kod Tontonan:</label>
   <select name="kodtontonan">
		 <?php 
   include'capaian.php';
   $SQLoption="select*from tontonan";
   $panggil=mysqli_query($connect,$SQLoption);
   while($data=mysqli_fetch_array($panggil)){
   $kodtontonan=$data['kodtontonan'];
   $jenistontonan=$data['jenistontonan'];
   echo"<option value='".$kodtontonan."'>".$kodtontonan."</option>";
   }
?></select>
  <br><br>
  <label>*Bahasa:</label>
		 <input type="radio" name='bahasa' value="Bahasa Melayu"required>Melayu
		 <input type="radio" name='bahasa' value="Bahasa Inggeris"required>Inggeris
		 <input type="radio" name='bahasa' value="Bahasa Cina"required>Cina
		 <input type="radio" name='bahasa' value="Bahasa Lain"required>Lain-lain<br><br>
         <input type="submit"name="tambahfilem"value="TAMBAH">
<?php }else{
    //Terima data dari borang secara POST
	$kodwayang=$_POST['kodwayang'];
	$tajuk=$_POST['tajukwayang'];
	$ulasan=$_POST['ulasan'];
	$kodtontonan=$_POST['kodtontonan'];
	$bahasa=$_POST['bahasa'];
	//sambung ke Pangkalan Data
	include'capaian.php';
	//Query panggil semua data
	$SQL="insert into wayang(kodwayang,tajukwayang,ulasan,kodtontonan,bahasa)values('$kodwayang','$tajuk','$ulasan','$kodtontonan','$bahasa')";
	//Laksanakan
	$tambah=mysqli_query($connect,$SQL);
	if($tambah){
	      echo"<p><big>Tajuk Wayang Baharu Berjaya Ditambah.</p></big><br>";
	}else{
	      echo"<p><big>Tajuk Wayang Baharu Gagal Ditambah.</p></big><br>";
	}
	mysqli_close($connect);
}
?>
</table><br><br><br><p><strong><i>Sila <a href="indexpaparwayang.php">Kilk Sini</a> Untuk Mendapat Jadual Senarai Wayang / Padam Wayang.</i></strong></p>
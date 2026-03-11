<?php if(empty($_POST['tambah'])){ ?>
<p><img src="images/adm3.png"style="float:left;"></p> 
<h2>No Kerusi</h2>
<form action="selenggarakerusi.php"method="POST">
 <p><i>*Required Field </i></p><br>
	<label>*No Tiket:</label>
	<input type='text' name='notiket' placeholder = '00'required><br><br>
   <label>*No Kerusi Dan Baris:</label>
   <input type="text"name="nokerusi_baris"placeholder="A10"required><br><br>
   <label>*Tarikh Tayangan:</label>
   <input type="date"name="tarikh_tayangan"required><br><br>
   <label>*Masa Tayangan:</label>
         <input type="radio" name='masa_tayangan' value="0800-1100"required>8am-11am
		 <input type="radio" name='masa_tayangan' value="1200-1500"required>12pm-3pm
		 <input type="radio" name='masa_tayangan' value="1600-2000"required>4pm-8pm
		 <input type="radio" name='masa_tayangan' value="2100-2400"required>9pm-12am
	<br><br>
	<label>*Nama Wayang:</label>
	<select name="kodwayang">
	        <?php
			include'capaian.php';
			$SQLwayang="select*from wayang";
			$panggil=mysqli_query($connect,$SQLwayang);
			while($data=mysqli_fetch_array($panggil)){
			$kodwayang=$data['kodwayang'];
			$tajukwayang=$data['tajukwayang'];
			echo"<option value='$kodwayang'>$tajukwayang</option>";
			}?>
	</select><br><br>
	<label>*Harga:</label>
	<input type="radio" name='harga' value="18"required>RM 18
    <input type="radio" name='harga' value="20"required>RM 20
	<br><br>
	<label>Status Kerusi:</label>
	<input type="hidden"name="status"value="Sedia Dijual">Sedia Dijual
	<br><br>
	<input type="submit"name="tambah"value="TAMBAH">
</form>
<?php }else{
   //Teriam data dari borang secara POST
   $notiket=$_POST['notiket'];
   $nokerusi_baris=$_POST['nokerusi_baris'];
   $tarikh_tayangan=$_POST['tarikh_tayangan'];
   $masa_tayangan=$_POST['masa_tayangan'];
   $kodwayang=$_POST['kodwayang'];
   $harga=$_POST['harga'];
   $status=$_POST['status'];
   //sambung ke Pangkalan Data
   include'capaian.php';
   //Query panggil semua data
   $SQL="insert into tiket(notiket,nokerusi_baris,tarikh_tayangan,masa_tayangan,kodwayang,harga,status)values('$notiket','$nokerusi_baris','$tarikh_tayangan','$masa_tayangan','$kodwayang','$harga','$status')";
   //Laksanakan
   $tambah=mysqli_query($connect,$SQL);
   if($tambah){
          echo"<p><big>No Kerusi Baru Berjaya Ditambah</p></big><br><br>";
	}else{
	      echo"<p><big>No Kerusi Baru Gagal Ditambah</p></big>";
	}
	mysqli_close($connect);
}
?>
</table><br><br><br>
<p><strong><i>Sila <a href="indexpaparkerusi.php">Kilk Sini</a> Untuk Mendapat Jadual Senarai Kerusi / Padam Kerusi.</i></strong></p><br>
<p><img src="images/plng5.png"style="float:left;"></p> 
<h2>Tempahan Kerusi Tiket Wayang</h2>
    <?php
	      $id=$_COOKIE['id'];
		  $kodwayang=$_GET['kodwayang'];
		  $tarikh_tayangan=$_GET['tarikh_tayangan'];
	?>
	<form action="prosespembelian.php"method="GET">
	      <input type="hidden"name="id"value="<?php echo $id; ?>">
		  <p><big>Semak kerusi yang belum dibeli.<br>
		  Rujuk senarai di <u>Sebelah</u>.</big></p>
          <p><i>*Required Field </i></p><br>
		  <label>*Pilih Kerusi:</label>
		         <select name="notiket">
				<!--Guna Data dari DBMS-->
				  <?php include'capaian.php';
				 $SQL="SELECT*from tiket where kodwayang='$kodwayang'AND tarikh_tayangan='$tarikh_tayangan'";
				 $panggil=mysqli_query($connect,$SQL);
				 while($data=mysqli_fetch_array($panggil)){
				       if($data['status']!='Telah Dibeli'){
					   $notiket=$data['notiket'];
			           $nokerusi_baris=$data['nokerusi_baris'];
					   $harga=$data['harga'];
					   echo"<option value='$notiket'>$nokerusi_baris  Harga (RM $harga)</option>";
					   }
					}
					?>
					</select><br><br>
					 <label>*Masa Tayangan:</label>
                    <input type="time"name="masa_tayangan"required>
					<p><img src="images/plng6.png"style="float:right;"></p> 
					<br><br><br>
					<input type="submit"name="prosestempah"value="PROSES">
	</form>
    <br><br><br>
    <?php
     mysqli_close($connect);
?>	 
<p>-- Jika Tidak Ada Pilihan Kerusi, Sila <a href="semaktiket.php">Kilk Sini</a> Untuk Pilih Semula.</p>
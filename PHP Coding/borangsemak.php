<!--Bahagian Pertama:Borang-->
<?php if(empty($_POST['semak'])){ ?>
<p><img src="images/adm6.png"style="float:left;"></p> 
<h2>Semak Jualan Tiket</h2>
<p>Masukkan Butiran Tayangan</p>
<form action="semak.php"method="POST">
<p><i>*Required Field </i></p><br>
    *Tarikh:
	<input type="date"name="tarikh"required><br><br>
	*Masa:
	     <input type="radio" name='masa' value="0800-1100"required>8am-11am
		 <input type="radio" name='masa' value="1200-1500"required>12pm-3pm
		 <input type="radio" name='masa' value="1600-2000"required>4pm-8pm
		 <input type="radio" name='masa' value="2100-2400"required>9pm-12am<br><br>
	<br><br><input type="submit"name="semak"value="SEMAK">
</form>
<!--Bahagian Kedua:pemprosesan Data-->
<?php }else{
    //pindahkan data secara POST ke sini
	$tarikh=$_POST['tarikh'];
	$masa=$_POST['masa'];
	//Papar Jadual Tempahan
	echo"<table border='1'><tr><th>Bil</th><th>No Tiket</th><th>Pelanggan</th><th>No Kerusi</th><th>Tarikh Tayangan</th><th>Masa</th><th>Tajuk Wayang</th><th>Tontonan</th><th>Bahasa</th></tr>";
	//Sambung ke pangkalan data
	include'capaian.php';
	//Query
	$SQL="select*from pelanggan inner join pembelian on pelanggan.id=pembelian.id inner join tiket on tiket.notiket=pembelian.notiket inner join wayang on wayang.kodwayang=tiket.kodwayang inner join tontonan on tontonan.kodtontonan=wayang.kodtontonan where tiket.tarikh_tayangan='$tarikh'AND tiket.masa_tayangan='$masa'";
	//Pembilang
	$i=0;
	$semak=mysqli_query($connect,$SQL);
	echo "<h3>Jadual Pembelian Tiket Pada :</h3>";
	while($hasil=mysqli_fetch_array($semak)){
    $notiket=$hasil['notiket'];
	$idpelanggan=$hasil['id'];
	$nokp=$hasil['nokp'];
	$nokerusi_baris=$hasil['nokerusi_baris'];
	$tarikh_tayangan=$hasil['tarikh_tayangan'];
	$masa_tayangan=$hasil['masa_tayangan'];
	$tajukwayang=$hasil['tajukwayang'];
	$tontonan=$hasil['kodtontonan'];
	$bahasa=$hasil['bahasa'];
	$i++;
	echo"<tr><td>$i</td><td>$notiket</td><td>$idpelanggan ($nokp) </td><td>$nokerusi_baris</td><td>$tarikh_tayangan</td><td>$masa_tayangan</td><td>$tajukwayang</td><td>$tontonan</td><td>$bahasa</td></tr>";
	}
	echo"</table>";
	mysqli_close($connect);
}
?>
<br><br><p><a href="semak.php">Semak Lagi</a></p>
<p><a href="indexsenarainama.php">Senarai Nama Pelanggan</a></p>
<button onclick="fungsirefresh()">REFRESH</button>
<script type="text/javascript">
	function fungsirefresh(){
		location.reload();
	}
</script>
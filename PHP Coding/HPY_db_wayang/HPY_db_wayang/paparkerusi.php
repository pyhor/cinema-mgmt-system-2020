<p><img src="images/adm5.png"style="float:left;"></p> 
<h2>Senarai Kerusi Ditawarkan Ikut Tajuk Filem:</h2>
<table border="1"><tr><th>Bil</th><th>No Tiket</th><th>No Baris Dan Kerusi</th><th>Tajuk Filem</th><th>Tarikh Dan Masa</th><th>Harga</th><th>Status Kerusi</th><th>Padam</th></tr>
<?php

    //sambung ke Pangkalan Data
	include'capaian.php';
	
	//Query panggil semua data
	$SQL="select*from tiket inner join wayang on tiket.kodwayang=wayang.kodwayang order by tiket.tarikh_tayangan and tiket.masa_tayangan ";
	
	//Laksanakan
	$panggil=mysqli_query($connect,$SQL);
	$i=0;
	while($data=mysqli_fetch_array($panggil)){
		   $notiket=$data['notiket'];
	       $nokerusi_baris=$data['nokerusi_baris'];
		   $tajukwayang=$data['tajukwayang'];
		   $tarikh=$data['tarikh_tayangan'];
		   $masa=$data['masa_tayangan'];
		   $harga=$data['harga'];
		   $status=$data['status'];
		   $i++;
		   echo"<tr><td>$i</td><td>$notiket</td><td>$nokerusi_baris</td><td>$tajukwayang</td><td>$tarikh  ($masa)</td><td>RM$harga</td><td>$status</td><td><a href='deletekerusi.php?id=".$nokerusi_baris."'>Padam</a></tr>";
	}
	mysqli_close($connect);
?>
</table><br><br>

<p><a href="tambahkerusi.php">Tambah Dengan Borang</a></p>
<br><br>
<button onclick="fungsiBack()">BACK</button>
<script type="text/javascript">
	function fungsiBack(){
		window.history.back();
	}
</script>
<button onclick="fungsirefresh()">REFRESH</button>
<script type="text/javascript">
	function fungsirefresh(){
		location.reload();
	}
</script>
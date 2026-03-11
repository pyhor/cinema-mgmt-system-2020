<!--Bahagian Penetapan ID Pengunjung-->
<?php
   $id=$_COOKIE['id'];
   echo"<h3>Semak Pembelian Anda:</h3>";
   //Sambungan Ke DBMS
   include'capaian.php';
   //Query
    $SQL="SELECT*from pelanggan inner join pembelian on pelanggan.id=pembelian.id inner join tiket on tiket.notiket=pembelian.notiket inner join wayang on wayang.kodwayang=tiket.kodwayang where pelanggan.id='$id'";
	$x=0;//$x adalah pembilang
	$panggil=mysqli_query($connect,$SQL);
	while($data=mysqli_fetch_array($panggil)){
	       $id=$data['id'];
		   $notiket=$data['notiket'];
		   $nokp=$data['nokp'];
		   $tarikh=$data['tarikh_tayangan'];
		   $sesi=$data['masa_tayangan'];
		   $tajuk=$data['tajukwayang'];
		   $kerusi=$data['nokerusi_baris'];
		   $harga=$data['harga'];
		   $tbeli=$data['tarikh_beli'];
		   $x++;  
    echo"<table border='1'>";
	echo"<tr><td>No Tiket:</td><td>$notiket</td></tr>
	       <tr><td>Pelangan:</td><td>$id ($nokp)</td></tr>
		   <tr><td>Tarikh Tayangan:</td><td>$tarikh</td></tr>
		   <tr><td>Sesi:</td><td>$sesi</td></tr>
		   <tr><td>Tajuk Wayang:</td><td>$tajuk</td></tr>
		   <tr><td>No Kerusi:</td><td>$kerusi</td></tr>
		   <tr><td>Harga Tiket:</td><td>RM$harga</td></tr>
		   <tr><td>Tarikh Beli:</td><td>$tbeli</td></tr>
		   ";
	echo"</table><br>";
	} 
	mysqli_close($connect);
?>
<p><big><strong>Note:</big></strong><br>1. Please come earlier more than 15 minutes before your movie is start. <br>
2. CANNOT cancel your ticket.<br><br>Thank You.</p>
<br>
<button onclick="fungsiCetak()">CETAK</button>
<script type="text/javascript">
    function fungsiCetak(){
	         window.print();
    }
	</script>
<button onclick="fungsirefresh()">REFRESH</button>
<script type="text/javascript">
	function fungsirefresh(){
		location.reload();
	}
</script>
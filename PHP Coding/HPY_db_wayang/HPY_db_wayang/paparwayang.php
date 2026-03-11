<p><img src="images/adm5.png"style="float:left;"></p> 
<h2>Jadual Senarai Wayang</h2>
<table border="1"><tr><th>Bil</th><th>Kod Wayang</th><th>Tajuk Filem</th><th>Ulasan</th><th>Kod Tontonan</th><th>Bahasa</th><th>Selenggara</th></tr>

<?php
    //sambung ke Pangkalan Data
	include'capaian.php';
	//Query panggil semua data
	$SQL="select*from wayang";
	//Laksanakan
	$panggil=mysqli_query($connect,$SQL);
	$i=0;
	while($data=mysqli_fetch_array($panggil)){
	       $kodwayang=$data['kodwayang'];
		   $tajuk=$data['tajukwayang'];
		   $ulasan=$data['ulasan'];
		   $tontonan=$data['kodtontonan'];
		   $bahasa=$data['bahasa'];
		   $i++;
		   echo"<tr><td>$i</td><td>$kodwayang</td><td>$tajuk</td><td>$ulasan</td><td>$tontonan</td><td>$bahasa</td><td><a href='deletewayang.php?id=".$kodwayang."'>Padam</a></td></tr>";
	}
	mysqli_close($connect);
?>
</table>
<br><br>
<p><a href="selenggara.php">Tambah Lagi</a></p>
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
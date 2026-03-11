<p><img src="images/adm5.png"style="float:left;"></p> 
<h2>Senarai Jenis Tontonan</h2>
<table border="1"><tr><th>Bil</th><th>Kod Tontonan</th><th>Jenis Tontonan</th><th>Padam</th></tr>

<?php
    //sambung ke Pangkalan Data
	include'capaian.php';
	//Query panggil semua data
	$SQL="select*from tontonan";
	//Laksanakan
	$panggil=mysqli_query($connect,$SQL);
	$i=0;
	while($data=mysqli_fetch_array($panggil)){
	
	       $kodtontonan=$data['kodtontonan'];
		   $jenistontonan=$data['jenistontonan'];
		   $i++;
		   echo"<tr><td>$i</td><td>$kodtontonan</td><td>$jenistontonan</td><td><a href='deletetontonan.php?id=".$kodtontonan."'>Padam</a></td></tr>";
	}
	mysqli_close($connect);
?>
</table>
<br>
<p><a href="tambahtontonan.php">Tambah Lagi</a></p>
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
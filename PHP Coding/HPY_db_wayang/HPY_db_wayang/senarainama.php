<p><img src="images/adm5.png"style="float:left;"></p> 
<h2>Jadual Senarai Nama Pelanggan</h2>
<table border="1"><tr><th>Bil</th><th>Id Pelanggan</th><th>Nokp Pelanggan</th><th>Email Pelanggan</th><th>Umur Pelanggan</th><th>Nama Pelanggan</th></tr>

<?php
    //sambung ke Pangkalan Data
	include'capaian.php';
	//Query panggil semua data
	$SQL="select*from pelanggan";
	//Laksanakan
	$panggil=mysqli_query($connect,$SQL);
	$i=0;
	while($data=mysqli_fetch_array($panggil)){
	       $id=$data['id'];
		   $nokp=$data['nokp'];
		   $email=$data['email'];
		   $umur=$data['umur'];
		   $nama=$data['nama'];
		   $i++;
		   echo"<tr><td>$i</td><td>$id</td><td>$nokp</td><td>$email</td><td>$umur</td><td>$nama</td></tr>";
	}
	mysqli_close($connect);
?>
</table>
<br><br><br><br><br>
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
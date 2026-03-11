<?php if(empty($_POST['tambah'])){ ?>
<p><img src="images/adm3.png"style="float:left;"></p> 
<h2>Jenis Tontonan</h2>
<form action="selenggaratontonan.php"method="POST">
<p><i>*Required Field </i></p><br>
    <label>*Kod Tontonan:</label>
	<input type="text"name="kodtontonan"placeholder="0000"required><br><br>
	<label>*Jenis Tontonan:</label>
	<input type="radio" name='jenistontonan' value="U"required>U
	<input type="radio" name='jenistontonan' value="P13"required>P13
	<input type="radio" name='jenistontonan' value="18"required>18
	<br><br><br>
	<input type="submit"name="tambah"value="TAMBAH">
</form>
<?php }else{
    //Terima data dari borang secara POST
	$kodtontonan=$_POST['kodtontonan'];
	$jenistontonan=$_POST['jenistontonan'];
	//sambung ke Pangkalan Data
	include 'capaian.php';
	//Query panggil semua data
	$SQL="insert into tontonan(kodtontonan,jenistontonan)values('$kodtontonan','$jenistontonan')";
	//Laksanakan	
	$tambah=mysqli_query($connect,$SQL);
    if($tambah){
	       echo"<p><big>Jenis Tontonan Baharu Berjaya Ditambah.</p></big>";
	}else{
	       echo"<p><big>Jenis Tontonan Baharu Gagal Ditambah.</p></big>";
	}
	mysqli_close($connect);
}
?>
</table><br><br><br>
<p><strong><i>Sila <a href="indexpapartontonan.php">Kilk Sini</a> Untuk Mendapat Jadual Senarai Tontonan / Padam Tontonan.</storng></p>
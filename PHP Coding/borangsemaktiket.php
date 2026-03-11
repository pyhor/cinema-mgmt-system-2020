<?php if(empty($_GET['pembelian'])){
    $id=$_COOKIE['id'];
?>
<!--Bahagian Borang Pilih Tarikh-->
<p><img src="images/plng3.png"style="float:left;"></p> 
<h2>Borang Pembelian Tiket Wayang</h2>
<form action="pembelian.php"method="GET">
 <p><i>*Required Field </i></p><br>
   <label>*Sila Pilih Tajuk Filem:</label>
   <select name="kodwayang"required>
           <?php
		   include'capaian.php';
		   $SQL="select*from wayang";
		   $semak=mysqli_query($connect,$SQL);
		   while($tajuk=mysqli_fetch_array($semak)){
		   echo "<option value='".$tajuk['kodwayang']."'>".$tajuk['tajukwayang']."</option>";
		   } ?>
   </select><br><br>
   <label>*Tarikh Tayangan:</label>
   <input type="date"name="tarikh_tayangan"required>
   <br><br>
   <p><img src="images/plng6.png"style="float:right;"></p> 
   <input type="submit"name="pembelian"value="SEMAK">
</form><br><br>
<?php }else{
    //Bahagian Proses Data Tarikh Sesuai
	$kodwayang=$_GET['kodwayang'];
	$tarikh_tayangan=$_GET['tarikh_tayangan'];
	//Sambungan Ke DBMS
	include'capaian.php';
	//Query Semak Unit Kosong
	$SQL2="SELECT*from tiket where kodwayang='$kodwayang'AND tarikh_tayangan='$tarikh_tayangan'";
	echo"<h2>Senarai Kerusi Belum Dibeli dan Sesi Tayangan:</h2>";
	echo"<p><big>Kod Wayang:$kodwayang <br>";
	echo"Tarikh Tayangan:$tarikh_tayangan </p></big><br>";
	echo"<table border='1'><tr><th><p><big>No Kerusi</p><big></th><th><p><big>Masa Tayangan</p></big></th></tr>";
	echo"<tr>";
	$panggil=mysqli_query($connect,$SQL2);
	while($data=mysqli_fetch_array($panggil)){
	       $kerusi=$data['nokerusi_baris'];
		   $masa=$data['masa_tayangan'];
		   $status=$data['status'];
		   //Papar senarai kerusi yang belum dibeli
		   if($status=='Sedia Dijual'){
		   echo"<td><p><big>$kerusi</p></big></td>
		   <td><p><big>$masa</p></big></td></tr>";
	  }
	}
	echo"</table>";
}
?>
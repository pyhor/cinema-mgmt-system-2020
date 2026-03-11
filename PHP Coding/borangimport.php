<!--Import Data Tiket-->
<!--Bahagian Borang upload-->
<?php if(empty($_POST['import'])){ ?>
<p><img src="images/adm3.png"style="float:left;"></p> 
<h2>Kemudahan Import Data Kerusi Dan Harga</h2>
<p><b>Peringatan:</b>Sebelum anda tambah kerusi dan menetapkan harga secara import,sila tambah dahulu tajuk wayang(filem) pada menu Selenggara Data. Kemudian tambah tajuk wayang dengan butang Selenggara Tajuk Wayang.</p>
<form action="import.php"method="POST"name="upload_excel"enctype="multipart/form-data">
   <label>Masukkan Data Jenis CSV Bagi Menetapkan Penawaran Kerusi Wayang</label><br>
   <br><fieldset>
   <input type="file"name="file"id="file"required>
   <input type="submit"name="import"value="Upload Fail CSV">
   </fieldset>
</form>
<!--Bahagian Pemprosesan Import-->
<?php }else{
     //Terima kiriman fail dari Borang Import
	 $faildata=$_FILES['file']['tmp_name'];
	 $bukafail=fopen($faildata,"r");
	 
	 //banyak data-data yang tersimpan hendak dibuka
	while(($GETdata=fgetcsv($bukafail,1000,',')) !== FALSE){
		
	 //Sambung ke Pangkalan Data DBMS
	 include'capaian.php';
	 
	 //Query masukan data
	 $SQL="insert into tiket(notiket,nokerusi_baris,tarikh_tayangan,masa_tayangan,kodwayang,harga,status)
values('$GETdata[0]','$GETdata[1]','$GETdata[2]','$GETdata[3]','$GETdata[4]','$GETdata[5]','$GETdata[6]')";
     $simpan=mysqli_query($connect,$SQL);
	           if($simpan){
			          echo"<p><big>Import Kerusi Baharu Telah Berjaya.</p></big><br><br>";
					  echo"<button onclick='halamanSebelum()'>Halaman Sebelum</button>";
				}else{
				      echo"<p><big>Import Kerusi Baharu Gagal.</p></big><br><br>";
					  echo"<button onclick='halamanSebelum()'>Halaman Sebelum</button>";
				}
	}
	fclose($bukafail);
}
    ?>
	<script>
		function halamanSebelum(){
		window.history.back();
			}
	</script>
	<br><br><br>
	<p><i>*Isi Dengan <a href="tambahkerusi.php">Borang</a>.</p></i>
	<br><br><br><br>
<p><strong>Sila <a href="indexpaparkerusi.php">Kilk Sini</a> Untuk Mendapat Jadual Senarai Kerusi.</strong></p>
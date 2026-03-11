<p><img src="images/plng4.png"style="float:left;"></p> 
<h2><u>Statistik Anda:</u></h2>
<?php
   include'capaian.php';
   $SQLkira="select SUM(harga)from tiket inner join pembelian on tiket.notiket=pembelian.notiket where pembelian.id='$id'";
   $kira=mysqli_query($connect,$SQLkira);
   $rekod=mysqli_fetch_array($kira);
   echo"Jumlah Belian Anda:RM".$rekod['SUM(harga)'];
   $SQLbilang="select COUNT(id)from pembelian where id='$id'";
   $bilang=mysqli_query($connect,$SQLbilang);
   $data=mysqli_fetch_array($bilang);
   echo"<br><br>Jumlah Tiket Dibeli:".$data['COUNT(id)'];
   ?><br>
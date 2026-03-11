<?php
  //statistik pelanggan
  echo"<u><big><strong>Statistik Admin</u></big></strong>";
  include'capaian.php';
  $SQLpelanggan="SELECT COUNT(id)from pelanggan";
  $SQLkira="SELECT COUNT(pelanggan.nokp),SUM(tiket.harga),COUNT(tiket.notiket)from pelanggan inner join pembelian on pelanggan.id=pembelian.id inner join tiket on tiket.notiket=pembelian.notiket";
  //laksanakan dua query
  $bilang=mysqli_query($connect,$SQLpelanggan);
  $kira=mysqli_query($connect,$SQLkira);
  $rekod=mysqli_fetch_array($kira);
  $data=mysqli_fetch_array($bilang);
  //kiraan
  $bilpelanggan=$data['COUNT(id)'];
  $jumjualan=$rekod['SUM(tiket.harga)'];
  $biltiket=$rekod['COUNT(tiket.notiket)'];
  echo"<br><p><big>Bilangan Pelanggan: $bilpelanggan";
  echo"<br>Bilangan Tiket Dijual: $biltiket";
  echo"<br>Jumlah Jualan Tiket: RM$jumjualan</p></big>";
  ?>
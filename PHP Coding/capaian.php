<?php
   $namaHOST='localhost';
   $namaUSER='root';
   $katalaluan='';//tanpa katalaluan-kosongkan quote
   $namaDB='db_wayang';
   
   $connect=mysqli_connect(
           $namaHOST,
		   $namaUSER,
		   $katalaluan,
		   $namaDB );
   if(!$connect){
          echo"Capaian Ke Pangkalan Data Gagal";
   }else{
       //echo"Capaian Ke Pangkalan Data Berjaya";
   }
 ?>
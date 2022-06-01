<?php
   $host="localhost";
   $user="root";
   $pass="";
   $db="dap";//nama database
   //meakukan koneksi ke database
   $koneksi=mysqli_connect($host,$user,$pass,$db);

   if(!$koneksi){
   echo "gagal konek" . die(mysqli_error($koneksi));
   }//else{
   //     echo "konek sukses";
   // }
?>
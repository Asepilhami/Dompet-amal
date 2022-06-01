<?php
   include 'koneksi.php';
   $name=$_POST['name'];
   $tgl_lahir=$_POST['tgl_lahir'];
   $email=$_POST['email'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $input=mysqli_query($koneksi,"INSERT INTO user VALUES ('$name','$email','$tgl_lahir','$username','$password')") or die(mysql_error());
   if($input){
      echo "data berhasil disimpan";
         header("location:index.php");
   }else{
      echo "gagal disimpan";
   }
?>
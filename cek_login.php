<?php
   //mengaktifkan session php
   session_start();
   //menghubungkan dengan koneksi
   include 'koneksi.php';
   //menangkap data yang dikirim dengan username dan password yang sesuai
   $username=$_POST['username'];
   $password=$_POST['password'];
   //meyeleksi data admin dengan passwor yang sesuai
   $data=mysqli_query($koneksi,"SELECT * FROM user where username='$username' and password='$password'");
   if(mysqli_num_rows($data)>0){
      $row=mysqli_fetch_array($data);//membuat session

      $_SESSION['user']=$row['username'];
      $_SESSION['pass']=$row['password'];
      header("location:index1.php");
   }
   else{
      echo "data anda tidak valid";
   }
?>
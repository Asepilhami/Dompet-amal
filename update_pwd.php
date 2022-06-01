<?php
   include 'koneksi.php';
   $username=$_POST['username'];
   $password=$_POST['password'];
   $result=mysqli_query($koneksi,"UPDATE user SET password='$password' WHERE username='$username'");
   //redirect to home page to display update user in list
   header("location:account.php");

?>
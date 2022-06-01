<?php
   include 'koneksi.php';
   $nama=$_POST['nama'];
   $email=$_POST['email'];
   $jp=$_POST['jp'];
   $deskripsi=$_POST['deskripsi'];

   $foto    =$_FILES['foto']['name'];
   $ukuran_file=$_FILES['foto']['size'];
   $x       = explode('.',$foto);
   $exstensi   = strtolower(end($x));
   $exstensi_diperbolehkan = array('jpg','png' );
   $tmp_file   =$_FILES['foto']['tmp_name'];
   $path    ="image/".$foto;
  
   if (in_array($exstensi, $exstensi_diperbolehkan) === true) {
      if ($ukuran_file<=1000000) {
         if (move_uploaded_file($tmp_file, "$path")) {
            //echo "Berhasil upload gambar";
            $query="INSERT INTO permohonan VALUES('$nama','$email','$jp','$deskripsi','$foto')";
            $sql=mysqli_query($koneksi,$query);
            if ($sql) {
               header("Location:Registrasi.php");
            }else{
               echo "Terjadi kesalahan upload";
               echo "<br><a href='Registrasi.php'>kembali</a>";
            }
         }
      }
   }
?>
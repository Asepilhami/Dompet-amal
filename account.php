<?php
session_start();
if(!isset($_SESSION["user"])){// jika sessio tidak ada maka kembali ke login
header("Location: login.php");
exit;
}

$user=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>DAP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div
      class="container-fluid p-2 bg-primary d-flex justify-content-center"
      style="height: 60px"
    >
      <div class="angleright text-start col-4 ms-4 mt-2">
        <a href="index1.php"
          ><i
            class="fa fa-angle-left"
            style="color: white; border-color: white; font-size: 30px"
          ></i
        ></a>
      </div>
      <div class="account text-center col-4">
        <span class="#"
          ><a
            href="#"
            style="
              font-size: 30px;
              color: white;
              text-transform: uppercase;
              font-weight: 900;
            "
            >Account</a
          ></span
        >
      </div>
      <div class="col-4"></div>
    </div>
    <div class="container w-50 mt-2">
      <div
        class="row border border-dark py-4"
        style="border-color: black; height: 80px"
      >
        <span
          ><a href="#" style="font-size: 20px; font-weight: 600"
            ><i class="fa fa-user me-2"> </i> <?php echo $user;?></a
          ></span
        >
      </div>
      <div
        class="row border border-dark py-4"
        style="border-color: black; height: 80px"
      >
        <span
          ><a href="#" style="font-size: 20px; font-weight: 600"
            ><i class="fa fa-user me-2"> </i> Profil</a
          ></span
        >
      </div>
      <div
        class="row border border-dark py-4"
        style="border-color: black; height: 80px"
      >
        <span
          ><a href="#" data-bs-toggle="modal" data-bs-target="#pwd<?php echo $data['username'];?>" style="font-size: 20px; font-weight: 600"
            ><i class="fa fa-key me-2"> </i> Ganti Password</a
          ></span
        >
      </div>
      <div
        class="row border border-dark py-4"
        style="border-color: black; height: 80px"
      >
        <span
          ><a href="#" style="font-size: 20px; font-weight: 600"
            ><i class="fa fa-shield me-2"> </i> Privasi</a
          ></span
        >
      </div>
      <div
        class="row border border-dark py-4"
        style="border-color: black; height: 80px"
      >
        <span
          ><a href="#" style="font-size: 20px; font-weight: 600"
            ><i class="fa fa-file me-2"> </i> Syarat</a
          ></span
        >
      </div>
      <div
        class="row border border-dark py-4"
        style="border-color: black; height: 80px"
      >
        <span
          ><a href="logout.php" style="font-size: 20px; font-weight: 600"
            ><i class="fa fa-sign-out"></i> Keluar</a
          ></span
        >
      </div>
    </div>

    <!-- change pasword-->
     <div class="example-modal">
                <div class="modal fade" id="pwd<?php echo $data['username'];?>" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title">Ganti Password</h3>
                      </div>
                      <div class="modal-body">
                        <form action="update_pwd.php" method="post" role="form">
                          <?php
                          $username = $data['username'];
                          $query1 = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'"); while ($data1 = mysqli_fetch_assoc($query1)) {
                            ?>
                            <div class="form-group">
                              <div class="row">
                                <label class="col-sm-3 control-label text-right">Masukkan Password Lama</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="password"></div>
                              </div>
                            </div>
                           
                            <div class="form-group">
                              <div class="row">
                                <label class="col-sm-3 control-label text-right">Masukkan Password Baru</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="password" value="<?php echo
                                $data1['password']; ?>"></div>
                              </div>
                            </div>
                           
                          <div class="modal-footer">
                            <button id="noedit" type="button" class="btn btn-danger pull-left" data- dismiss="modal">Batal</button>
                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                          </div>
                          <?php
                        }
                        ?>
                      </form> </div> </div> </div> </div></div>


                      


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>

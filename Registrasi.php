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
    <!-- Spinner Start -->

    <!-- Spinner End -->

    <!-- Navbar Start -->

    <nav
      class="
        navbar navbar-expand-lg navbar-dark
        sticky-top
        py-lg-0
        me-n1
        wow
        bg-primary
        fadeIn
      "
      data-wow-delay="0.1s"
      style="height: 60px"
    >
      <div class="row col-12" style="height: 60px">
        <div class="col-2 pt-3">
          <ul class="list-unstyled ms-3">
            <a class="navbar-brand" href="index1.php"> <img src="img/Logo.png" alt="" width="80" height="50" class="d-inline-block align-text-top"> <span class="text-warning">DAP</span>POLITEKNIK</a>
          </ul>
          <!-- <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a> -->
        </div>
        <div class="col-7 d-flex justify-content-center pt-2">
          <ul class="d-flex list-unstyled">
            <li>
              <a href="index1.php" class="nav-item nav-link">Home</a>
            </li>
            <li>
              <a href="laporan.html" class="nav-item nav-link">Laporan</a>
            </li>
            <li>
              <a href="donasi.php" class="nav-item nav-link">Donasi</a>
            </li>

            <li><a href="about.html" class="nav-item nav-link">About Us</a></li>
            <li>
              <a href="contact.html" class="nav-item nav-link ">Contact Us</a
              >
            </li>
          </ul>
        </div>

        <div
          class="search col-3 text-end pt-3 d-flex me-n3"
          style="height: 60px"
        >
          <ul class="d-flex list-unstyled">
            <li>
              <input type="text" placeholder="search" />
              <i class="fa fa-search text-white"></i>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link justify-content-center ms-3 mt-n2"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
              >
                ☰
              </a>
              <ul
                class="drop dropdown-menu bg-dark"
                aria-labelledby="navbarDropdown"
                style="margin-left: -70px"
              >
                <li><a class="dropdown-item" href="account"><?php echo $user;?> </a></li>
                <li><a class="dropdown-item" href="#">Riwayat</a></li>
                <li><a class="dropdown-item" href="#">Iuran</a></li>
                <li><a class="dropdown-item" href="laporan.php">Laporan</a></li>
                <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
               <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#out">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navbar End -->

    <!-- Log out -->
       <!-- Log out -->
    <div class="modal fade" id="out" tabindex="-1" role="dialog" aria-labelledby="ModalcobaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSayaLabel">Apakahh Anda Ingin Keluar ?</h5>
                    <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <a href="logout.php"><button type="button" class="btn btn-primary">Yes</button></a> 
                    </div>
                </div>
            </div>
          </div>

   
    <!--content-->
    <!-- Registration Start -->
    <div class="registrasi container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h6 class="section-title bg-white text-center text-primary px-3">
            <span class="registration">Pengajuan DAP</span>
          </h6>
        </div>
      </div>
        <div class="row g-0 justify-content-center">
         <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
          <div class="row g-4">
              <div class="col-12">
                <h6 class="text-start text-primary text-uppercase"><i class="fa fa-angle-right"></i>  Registrasi Permohonan Bantuan</h6>
                <h6 class="text-start text-primary text-uppercase"><i class="fa fa-angle-right"></i>  Dan klaim Dompet Amal</h6>
                <p> Silakan mengisi formulir permohonan ini kepada pengurus Dompet Amal Polibatam (DAP). Agar kami dapat melakukan proses bantuan dan klaim terhadap permohonan anda, tuliskan email yang masih berlaku di dalam kolom pesan.Lampirkan dokumen jika ada. Terimakasih .. </p>
              </div>
            </div>
        </div>
        <div class="row g-0 justify-content-center">
          <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
            <form action="tambah_dap.php" method="POST" enctype="multipart/form-data">
              <div class="row g-3">
                <div class="col-12">
                  <div class="form-floating">
                    <p class="form">Nama :</p>
                    <input
                      type="text"
                      class="form-control"
                      id="nama"
                      name="nama"
                      placeholder="Nama"
                    />
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                     <p class="form">Email :</p>
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Email"
                    />
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                      <tr>
                        <td>Jenis Permohonan</td>
                        <td>:</td>
                        <td><select name="jp"> 
                      <option value="Berobat">Berobat</option>
                      <option value="Pernikahan">Pernikahan</option>
                      <option value="Pernikahan">Musibah</option>
                      <option value="melahirkan">Melahirkan</option>
                      <option value="akikah">Akikah</option>
                      <option value="lainnya">Lainnya</option></td></select>
                      </tr>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                  <p class="form">Deskripsi Permohonan</p>
                   <textarea
                      type="text"
                      name="deskripsi"
                      class="form-control"
                      id="Deskrpisi"
                      placeholder="Isi Deskrpsi Permohonan"
                      height="180"
                    ></textarea>
                  </div>
                </div>
                <div>
                <br><br>
                      <tr>
                        <td>Masukan Gambar :</td>
                        <td><input type="file" name="foto" id="foto"></td>
                      </tr></div>

                <div class="col-12 text-center">
                  <button
                    class="btn btn-primary rounded-pill py-3 px-5"
                    type="submit"
                  >
                    Kirim
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->
    <!--content end-->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Address</h5>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i> Batam,Indonesia
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>+062 822 8717 7114
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>dompetamal@gmail.com
            </p>
            <div class="d-flex pt-2">
              <a
                class="btn btn-square btn-outline-secondary rounded-circle me-1"
                href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a
                class="btn btn-square btn-outline-secondary rounded-circle me-1"
                href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a
                class="btn btn-square btn-outline-secondary rounded-circle me-1"
                href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a
                class="btn btn-square btn-outline-secondary rounded-circle me-0"
                href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Quick Links</h5>
            <a class="btn btn-link" href="laporan.php">Laporan</a>
            <a class="btn btn-link" href="registrasi.php">Registrasi</a>
            <a class="btn btn-link" href="donasi.php">Donasi</a>
            <a class="btn btn-link" href="about.php">About Us</a>
            <a class="btn btn-link" href="contact.php">Contact Us</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Gallery</h5>
            <div class="row g-2">
              <div class="col-4">
                <img
                  class="img-fluid rounded"
                  src="img/project-1.jpg"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid rounded"
                  src="img/project-2.jpg"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid rounded"
                  src="img/project-3.jpg"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid rounded"
                  src="img/project-4.jpg"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid rounded"
                  src="img/project-5.jpg"
                  alt="Image"
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid rounded"
                  src="img/project-6.jpg"
                  alt="Image"
                />
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Develop</h5>
            <a class="btn btn-link" href="">Dini</a>
            <a class="btn btn-link" href="">Syahril</a>
            <a class="btn btn-link" href="">Dimas</a>
            <a class="btn btn-link" href="">Asep</a>
            <a class="btn btn-link" href="">Pawandi</a>
          </div>
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a href="#">Dompet_Amal.com</a>, All Right Reserved.
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

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
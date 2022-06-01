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
            <a class="navbar-brand" href="#"> <img src="img/Logo.png" alt="" width="100" height="40" > <span class="text-warning">DAP</span>POLITEKNIK</a>
          </ul>
          <!-- <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a> -->
        </div>
        <div class="col-7 d-flex justify-content-center pt-2">
          <ul class="d-flex list-unstyled">
            <li>
              <a href="index.html" class="nav-item nav-link active">Home</a>
            </li>
            <li>
              <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="nav-item nav-link">Laporan</a>
            </li>
            <li>
              <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="nav-item nav-link">Donasi</a>
            </li>
            
            
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#login" class="nav-item nav-link">About Us</a></li>
            <li>
              <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="nav-item nav-link">Contact Us</a>
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
                <li><a class="dropdown-item" href="login.php">Log in</a></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#coba">Registrasi</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Registrasi -->
    <div class="modal fade" id="coba" tabindex="-1" role="dialog" aria-labelledby="ModalcobaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSayaLabel">INPUT DATA</h5>
                        <button type="button"  class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                    <form action="tbh_user.php" method="POST" role="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="name"  name="name" placeholder="Isi Nama Lengkap">
                        </div>
                         <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" id="mail" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" id="password" name="password"  placeholder="Masukkan Password" type="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                         <input type="submit" name="submit" class="btn btn-primary" value="Registrasi">
                    </div>
                    </form>
                </div>
            </div>
          </div>

    <!-- Navbar End -->

    <!-- carousel start -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="0"
          class="active"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="1"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="2"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="3"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="4"
        ></button>
      </div>

      <!-- The slideshow/carousel -->
      <div style="width: 100%;height: 80%;">
        <div class="carousel-inner">
          <div class="carousel-item active bg-danger">
            <img src="img/Polibatam.jpg" alt="Los Angeles" class="d-block" />
             <div class="carousel-caption">
             <h3 class="text-warning">POLITEKNIK NEGERI BATAM</h3>
          </div>
        </div>
        <div class="carousel-item bg-primary">
          <img src="#" alt="Chicago" class="d-block" style="width: 100%" />
          <div class="carousel-caption">
            <h3>Dini</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="#" alt="New York" class="d-block" style="width: 100%" />
          <div class="carousel-caption">
            <h3>Asep</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
    

      <!-- Left and right controls/icons -->
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    </div>


    <!-- carousel end -->

    <!-- Facts Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="fact-item bg-light rounded text-center h-100 p-5">
              <i class="fas fa-hand-holding-heart fa-4x text-primary mb-4"></i>

               <a href="#" data-bs-toggle="modal" data-bs-target="#login"><h5 class="mb-3">Donasi</h5></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="fact-item bg-light rounded text-center h-100 p-5">
              <i class="fa fa-file-alt fa-4x text-primary mb-4"></i>

               <a href="#" data-bs-toggle="modal" data-bs-target="#login"><h5 class="mb-3">Laporan</h5></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="fact-item bg-light rounded text-center h-100 p-5">
              <i class="fa fa-users fa-4x text-primary mb-4"></i>
              <a href="#" data-bs-toggle="modal" data-bs-target="#login"><h5 class="mb-3">Pengajuan DAP</h5></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- berita-->
    <div class="berita container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp news"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <h6 class="section-title bg-white text-center text-primary px-3">
            <span class="news">News</span>
          </h6>
        </div>
      </div>

       <div class="container mt-4">
        <div class="row g-4 berita">
          <!--berobat-->

          <div
            class="berobat col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div
              class="fact-item rounded text-center h-250 p-1"
              style="height: 400px"
            >
              <div class="judul m-2">
                <a href="#"><i></i></a>
              </div>
              <div id="berobat" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators tombol mb-n3">
                  <button
                    type="button"
                    data-bs-target="#berobat"
                    data-bs-slide-to="0"
                    class="active"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#berobat"
                    data-bs-slide-to="1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#berobat"
                    data-bs-slide-to="2"
                  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active col-12">
                    <div class="img">
                      <img src="img/1.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Wafat</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img">
                      <img src="img/14.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Penggalangan Dana</h6>
                        <h6>Terkumpul <br />Rp 2.171.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img">
                      <img src="img/15.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Penggalangan Dana</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <button
                  class="carousel-control-prev mb-5"
                  type="button"
                  data-bs-target="#berobat"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button
                  class="carousel-control-next mb-5"
                  type="button"
                  data-bs-target="#berobat"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>
            </div>
          </div>

          <!--berobat end -->
          <!-- pernikahan -->
          <div
            class="pernikahan col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div
              class="fact-item rounded text-center h-250 p-1"
              style="height: 400px"
            >
              <div class="judul m-2">
                <a href="#"><i></i></a>
              </div>
              <div
                id="pernikahan"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <!-- Indicators/dots -->
                <div class="carousel-indicators tombol mb-n3">
                  <button
                    type="button"
                    data-bs-target="#pernikahan"
                    data-bs-slide-to="0"
                    class="active"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#pernikahan"
                    data-bs-slide-to="1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#pernikahan"
                    data-bs-slide-to="2"
                  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="img">
                      <img src="img/16.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Penggalangan Dana</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img">
                      <img src="img/2.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Wafat</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img">
                      <img src="img/6.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Berbagi Iftar</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <button
                  class="carousel-control-prev mb-5"
                  type="button"
                  data-bs-target="#pernikahan"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button
                  class="carousel-control-next mb-5"
                  type="button"
                  data-bs-target="#pernikahan"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>
            </div>
          </div>
          <!-- pernikahan end -->
          <!-- musibah -->
          <div
            class="musibah col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div
              class="fact-item rounded text-center h-250 p-1"
              style="height: 400px"
            >
              <div class="judul m-2">
                <a href="#"><i></i></a>
              </div>
              <div id="musibah" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators tombol mb-n3">
                  <button
                    type="button"
                    data-bs-target="#musibah"
                    data-bs-slide-to="0"
                    class="active"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#musibah"
                    data-bs-slide-to="1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#musibah"
                    data-bs-slide-to="2"
                  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="img">
                      <img src="img/18.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Santunan Anak Yatim</h6>
                        <h6>Terkumpul <br />Rp 3.271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img">
                      <img src="img/19.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Santunan Anak Yatim</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img">
                      <img src="img/9.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Wafat</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <button
                  class="carousel-control-prev mb-5"
                  type="button"
                  data-bs-target="#musibah"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button
                  class="carousel-control-next mb-5"
                  type="button"
                  data-bs-target="#musibah"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>
            </div>
          </div>
          <!-- musibah end -->
        </div>
        <div class="row g-4 berita mt-2">
          <!--aqiqah-->
          <div
            class="aqiqah col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div
              class="fact-item rounded text-center h-250 p-1"
              style="height: 400px"
            >
              <div class="judul m-2">
                <a href="#"><i></i></a>
              </div>
              <div id="aqiqah" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators tombol mb-n3">
                  <button
                    type="button"
                    data-bs-target="#aqiqah"
                    data-bs-slide-to="0"
                    class="active"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#aqiqah"
                    data-bs-slide-to="1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#aqiqah"
                    data-bs-slide-to="2"
                  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="img">
                      <img src="img/8.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Berbagi Masker</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img">
                      <img src="img/8.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Berbagi Masker</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img">
                      <img src="img/10.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Wafat</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <button
                  class="carousel-control-prev mb-5"
                  type="button"
                  data-bs-target="#aqiqah"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button
                  class="carousel-control-next mb-5"
                  type="button"
                  data-bs-target="#aqiqah"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>
            </div>
          </div>

          <!--aqiqah end -->
          <!-- melahirkan -->
          <div
            class="melahirkan col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div
              class="fact-item rounded text-center h-250 p-1"
              style="height: 400px"
            >
              <div class="judul m-2">
                <a href="#"><i></i></a>
              </div>
              <div
                id="melahirkan"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <!-- Indicators/dots -->
                <div class="carousel-indicators tombol mb-n3">
                  <button
                    type="button"
                    data-bs-target="#melahirkan"
                    data-bs-slide-to="0"
                    class="active"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#melahirkan"
                    data-bs-slide-to="1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#melahirkan"
                    data-bs-slide-to="2"
                  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="img">
                      <img src="img/11.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Wakaf</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img">
                      <img src="img/3.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Panti Asuhan</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img">
                      <img src="img/13.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Penggalangan Dana</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <button
                  class="carousel-control-prev mb-5"
                  type="button"
                  data-bs-target="#melahirkan"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button
                  class="carousel-control-next mb-5"
                  type="button"
                  data-bs-target="#melahirkan"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>
            </div>
          </div>
          <!-- melahirkan end -->
          <!-- none -->
          <div
            class="none col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div
              class="fact-item rounded text-center h-250 p-1"
              style="height: 400px"
            >
              <div class="judul m-2">
                <a href="#"><i></i></a>
              </div>
              <div id="none" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators tombol mb-n3">
                  <button
                    type="button"
                    data-bs-target="#none"
                    data-bs-slide-to="0"
                    class="active"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#none"
                    data-bs-slide-to="1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#none"
                    data-bs-slide-to="2"
                  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="img">
                      <img src="img/20.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Penggalangan Dana</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img">
                      <img src="img/21.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Penggalangan Dan</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img">
                      <img src="img/4.jpg" alt="" />
                    </div>
                    <div class="d-flex">
                      <div class="note mt-3 text-start col-6 ms-0">
                        <h6>Panti Asuhan</h6>
                        <h6>Terkumpul <br />Rp 271.000</h6>
                      </div>
                      <div class="col-6 my-auto text-end">
                        <a href="#">
                          <button type="button" class="btn btn-primary me-1">
                            Donate
                          </button></a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <button
                  class="carousel-control-prev mb-5"
                  type="button"
                  data-bs-target="#none"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button
                  class="carousel-control-next mb-5"
                  type="button"
                  data-bs-target="#none"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>
            </div>
          </div>
          <!-- none end -->
        </div>
      </div>
    </div>

    <!-- berita end -->
    <!-- Login dulu -->
     <!-- Log out -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="ModalcobaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSayaLabel">Maaf Anda harus login ?</h5>
                        <button type="button"  class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#coba">Daftar</button>
                        <a href="login.php"><button type="button" class="btn btn-primary">Login</button></a> 
                    </div>
                </div>
            </div>
          </div>

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
            <a class="btn btn-link" href="index.php">Home</a>
            <a class="btn btn-link" href="">Laporan</a>
            <a class="btn btn-link" href="">Donasi</a>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
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
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>

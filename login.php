<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
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
            <style>
                    *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-image: url(img/BckLogin.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.container{
    position: absolute;
    left: 50%;
    top: 60%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 500px;
    background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
.container h1{
    text-align: center;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid red;
}
.container h4{
    text-align: left;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid red;
}
.container label{
    text-align: left;
    color: whitesmoke;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid red;
    color: #fff;
    font-size: 20px;
    margin: 10 rem auto 8.1 rem auto;
}
.container form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#2979ff;
    font-size: 18px;
    color: #fafafa;
}
            </style>
        </head>
            
            <body class="bg-utama">
               
                <div class="container">
                    <div>
                    <center>
                    <h1>LOGIN</h1>
                    <div class="underline-tittle"></div>
                    <h4>Masukan Username & Password</h4>
                    </center>
                    </div>
                    <form action="cek_login.php" method="POST" class="form">
                        <label for="Username" style="padding-top: 13px">&nbsp;Username</label>
                        <input
                        class="form-content"
                        type="text" name="username" placeholder="Masukkan username"/>
                        <div class="form-border"></div>

                        <label for="user-password" style="padding-top: 13px">&nbsp;Password</label>
                        <input
                        class="form-content"
                        type="password"
                        name="password"
                        />
                        <div class="form-border"></div>
                    <input id="submit-btn" type="submit"  value="LOGIN">
                    <h5>belum punya akun ? <a href="#" data-bs-toggle="modal" data-bs-target="#registrasi">Daftar.</a></h5>
                </form>
            </div>
               <!-- Registration -->
           <div class="modal fade" id="registrasi" tabindex="-1" role="dialog" aria-labelledby="ModalcobaLabel" aria-hidden="true">
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
                            <label>Tanggal lahir</label>
                            <input type="date" class="form-control" id="date" name="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="mail" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
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

        </body>
  
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
</html>
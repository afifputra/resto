<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- <meta charset="utf-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <link rel=”icon” href=”Logo.png” type="image">

    <title>Gubug Sambel Rawit</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    </head>
    
    <body>
    
        <!-- ***** Preloader Start ***** -->
        <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
            <span></span>
            <span></span>
            <span></span>
            </div>
        </div>
        </div>
        <!-- ***** Preloader End ***** -->
        
        
        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="index.php" class="logo">Selamat Datang</a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="book-table.php">Reservasi</a></li>
                                <li><a href="menu.php">Menu</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tentang</a>
                                
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="about.php">Tentang Kami</a>
                                        <a class="dropdown-item" href="testimonials.php">Testimoni</a>
                                    </div>
                                </li>
                                <li><a href="contact.php">Kontak</a></li> 
                                <li><a data-toggle="modal" data-target="#exampleModal" href="login.php">Login</a></li> 
                            </ul>        
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="modal-content animate" method="post" action="cek.php">
                    <div class="mr-5 ml-5 mb-3 mt-2">
                    <img style=" display: block; margin-left: 20px; margin-right: auto;" src="assets/images/admin.png" alt="Avatar" class="avatar">
                    <label for="uname"><b>Username</b></label>
                    <input class="form-control"  type="text" placeholder="Enter Username" name="uname" required>
                    <br>
                    <label for="psw"><b>Password</b></label>
                    <input  class="form-control" type="password" placeholder="Enter Password" name="psw" required>
                    <br>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button name="login" type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- ***** Header Area End ***** -->

        @yield('container')

        <!-- ***** Footer Start ***** -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            Copyright © 2021 Gubug Sambel Rawit
                            - <a href="https://www.phpjabbers.com/">gubugsambelrawit.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </body>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</html>
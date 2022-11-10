<?php
session_start();
require 'connect.php';
ob_start();
$id = $_SESSION['id'];

if (isset($_POST['submit'])) {
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if ($pass1 == $pass2) {
        $update = mysqli_query($conn, "UPDATE pelanggan SET password = '$pass1' WHERE id_pelanggan = '$id';");

        header("Location: UserRiwayat.php");
        ob_end_flush();
    } else {
        header("Location:UserUbah.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SeBengkel</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <link href="styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles2.css">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" id="mainNav">
        <div class="container px-5">

            <a class="navbar-brand fw-bold" href="#page-top">SeBengkel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <!-- <button class="btn btn-secondary" onclick="window.open('https://google.com');">About</button> -->

                    <!-- <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Download</a></button>
                              <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item active" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                              </ul>
                        </div> -->

                </ul>

                <a class="btn btn-modal modal-account rounded-pill px-3 mb-2 mb-lg-0" href="logout.php">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        <span class="small">Logout</span>
                    </span>
                </a>

                <a class="btn btn-modal rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        <span class="small">Send Feedback</span>
                    </span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->


    <header id="home" class="">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 pelanggan">

                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <!-- Home -->
                            <li class="nav-item">
                                <a href="UserRiwayat.php" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house" style="color:rgb(156, 26, 226)"></i> <span class="menu-section ms-1 d-none d-sm-inline">Home</span>
                                </a>
                            </li>
                            <!-- Sparepart -->
                            <li>
                                <a href="UserInfo.php" class=" nav-link px-0 align-middle">
                                    <i class="fs-4 bi-speedometer2" style="color:rgb(156, 26, 226)"></i> <span class=" menu-section ms-1 d-none d-sm-inline">Sparepart</span> </a>
                            </li>
                            <!-- Order -->
                            <li>
                                <a href="UserBeli.php" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table" style="color:rgb(156, 26, 226)"></i> <span class="menu-section ms-1 d-none d-sm-inline">Orders</span></a>
                            </li>
                            <!-- Booking -->
                            <li>
                                <a href="UserBooking.php" class="nav-link px-0 align-middle ">
                                    <i class="fs-4 bi-bootstrap" style="color:rgb(156, 26, 226)"></i> <span class=" menu-section ms-1 d-none d-sm-inline">Booking</span></a>
                            </li>
                            <li>
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-grid" style="color:rgb(156, 26, 226);"></i> <span class="menu-section ms-1 d-none d-sm-inline">Akun</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="UserProfil.php" class="nav-link px-0"> <span class="menu-section d-none d-sm-inline">User Profil</span></a>
                                    </li>
                                    <li>
                                        <a href="UserUbah.php" class="nav-link px-0"> <span class="menu-section d-none d-sm-inline">Ganti Password</span> </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="row gx-5 align-items-center">
                        <div class="password">
                            <form action="" method="POST">
                                <h2>Ubah Password</h2>
                                <p>Masukkan Password Baru</p>
                                <input type="text" class="teks" name="pass1">
                                <p>Konfirmasi Password Baru</p>
                                <input type="text" class="teks" name="pass2">
                                <center><button class="bookBtn" name="submit" type="submit">Ubah Password</button></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </header>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; SeBengkel 2022. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="scriptLogin.js"></script>

</body>

</html>
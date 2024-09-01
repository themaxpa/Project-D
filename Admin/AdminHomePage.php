<?php
include '../connection/dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<style>
    .Container {
        background-image: url(../assets/img/wp12661363-bike-racing-4k-wallpapers.jpg);
        display: grid;
        background-position: center;
        background-size: cover;
        width: auto;
        height: 100dvh;
        background-attachment: scroll;
        padding: 145px;
    }

    .trackD-th {
        font-size: 20px;
        text-transform: uppercase;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Initial D</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="./assets//css/style.css" type="text/css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown">
                            <h1 class="h1-txt" style="color:#20232b">Admin</h1>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="./Profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="../Logout.php">Log Out</a></li>
                        </ul>
                    </div>
                    <a href="./AdminHomePage.php" class="logo me-auto me-lg-0"><img src="../assets/img/D LOGO.png" alt="" class="img-fluid"></a>

                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <!-- <li><a class="nav-link scrollto active" href="./ViewUser.php">View User</a></li> -->
                            <!-- <li><a class="nav-link scrollto" href="./about.php">About</a></li>
                            <li><a class="nav-link scrollto" href="#services">Services</a></li>
                            <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                            <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->
                            <li class="dropdown"><a href="#"><span>View</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="./ViewUser.php">User</a></li>
                                    <li class="dropdown"><a href="./ViewOrganizer.php"><span>Organizer</span> <i class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <!-- <li><a href="./ViewTracks.php">Race Tracks</a></li>
                                            <li><a href="#">Deep Drop Down 2</a></li>
                                            <li><a href="#">Deep Drop Down 3</a></li>
                                            <li><a href="#">Deep Drop Down 4</a></li>
                                            <li><a href="#">Deep Drop Down 5</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href="./ViewTracks.php">Race Tracks</a></li>
                                    <!-- <li><a href="#">Drop Down 3</a></li>
                                    <li><a href="#">Drop Down 4</a></li> -->
                                </ul>
                            </li>
                            <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                            <li><i class="bi bi-list mobile-nav-toggle"></i></li>
                        </ul>

                    </nav><!-- .navbar -->
                </div>
            </div>
        </div>
    </header><!-- End Header -->
    <section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('../assets/img/workspace.jpg'); background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title">
                    <h1 class="title-h1" style="margin: 60px 0 10px 0; font-size: 90px; font-weight: 700;line-height: 86px; color:gray;">
                    Administrative workspace
                    </h1>
                </div>
                <h2 style=" font-family:myFont; color:gray">The only way to do great work is to love what you do</h2>
            </div>
            <div class="container">
        </div>
    </section><!-- End Hero -->
    <div class="admin-dash-line"></div>
    <div class="Container">
        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Sales <span>| Today</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart"></i>
                        </div>
                        <div class="ps-3">
                            <h6>145</h6>
                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Revenue <span>| This Month</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                            <h6>$3,264</h6>
                            <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Customers <span>| This Year</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6>1244</h6>
                            <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                        </div>
                    </div>

                </div>
            </div>

        </div><!-- End Customers Card -->

    </div>

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="">
                <div class="row">




                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title"> Initial D <span>| Today</span></h5>


                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                        <td>1234</td>
                                        <td class="fw-bold">44444 </td>
                                        <td>$5,828</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                        <td>$46</td>
                                        <td class="fw-bold">98</td>
                                        <td>$4,508</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                        <td>$59</td>
                                        <td class="fw-bold">74</td>
                                        <td>$4,366</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                                        <td>$32</td>
                                        <td class="fw-bold">63</td>
                                        <td>$2,016</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                                        <td>$79</td>
                                        <td class="fw-bold">41</td>
                                        <td>$3,239</td>
                                    </tr>
                                </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="">

                <!-- Recent Activity -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                        <div class="activity">

                            <div class="activity-item d-flex">
                                <div class="activite-label">32 min</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">
                                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">56 min</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">
                                    Voluptatem blanditiis blanditiis eveniet
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 hrs</div>
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content">
                                    Voluptates corrupti molestias voluptatem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">1 day</div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                <div class="activity-content">
                                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 days</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content">
                                    Est sit eum reiciendis exercitationem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">4 weeks</div>
                                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                <div class="activity-content">
                                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div><!-- End Recent Activity -->

                <!-- Budget Report -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                        <div id="budgetChart" style="min-height: 400px;" class="echart"></div>


                    </div>
                </div><!-- End Budget Report -->

                <!-- Website Traffic -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>


                    </div>
                </div><!-- End Website Traffic -->
                </main><!-- End #main -->
                <!-- ======= Footer ======= -->

                <footer class="footer" style="padding: 70px 10px 0px 10px;">
                    <div class="container">
                        <div class="row">
                            <div class="footer-col">
                                <h4>ABOUT US</h4>
                                <ul>
                                    <li><a href="../HowWeWork.php">how we work</a></li>
                                    <li><a href="../OurResponsibility.php">Our responsibility</a></li>
                                    <li><a href="../PageNotFound.php">Our team & investors</a></li>
                                    <li><a href="../Career.php">Career</a></li>
                                    <li><a href="../News.php">News</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>SERVICES</h4>
                                <ul>
                                    <li><a href="../Sustainability.php">Sustainability</a></li>
                                    <li><a href="#">FAQ/Help</a></li>
                                    <li><a href="../Terms&Conditions.php">Terms & conditions</a></li>
                                    <li><a href="../Privacy&Policy.php">Privacy & policy</a></li>
                                    <li><a href="../Imprint.php">Imprint</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>OUR OFFICES</h4>
                                <ul>
                                    <li><a href="#">Rankestraße 6a, D-80796 Munich</a></li>
                                    <li><a href="#">Merkurring 82, D-22143 Hamburg</a></li>
                                    <li><a href="#">Pascalstraße 6, D-52076 Aachen</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>CONTACT US</h4>
                                <ul>
                                    <li><a href="#">+49-89-2154-7279-0</a></li>
                                    <li><a href="#">+49-1579-239 18 23</a></li>
                                    <li><a href="#">trackdays@circuit-booking.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="social" style="  width: 100%; display: flex; justify-content: end; margin-top:50px">
                            <p style="color:gray; margin-right:250px;">Initial D Booking &copy;2024. All rights reserved. Designed & Developed by <span class="designer">themaxpa</span>
                            </p>
                            <a href="https://x.com/?lang=en-in" style="margin: 0px 20px;"><i class="bi bi-twitter-x"></i></a>
                            <a href="https://www.facebook.com/" style="margin: 0px 20px;"><i class=" bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/themaxpa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" style="margin: 0px 20px;"><i class=" bi bi-instagram"></i></a>
                            <a href="https://in.linkedin.com/" style="margin: 0px 20px;"><i class=" bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </footer>

                <!-- End Footer -->
                <div id="preloader"> </div>
                <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background-color:#ee244b;"><i class="bi bi-arrow-up-short"></i></a>


                <!-- Vendor JS Files -->
                <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
                <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
                <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
                <script src="../assets/vendor/php-email-form/validate.js"></script>

                <!-- Template Main JS File -->
                <script src="../assets/js/main.js"></script>
                <script src="../assets/js/script.js"></script>

</body>

</html>
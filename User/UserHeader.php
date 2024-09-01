<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Initial D</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Font Awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/login.css4 " rel="stylesheet">
<style>
  .header-app {
      position: relative;
      margin-top: 70px;
      background-color: #ee244e;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 10vh;
    }
    
    .social {
      width: 100%;
      display: flex;
      justify-content: end;
      margin-top: 50px
    }

    .carousel-bx3 {
      border-radius: 10px;
      height: 55px;
      width: 235px;
      padding-left: 20px;
      padding-top: 15px;
      font-size: 15px
    }

    .carousel-bx31 {
      padding-top: 15px;
      font-size: 14px
    }

    .carousel-bx3 {
      transform: skew(-20deg);
      background-color: transparent;
      border: 1px #fff solid;
      color: #fff;
      text-decoration: none;
      display: inline-block;
      font-size: 13px;
      font-weight: 900;
      height: 45px;
      width: 185px;
      text-transform: uppercase;
      padding: 13px 5px;
      border-radius: 10;
      margin-left: 26px;
    }

    .carousel-bx31 {
      transform: skew(-20deg);
      background-color: transparent;
      border: 1px #fff solid;
      color: #fff;
      text-decoration: none;
      display: inline-block;
      font-size: 12px;
      font-weight: 900;
      height: 45px;
      width: 185px;
      text-transform: uppercase;
      padding: 13px 5px;
      border-radius: 10px;
      margin-left: 26px;
    }
</style>
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
        <a href="./UserHomePage.php" class="logo me-auto me-lg-0"><img src="../assets/img/D LOGO.png" alt="" class="img-fluid"></a>

        <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><h1  class="h1-txt">User</h1></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="./UserProfile.php">Profile</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="../Logout.php">Log Out</a></li>
              </ul>
            </div>
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a class="nav-link scrollto active" href="../TrackDay.php">Track Days</a></li>
              <li><a class="nav-link scrollto" href="../Organizer.php">Organizer</a></li>
              <li><a class="nav-link scrollto" href="../RacingTeam.php">Racing Team</a></li>
              <li><a class="nav-link scrollto " href="../CorporateEvent.php">Corporate Event</a></li>
              <li class="dropdown"><a href="#"><span>circuit</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li class="nav-item d-block d-lg-none">
                  <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                  </a>
                </li><!-- End Search -->
              </ul>
          </nav><!-- .navbar -->
        </div>
      </div>
    </div>
  </header><!-- End Header -->

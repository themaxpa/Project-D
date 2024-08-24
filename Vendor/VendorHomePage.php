<?php
session_start();
include '../connection/dbconnection.php';
@$uid = $_SESSION['login_id'];
echo $uid;
$qry="SELECT * FROM user_login WHERE login_id='$uid'";
$result=mysqli_query($con,$qry);
$data=mysqli_fetch_assoc($result);
@$vendor_id=$data['vendor_id'];

?>

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
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">


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
  <link href="../assets/css/style.css" type="text/css" rel="stylesheet">
  <style>
/*--------------------------------------------------------------
 card-D
--------------------------------------------------------------*/

.preview-img-top img {
  width: 100%;
  height: 280px;
}.preview-card {
  margin: 130px 0px 60px 50px;
    width: 90%;
    height: 80%;
    border-radius: 20px;
    background-color: #20232b;
}.preview-card-body {
  padding-left: 15px;
    margin-top: 5px;
    width: 100%;
    color: #fff;

}.preview-caption-text {
  display: flex;
  justify-content: flex-start;
  color: #fff;
}.preview-price a button {
  transform: skew(-20deg);
  width: 119px;
  height: 36px;
  border-radius: 10px;
  font-weight: 200;
  font-size: 15px;
  margin: 10px 0px 0px 60px;
  background-color: #ee244b;
  color: #fff;
  transition: 0.3s;
}.preview-price a button:hover {
  background-color: #20232b;
  color: #ee244b;
  padding-left: 2px;
}.preview-price {
 margin: 1px -396px 0px 345px;
  padding: 37px 49px -1px 0px;
}.TheTrackDetails{
  display: flex; 
  height:150dvh;
}.addTrack{
width:50%;
padding-left: 100px;
height: 100dvh;
border-radius: 10px;
background-color:#20232b;
}.addTrack h2{
margin-top: 55px;
 }.PreviewTrack{
  width:50%;
  height: 100dvh;
  border-radius: 10px;
  background-color: #ee244e;
 }
    </style>
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
        <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><h1  class="h1-txt">Organizer</h1></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="../Logout.php">Log Out</a></li>
              </ul>
            </div>
          <a href="./VendorHomePage.php" class="logo me-auto me-lg-0"><img src="../assets/img/D LOGO.png" alt="" class="img-fluid"></a>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
              <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
              <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
              
              <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
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
              <li><i class="bi bi-list mobile-nav-toggle"></i></li>
            </ul>
            

          </nav><!-- .navbar -->
          <!-- 
          <a href="./ViewUser.php" class="get-started-btn scrollto">view User</a> -->
        </div>
      </div>
    </div>
  </header><!-- End Header -->
  <section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('../assets/img/workspace.jpg'); background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title">
                    <h1 class="title-h1" style="margin: 60px 0 10px 0; font-size: 90px; font-weight: 700;line-height: 86px; color:gray;">
                    Organizer workspace
                    </h1>
                </div>
                <h2 style=" font-family:myFont; color:gray">The only way to do great work is to love what you do</h2>
            </div>
            <div class="container">
        </div>
    </section><!-- End Hero -->
  <!-- === filler ===-->
  <section>
    <div class="filler" style="height:50dvh;">
      <div class="index-sec-title">
        <h1 class="f-title">We aim to create new standards in the track day market</h1>
        <h4 class="f-sub-title">And keep them evolving</h4>

      </div>
  </section><!-- End filler -->

  <section class="add-container" style="height:150dvh; border:1px solid #fff">

    <div class="TheTrackDetails">

      <div class="addTrack" style="height:100dvh; border:1px solid #fff">
        <h2 class="h1-txt">ADD RACE TRACK</h2>
        <form action="#" method='POST' enctype="multipart/form-data">

          <div class="reg-input">
            <label class="reg" for="image">Image</label><br>
            <input type="file" name="image" class="form-control-img" required style="width:80%;">
          </div>

          <div class="reg-input">
            <label class="reg" for="Track name">Track Name</label>
            <input type="text" name="track_name" class="form-control" required style="width:80%;">
          </div>

          <div class="reg-input">
            <label class="reg" for="event">Event Name</label>
            <input type="text" name="event" class="form-control" required style="width:80%;">
          </div>

          <div class="reg-input">
            <label class="reg" for="date">Date</label>
            <input type="date" name="date" class="form-control" placeholder="                                                                                                                        example@gmail.com" required style="width:80%;">
          </div>


          <div class="reg-input">
            <label class="reg" for="Vehicle Type">Vehicle Type</label>
            <input type="text" name="vehicle_type" class="form-control" required style="width:80%;">
          </div>

          <div class="reg-input" for="category">
            <label class="reg">Category</label>
            <input type="text" name="category" class="form-control" required style="width:80%;">
          </div>

          <div class="reg-input" for="Organizer">
            <label class="reg">Organizer Name</label>
            <input type="text" name="organizer" class="form-control" required style="width:80%;">
          </div>

          <div class="reg-input" for="Noise Level">
            <label class="reg">Noise Level</label>
            <input type="text" name="noise_level" class="form-control" required style="width:80%;">
          </div>

          <div class="reg-input" for="price">
            <label class="reg">Price</label>
            <input type="price" name="price" class="form-control" required style="width:80%;">
          </div>

          <input type="submit" name="submit" class="reg-btn" value="Upload Track">
          <?php echo $vendor_id.'########################' ;?>
        </form>
      </div>


      <?php
  if (isset($_REQUEST['submit'])) {


    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "images/" . $filename;
    move_uploaded_file($tempname, $folder);

    $trackName = $_POST['track_name'];
    $event = $_POST['event'];
    $date = $_POST['date'];
    $vehicleType = $_POST['vehicle_type'];
    $category = $_POST['category'];
    $organizer = $_POST['organizer'];
    $noise_level = $_POST['noise_level'];
    $price = $_POST['price'];


    $query = "INSERT INTO `tracks`(`vendor_id`,`image`,`track_name`,`event`,`date`,`vehicle_type`,`category`,`organizer`,`noise_level`,`price`)
                         VALUES('$vendor_id','$filename','$trackName','$event','$date','$vehicleType','$category','$organizer','$noise_level','$price')";
  
    $data = mysqli_query($con, $query);

    if ($data) {
      echo "<script>alert('Done!');</script>";
    } else {
      echo "<script>alert('Failed!');</script>";
    }
  }
  ?>
 <?php
          $qry = "SELECT `vendor_id`,`image`,`track_name`,`event`,`date`,`vehicle_type`,`category`,`organizer`,`noise_level`,`price` FROM `tracks`";
          // echo $qry;
          $data = mysqli_query($con, $qry);

          if ($data->num_rows > 0) {
            while ($row = $data->fetch_assoc()) {
              $uid = $row['vendor_id'];
          ?>
      <!-- Track -->
      <div class="PreviewTrack" style="height:150vh;">
      <h2 class="h2-txt" style="margin-left:30px "> Track Preview </h2>
      <div class="preview-card">
            <div class="preview-img-top">

            <!--== Track===-->
            <div class="card-D" style=" width: 370px; height: 530px;";>
                <div class="id-card--top-image-container">
                  <img style="border-radius:15px 15px 0px 0px; width: 370px; height: 200px;" loading="lazy" class="card-img-top" src="Vendor\images\<?php echo $row['image']; ?>" alt="Preview Image" />
                </div>
                <div class="id-card-body">
                  <div class="id-body-header">

                    <h5 class="portfolio-title header--title text-white">
                      <?php echo  $row["track_name"]; ?>
                    </h5>
                    <p>
                      <?php echo  $row["event"]; ?>
                    </p>
                  </div>
                  <div class="body">
                    <div class="row mt-4">
                      <div class="flex-columns">
                        <div class="col-12 flex-column p-0 pr-2">
                          <div class="value start-date">
                            <i class="bi bi-calendar2"></i>
                            <?php echo  $row["date"];  ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="flex__columns">
                        <div class="col-12 flex-column p-0 pr-2">
                          <div class="value">
                            <i class="fa-solid fa-car"></i>
                            <?php echo  $row["vehicle_type"];  ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="flex__columns">
                        <div class="col-12 flex-column p-0 pr-2">
                          <div class="value">
                            <i class="bi bi-flag-fill"></i>
                            <?php echo  $row["category"];  ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="flex__columns">
                        <div class="col-12 flex-column p-0 pr-2">
                          <div class="value">
                            <i class="bi bi-building-fill"></i>
                            <a rel="alternate" href="" hreflang="en">
                              <?php echo  $row["organizer"];  ?>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-4">
                      <div class="flex__columns">

                        <div class="col-6 flex-column p-0 pl-2">
                          <div class="caption-text">

                          </div>
                          <div class="value"><?php echo  $row["noise_level"];  ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-4">
                      <div class="flex__columns">
                        <div class="col-6 flex-column p-0 pr-2" style="margin:0px 0px 0px 65px;">

                          <div class="price">
                            <a rel="alternate" class="track-price" href=" " hreflang="en">
                              <button style="  width: 150px;height: 45px; font-weight: 900;font-size: 22px;     margin: -5px 0px 0px 120px;">
                                <?php echo  $row["price"];  ?>
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            }
          } ?>
          <!--End item -->

        </div>
      </div>
    </section><!--End Track Section --->
      </div>
    </div>
  </section>



  <!-- === filler ===-->
  <section>
    <div class="filler" style="border:1px solid #fff">
      <div class="index-sec-title">
        <h1 class="f-title">We aim to create new standards in the track day market</h1>
        <h4 class="f-sub-title">And keep them evolving</h4>
   





      </div>
  </section><!-- End filler -->










  <!-- ======= Footer ======= -->

  <footer class="footer" style="padding: 70px 10px 0px 10px;">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>ABOUT US</h4>
          <ul>
            <li><a href="#">how we work</a></li>
            <li><a href="#">Our responsibility</a></li>
            <li><a href="#">Our team & investors</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">News</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>SERVICES</h4>
          <ul>
            <li><a href="#">Sustainability</a></li>
            <li><a href="#">FAQ/Help</a></li>
            <li><a href="#">Terms & conditions</a></li>
            <li><a href="#">Privacy & policy</a></li>
            <li><a href="#">Imprint</a></li>
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
        <p style="color:gray; margin-right:250px">Initial D Booking &copy;2024. All rights reserved. Designed & Developed by <span class="designer">themaxpa</span>
        </p>
        <a href="https://x.com/?lang=en-in" style="margin: 0px 20px;"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.facebook.com/" style="margin: 0px 20px;"><i class=" bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/?hl=en" style="margin: 0px 20px;"><i class=" bi bi-instagram"></i></a>
        <a href="https://in.linkedin.com/" style="margin: 0px 20px;"><i class=" bi bi-linkedin"></i></a>
      </div>



    </div>
  </footer>

  <!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
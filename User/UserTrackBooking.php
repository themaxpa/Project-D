<?php
session_start();
include '../connection/dbconnection.php';
include './UserHeader.php';
@$uid = $_SESSION['login_id'];
$id = $_GET['id'];
// echo $id;

$qry = "SELECT `track_id`,`vendor_id`,`image`,`track_name`,`event`,`date`,`vehicle_type`,`category`,`organizer`,`noise_level`,`price` FROM `tracks`where `track_id`='$id'";
echo $qry;
$data = mysqli_query($con, $qry);

if ($data->num_rows > 0) {
  while ($row = $data->fetch_assoc()) {
    $uid = $row['vendor_id'];

?>
<style>
  .div-flex {
    display: flex;
  }

  @media screen and (max-width: 2560px) {
    .header-app {
      background-color: #ee244e;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 10vh;
    }

    .carousel-bx31 {
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
      padding: 13px 0px;
      border-radius: 10px;
      margin-left: 26px;
    }
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

  .track-details-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
  }
</style>
<!-- <div class="header-filler" style="background-color: #20232b;"></div> -->
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center" style="background-image:url('../Vendor/images/<?php echo $row["image"]; ?>'); background-size: cover;">
  <div class="header-app" style="margin-top: 70px; position:relative">
    <div class="app-title">
      <p class="p-txt" style="margin-top: 15px;">World's Best Track day app - Start your booking right!</p>
    </div>
    <div class="carousel-bx3">
      <a href="https://www.apple.com/in/app-store/"><i class="bi bi-apple"></i> Download app store</a>
    </div>
    <div class="carousel-bx31">
      <a href="https://play.google.com/store/apps?hl=en_IN"><i class="bi bi-google-play"></i> Download Google Play</a>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="title">
        <h1 class="title-h1" style=" margin: 60px 0 10px 0; font-size: 70px; font-weight: 700;line-height: 86px; color: #fff;">
          <?php echo  $row["track_name"]; ?>
        </h1>
        <h2 class="h1-txt"><?php echo  $row["event"]; ?></h2>
      </div>
      <div class="track-details-container">
        <p class="p-txt" style=" font-size:15px"><i class="bi bi-calendar2"></i> <?php echo  $row["date"];  ?></p>
        <p class="p-txt" style=" font-size:15px"> <i class="fa-solid fa-car"></i> <?php echo  $row["vehicle_type"];  ?></p>
        <p class="p-txt" style=" font-size:15px"><i class="bi bi-flag-fill"></i> <?php echo  $row["category"];  ?></p>
      </div>
      <p class="p-txt" style=" font-size:15px"><i class="bi bi-building-fill"></i> <?php echo  $row["organizer"];  ?></p>
    </div>
<?php
}
}
?>
  </div>
</section><!-- End Hero -->
<div class="imprint-content2">
  <h1 class="h1-txt">Complete your trackday booking in a few clicks</h1>
  <p class="p-txt">EA initial D Booking GmbH assumes no responsibility for the completeness and/or accuracy of the published offers/information or for<br>any disadvantage or damage of any kind arising from use or non-use of same. Likewise, no responsibility is assumed for defects to<br>software or hardware or any losses ensuing from Internet programs used as part of the online content or data offered for download.</p>
  <h4 class="h1-txt">Disclaimer</h4>
  <p class="p-txt">EThe users shall indemnify HTA Circuit Booking GmbH against all damage claims arising from personal damage, claims and<br>encumbrances of all kind that ensue or which could ensue from using these websites.</p>
</div>
<div class="container" style="background-color: #20232b; width:auto; height:150vh;border:#fff solid 1px">

</div>

<?php
include './UserFooter.php';
?>
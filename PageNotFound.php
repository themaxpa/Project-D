<?php
include './connection/dbconnection.php';
include './header.php';
?>

<!-- Main Css  -->
<link href="./assets/css/pnf.css" rel="stylesheet">


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('./assets/img/pnf.jpg');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="pnf-title">
                <h1 style=" margin: 0 0 10px 0; font-size: 70px; font-weight: 700; line-height: 86px; color: #fff;">
                    PAGE NOT FOUND (404)
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<section>
    <div class="pnf-box">
        <div class="pnf-error-box">
            <h3>404, page not found</h3>
            <p>Uh oh, we can't seem to find the page you're looking for. Try going back to the previous page or see our Help Center for more infromation.</p>
            <div class="pnf-home-btn" style="    border-radius: 10px;
        border-radius: 10px;
    background: transparent;
    transform: skew(-20deg);
    border: #fff 1px solid;
    color: #fff;
    height: 46px;
    height: 50px;
    margin: 0px 0px 0px 300px;
    padding: 14px 0px 0px 13px;
    font-size: 15px;
    ">
              <a href="./index.php"><b>Back to Home</b></a>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="pnf-bottom">
<marquee> <h5>The page you are looking for does not exist or another error occurred.</h5></marquee>
    </div>
</section>









<?php
include './footer.php';
?>
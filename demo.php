<?php
include './connection/dbconnection.php';
include './header.php';
?>
<div class="header-filler"></div>
<section class="quotes-carousel-container">
    <ul class="quotes-carousel" id="quotes-carousel">
        <li class="quote-previous">
            <div class="quote-img" style="background-image: url(./assets/img/bg.jpg); width:100px;height:100px;background-size:cover"></div>
            <div class="quote-text">
            <p class="p-txt">Our booking software calculates the amount that would have to be raised to compensate the carbon footprint via so-called offset projects, such as reforestation plants, wind farms or photovoltaic parks.</p>

            </div>
        </li>
        <li class="quote-current">
            <div class="quote-img" style="background-image: url(./assets/img/bg.jpg); width:100px;height:100px;background-size:cover"></div>
            <div class="quote-text">
            <p class="p-txt">Our booking software calculates the amount that would have to be raised to compensate the carbon footprint via so-called offset projects, such as reforestation plants, wind farms or photovoltaic parks.</p>

            </div>
        </li>
        <li class="quote-next">
            <div class="quote-img" style="background-image: url(./assets/img/bg.jpg); width:100px;height:100px;background-size:cover"></div>
            <div class="quote-text">
            <p class="p-txt">Our booking software calculates the amount that would have to be raised to compensate the carbon footprint via so-called offset projects, such as reforestation plants, wind farms or photovoltaic parks.</p>

            </div>
        </li>
    </ul>
</section>
<section class="quotes-carousel-pipes" id="quotes-carousel-pipes">
<ul>
    <li class="pip"></li>
    <li class="pip-previous"></li>
    <li class="pip-current"></li>
    <li class="pip-next"></li>
</ul>
</section>













<?php
include './footer.php';
?>
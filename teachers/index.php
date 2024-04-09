<?php
include_once "../config/variables.php";
include_once "../config/session_security.php";

//************  Login check  ************//
if(!isset($_SESSION['user10MW'])){
    header("Location: ".SITE_PATH."pages/login.php");
}elseif($_SESSION['user10MW']['role'] === "ROLE_USER"){
    header("Location: ".SITE_PATH);

}
/////////////
include_once "../config/connectionDB.php";
// include "../config/functions.php";

$title = "Glossaires";
include_once "../inc/header.php";
include_once "../inc/nav.php";

////////////////////////////////////

// Function for all type of categories 

?>

<h1>Teachers</h1>
<!-- Swiper -->
<div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="assets/imgs/jason-briscoe-GrdJp16CPk8-unsplash.jpg" alt="a woman cooking in the kitchen.">
                <div class="content">
                    <div class="container">
                        <h3>Mastering the Art of Homemade Pasta</h3>
                        <p>Discover the joy of crafting your own fresh pasta from scratch. Learn essential techniques, from kneading the dough to shaping delicate ravioli.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>

        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
    </div>

    <!-- Swiper JS -->
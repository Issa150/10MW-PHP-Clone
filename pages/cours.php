<?php 
include_once "../config/variables.php";
include_once "../config/session_security.php";

//************  Login check  ************//
if(!isset($_SESSION['user10MW'])){
    header("Location: ".SITE_PATH."pages/login.php");
}


//////////////




//////////////
$titleCss = "cours";
include_once "../inc/header.php"; 
include_once "../inc/nav.php";
?>
<?php  ?>
<!-- ---------------- -->
<!-- ---------------- -->


<main class="page coursPage">
    <?php include_once "../inc/aside.php" ?>

    <div class="main_wrapp">

        <section class="main_board">
            <div class='hero_of_main'>
            <img src="<?= SITE_PATH ?>assets/imgs/placeholder-banner_course.jpeg" alt="Image of a course banner">
                <div class="wrap">
                    <h1>Développeur Web & Web Mobile</h1>
                </div>
                <div class="wrap">
                    <i class="fa-solid fa-gear"></i>
                </div>
            </div>

            <?php include_once "partials/tools.php" ?>
        </section>
        
        <!-- =============================== -->
        <?php include_once "../inc/footer_page.php"; ?>
    </div>

    <!-- --------Scripts-------- -->
    <?php  include_once "../inc/footer.php" ?>
</main>




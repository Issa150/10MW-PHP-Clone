<?php
include_once "config/variables.php";
include_once "config/session_security.php";

include_once "config/connectionDB.php";
include "config/functions.php";

// ************  Login check  ************//
if (!isset($_SESSION['user10MW'])) {
    header("Location: " . SITE_PATH . "pages/login.php");
}
// include Tabs using URL params




$currUser = getUserInfo($_SESSION['user10MW']['id']);


/////////////
$titleCss = "index";
include_once "inc/header.php";
include_once "inc/nav.php";

?>
<!-- ---------------- -->


<main class="page Dashboard">

    <div class="left_menu home active">
        <div class=wrap_content>
            <a href="<?= SITE_PATH ?>" class="red">
                <i class="fa-solid fa-gauge-high fa_icone"></i>
                Tableau de bord
            </a>
            <a target="_blank" href="https://docs.google.com/document/d/16Fq14rkGvlQRplJySQGDT5lACBpYk8hSI5WcxcUmTPo/edit"><i class="fa-solid fa-file"></i> Documentation de ce site</a>
        </div>
    </div>






    <div class="main_wrapp active">

        <section class="main_board">
            <?php
            // if (empty($_GET['subject'])) {
            //     include_once "page/cours.php";
            // }
            // if (isset($_GET['subject'])) {
            //     include_once  "page/cours-single.php";
            // }
            ?>


            <!-- <div class="hero_of_main">
        <div class="wrap">
            <h1>10MW: Tableau de bord</h1>
            <h1>Développeur Web/ Web Mobile</h1>
        </div>

        <div class="wrap">
            <button>Modifier cette page</button>
        </div>
    </div> -->
            <!-- {/* ////////////////////////////: */} -->
            <?php
                if($_SESSION['user10MW']['role'] == 'ROLE_USER'){
                    include_once "page/cours.php";
                }elseif($_SESSION['user10MW']['role'] == 'ROLE_TEACHER'){
                    include_once "teachers/dashboard.teacher.php";
                }elseif($_SESSION['user10MW']['role'] == 'ROLE_ADMIN'){
                    include_once "admins/dashboard.admin.php";
                }
            ?>
            <!-- {/* ////////////////////////////// */ -->



        </section>

        <!-- ------------------------------------------- -->
        <?php include_once "inc/footer_page.php"; ?>
    </div>
</main>

<!-- ------------------------------------------- -->
<?php include_once "inc/footer.php" ?>
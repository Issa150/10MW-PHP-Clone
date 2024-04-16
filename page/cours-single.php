<?php
include_once "../config/variables.php";
include_once "../config/session_security.php";

include_once "../config/connectionDB.php";
include_once "../config/functions.php";

// ************  Login check  ************//
if (!isset($_SESSION['user10MW'])) {
    header("Location: " . SITE_PATH . "pages/login.php");
}
// include Tabs using URL params




$currUser = getUserInfo($_SESSION['user10MW']['id']);

//////////:

if (!empty($_GET['subject']) && isset($_GET['subject'])) {

    $_SESSION['currentSubject'] = $_GET['subject'];
} else {
    // Redirect to choose something
    header('Location:' . SITE_PATH);
}

$subject = $_SESSION['currentSubject'];
/////////////
$titleCss = "cours-single";
include_once "../inc/header.php";
include_once "../inc/nav.php";

// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';

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

            <div class='my_courses'>
                <h2>Les leçons</h2>
                <a class="aside-item-course-title" href="#">Chapitre 1</a>
            </div>
        </div>
    </div>

    <div class="main_wrapp active">

        <section class="main_board">

            <!-- 
تصاویر مخصوص شکلک گذاری
$$$$$_____$$$$$___________$$$$$__________
_________$$$$$$$_________$$$$$$$_________
_________$$$$$$$_________$$$$$$$_________
__________$$$$$___________$$$$$__________
__$$$$_____________________________$$$$__
_$$$$$$___________________________$$$$$$_
__$$$$$$_________________________$$$$$$__
___$$$$$$_______________________$$$$$$___
____$$$$$$$___________________$$$$$$$____
______$$$$$$$_______________$$$$$$$______
_________$$$$$$___________$$$$$$_________
____________$$$$$$ $$$$$$$$$$$____________
______________$$$$$$$$$$$$_______________
 -->


            <div class='hero_of_main cours-single'>
                <img src="<?= SITE_PATH ?>assets/imgs/compressed-1photo-1497864149936-d3163f0c0f4b-min.jpeg" alt="">

                <div class="wrap">
                    <h1><?= strtoupper($subject) ?></h1>
                </div>

                <div class="wrap">
                    <button>Réinitialiser la page</button>
                </div>


            </div>
            <!-- {/* ////////////////////////////: */} -->

            <div class="main_content">

                <div class="tab-head-container">
                    <ul>
                        
                        <li><a class="<?= (!isset($_GET['tab']) || $_GET['tab'] == "stream") ? "active" : ""?>" href="cours-single.php?subject=<?= $subject ?>&tab=stream">Flux</a></li>
                        <li><a class="<?= (isset($_GET['tab']) && $_GET['tab'] == "homework") ? "active" : ""?>" href="cours-single.php?subject=<?= $subject ?>&tab=homework">À faire</a></li>
                        <li><a class="<?= (isset($_GET['tab']) && $_GET['tab'] == "collegues") ? "active" : ""?>" href="cours-single.php?subject=<?= $subject ?>&tab=collegues">Collègues</a></li>
                        <li><a class="<?= (isset($_GET['tab']) && $_GET['tab'] == "resources") ? "active" : ""?>" href="cours-single.php?subject=<?= $subject ?>&tab=resources">Resources</a></li>
                        <li><a class="<?= (isset($_GET['tab']) && $_GET['tab'] == "notes") ? "active" : ""?>" href="cours-single.php?subject=<?= $subject ?>&tab=notes">Notes</a></li>
                    </ul>
                </div>

                <!-- -------- -->

                <div class="tab-body-container">
                    <?php

                    if (!isset($_GET['tab']) || $_GET['tab'] == "stream") {
                        include_once "partials/stream.php";
                    } elseif ($_GET['tab'] == "homework") {
                        include_once "partials/homework.php";
                    } elseif ($_GET['tab'] == "collegues") {
                        include_once "partials/collegues.php";
                    } elseif ($_GET['tab'] == "resources") {
                        include_once "partials/resources.php";
                    } elseif ($_GET['tab'] == "notes") {
                        include_once "partials/notes.php";
                    }


                    ?>
                </div>

            </div>


            <!-- 

___________$$$$$$$$______$$$$$$$$$
__________$$$$$$$$$$$$__$$$$$$$__$$$$
_________$$$$$$$$$$$$$♥ ♥$$$$$$$$__$$$
_________$$$$$$$$$$$$$$$$$$$$$$$$__$$$
_________$$$$$$$$$$$$$$$$$$$$$$$$__$$$
__________$$$$$$$$$$$$$$$$$$$$$$__$$$
____________$$$$$$$$$$$$$$$$$$$$$$$
_______________$$$$$$$$$$$$$$$$$
_________________$$$$$$$$$$$$$
____________________$$♥ ♥$$
______________________$$$
_______________________$
 -->
        </section>

        <!-- ------------------------------------------- -->
        <?php include_once "../inc/footer_page.php"; ?>
    </div>
</main>

<!-- ------------------------------------------- -->
<?php include_once "../inc/footer.php" ?>
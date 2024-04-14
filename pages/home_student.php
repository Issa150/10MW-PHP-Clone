<?php
include_once "../config/variables.php";
include_once "../config/session_security.php";

//************  Login check  ************//
if (!isset($_SESSION['user10MW'])) {
    header("Location: " . SITE_PATH . "pages/login.php");
}
/////////////
include_once "../config/connectionDB.php";
include "../config/functions.php";

$titleCss = "home_student";
include_once "../inc/header.php";
include_once "../inc/nav.php";



////////////////////////////////////

//************  All functions are here  ************//

$currUser = getUserInfo($_SESSION['user10MW']['id']);

?>


<main class="page home_teacher_stundet">

    <?php
    if (!$titleCss = 'home_teacher' || !$titleCss = 'home_teacher' || !$titleCss = 'home_teacher') {
        include_once "../inc/aside.php";
    }
    ?>

    <div class="main_wrapp">
        <section class="main_board">

            <div class='hero_of_main'>
                <img src="<?= SITE_PATH ?>assets/imgs/abstract_1.jpg" alt="">

                <div class="wrap">
                    <img class='profile' src="<?= (isset($currUser['image_profile']))
                                                    ? (SITE_PATH . "assets/uploads/user/" . $currUser['image_profile'])
                                                    : SITE_PATH . "assets/imgs/imgPlaceholder01.png";
                                                ?>" alt="" />

                    <h1>Développeur web & web mobile</h1>
                </div>

                <div class="wrap">
                    <button>Réinitialiser la page</button>
                </div>


            </div>

            <div class="body_of_main">
                <!-- <div class="content-row-container">
                    <div class="wrap">
                        <h2>Les evenements plus recents</h2>
                        <a>Voire tous</a>
                    </div>
                    <div class="row">
                        <article class="event-card">
                            <div class="meta-data">
                                <p class="days-left">15</p>
                                <p>jours  restants</p>
                            </div>
                            <h3>Évavluation Front</h3>
                            <div class="meta-data">
                                <p>15-04-2024</p>
                                <div class="meta-info-author">
                                    <img src="<?=SITE_PATH?>assets/imgs/boy2.jpg" alt="">
                                    <p>Gabrielle BRENNER</p>
                                </div>
                            </div>
                        </article>
                    </div>

                </div> -->

                <div class="content-row-container">
                    <div class="wrap">
                        <h2>Mes cours</h2>
                        <a>Voire tous</a>

                    </div>
                    <div class="row">
                        <article class="course-card">
                            <img src="<?=SITE_PATH?>assets/imgs/student-1.jpg" alt="">
                            <div class="meta-data">
                                <h3>Mathemathique 2</h3>
                            </div>
                        </article>
                    </div>

                </div>

                <!-- <div class="content-row-container">
                    <div class="wrap">
                        <h2>Mes devoires en cours</h2>
                        <a>Voire tous</a>
                        
                    </div>
                    <div class="row">
                        <article class="homework-card">
                            <div class="meta-data">
                                <p class="days-left">03</p>
                                <p>jours  restants</p>
                            </div>
                            <h3>Évavluation Front</h3>
                            <div class="meta-data">
                                <p>15-04-2024</p>
                                <div class="meta-info-author">
                                    <img src="<?=SITE_PATH?>assets/imgs/boy2.jpg" alt="">
                                    <p>Gabrielle BRENNER</p>
                                </div>
                            </div>
                        </article>
                    </div>

                </div> -->

            </div>


        </section>
    </div>
    <?php include "../inc/footer_page.php"; ?>
    
</main>














<!-- ---------------- -->
<?php include "../inc/footer.php" ?>
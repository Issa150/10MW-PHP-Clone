<?php 
include_once "../config/session_security.php";
include_once "../config/variables.php";

include_once "../config/connection.php";
include_once "../config/functions.php";
// include 'config/db_conn.php';
// $_SESSION["user"];

// $_SESSION["user"] = "Ali";






//////////////////////////////
$title = "Cours";
include_once "../inc/header.php"; 
include_once "../inc/nav.php";
?>
<?php  ?>
<!-- ---------------- -->


<main class="page coursPage">
    <?php include_once "../inc/aside.php" ?>

    <div class="main_wrapp">

        <section class="main_board">
            <div class='hero_of_main'>
                <div class="wrap">
                    <h1>Développeur Web & Web Mobile</h1>
                </div>
                <div class="wrap">
                    <i class="fa-solid fa-gear"></i>
                </div>
            </div>

            <?php include_once "../inc/tools.php" ?>
        </section>
        
        <!-- =============================== -->
        <?php include_once "../inc/footer_page.php"; ?>
    </div>

    <!-- --------Scripts-------- -->
    <?php  include_once "../inc/footer.php" ?>
</main>



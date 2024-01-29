<?php 
include "config/session_security.php";
// include 'config/db_conn.php';
// $_SESSION["user"];



include "inc/header.php"; 
include "inc/nav.php";
?>
<?php  ?>
<!-- ---------------- -->


<main class="page coursePage">
    <?php include "inc/aside.php" ?>

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

            <?php include "inc/tools.php" ?>
        </section>
        <?php include "inc/page_footer.php";?>
    </div>

</main>




<!-- ---------------- -->
<?php include "inc/footer.php" ?>
<?php include "inc/header.php" ?>
<?php include "inc/nav.php" ?>
<!-- ---------------- -->


<main class="page Dashboard">

    <div class="left_menu home active">
        <div class=wrap_content>
            <a href="/dashboard" class="red">
            <i class="fa-solid fa-gauge-high fa_icone"></i>
            Tableau de bord
            </a>
        </div>
    </div>






    <div class="main_wrapp active">
        <section class="main_board">
            <div class="hero_of_main">
                <div class="wrap">
                    <h1>10MW: Tableau de bord</h1>
                </div>
                <div class="wrap">
                    <button>Modifier cette page</button>
                </div>
            </div>
            <!-- {/* ////////////////////////////: */} -->
            <div class="main_content">
                <div class="content_head">
                    <h2>Mes cours</h2>
                    <div>
                        <div class="filters">
                            <button>
                                <i class="fa-solid fa-filter"></i>
                                <span>Tout(sauf cours rtiré de l'affichage)</span>
                                <i class="fa-solid fa-sort-down"></i>
                            </button>
                        </div>
                        <div>
                            <button>Nom</button>
                            <button>Carte</button>
                        </div>
                    </div>
                </div>

                <!-- {/* //////////////////////// */} -->

                <div class="main_contents">
                    <div class="card">
                        <img src="../assets/imgs/pattern_1.jpg" alt="" />

                        <div class="content">
                            <div>
                                <p>Approfondir</p>
                                <i class="fa-solid fa-ellipsis"></i>
                            </div>

                            <!-- {/* <a href="#">Développeur Web/ Web Mobile</a> */} -->
                            <a href="/" class="red">
                            Développeur Web/ Web Mobile
                            </a>

                            <div class="progression">
                                <progress id="progression" value="32" max="100"></progress>
                                <label htmlFor="progression">
                                    <span>32%</span> progres
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- {/* ////////////////////////////////////////////// */ -->

            <div class="badges_privet">
                <h2>Derniers badges</h2>
                <div class="content">
                    <span>Vous n'avez pas de badge à afficher</span>
                </div>
            </div>
        </section>
        <?php include "inc/page_footer.php";?>
    </div>
</main>

<!-- ---------------- -->
<?php include "inc/footer.php" ?>
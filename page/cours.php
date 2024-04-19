<?php
function getField($id_field)
{
    $db = new Database();
    $pdo = $db->connect();
    $sql = "SELECT name FROM studyfields WHERE id = :id";
    $request = $pdo->prepare($sql);
    $request->execute([
        ':id' => $id_field
    ]);
    $res = $request->fetch();
    return $res;
}

// dd($_SESSION);
?>

<!-- ---------------------------------------------------------------------------- -->
<div class='hero_of_main'>
    <img src="<?= SITE_PATH ?>assets/imgs/placeholder-banner_course.jpeg.jpeg" alt="">

    <div class="wrap">
        <img class='profile' src="<?= (isset($currUser['image_profile']))
                                        ? (SITE_PATH . "assets/uploads/user/" . $currUser['image_profile'])
                                        : SITE_PATH . "assets/imgs/placeholders/imgPlaceholder01.png";
                                    ?>" alt="" />

        <div>

            <?php 
                $field = getField($_SESSION['user10MW']['the_student_id']);
                if ($_SESSION['user10MW']['role'] === "student") {
                    echo "<h1>".$_SESSION['user10MW']['first_name'] . " " . $_SESSION['user10MW']['last_name'] . "</h1>";
                    echo "<p>" . $field['name'] . "</p>";
                }else{
                    echo "<h1>".$_SESSION['user10MW']['first_name'] . " " . $_SESSION['user10MW']['last_name'] . "</h1>";
                }
                ?>
        </div>
    </div>

    <div class="wrap">
        <button>Réinitialiser la page</button>
    </div>


</div>


<div class="main_content">

    <!-- Event cards -->
    <div class="event-notif-container">

        <div class="content-row-container">
            <div class="wrap">
                <h2>Les evenements plus recents</h2>
                <a>Voire tous</a>
            </div>
            <div class="row">
                <article class="event-card">
                    <div class="meta-data">
                        <p class="days-left">15</p>
                        <p>jours restants</p>
                    </div>
                    <h3>Évaluation Front</h3>
                    <div class="meta-data">
                        <p>15-04-2024</p>
                        <div class="meta-info-author">
                            <img src="<?= SITE_PATH ?>assets/imgs/boy2.jpg" alt="">
                            <p>Gabrielle BRENNER</p>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </div>

    <!-- Cours cards -->
    <div class="cours-container">

        <div class="section-head">
            <h2>Mes cours</h2>
            <!-- <div>
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
                        </div> -->
        </div>

        <!-- {/* //////////////////////// */} -->

        <div class="section-body">

            <!-- Carte du cours -->
            <div class="card">
                <img src="assets/imgs/html.jpg" alt="" />

                <div class="content">
                    <div>
                        <p>Approfondir</p>
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>

                    <!-- {/* <a href="#">Développeur Web/ Web Mobile</a> */} -->
                    <!-- <a href="<? //= SITE_PATH 
                                    ?>page/cours-single.php?subject=html" class="red"> -->
                    <a href="<?= SITE_PATH ?>pages/cours.php" class="red">
                        HTML5
                    </a>

                    <div class="progression">
                        <progress id="progression" value="100" max="100"></progress>
                        <label htmlFor="progression">
                            <span>Compeleté</span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- ------------- -->
            <!-- Glossaire -->
            <div class="card">
                <img src="assets/imgs/abstract_2.jpg" alt="" />

                <div class="content">
                    <div>
                        <p>Projet progressive</p>
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>

                    <!-- {/* <a href="#">Développeur Web/ Web Mobile</a> */} -->
                    <a href="<?= SITE_PATH ?>pages/glossaires.php" class="red">
                        Glossaire
                    </a>

                    <div class="progression">
                        <!-- <progress id="progression" value="83" max="100"></progress> -->
                        <label htmlFor="progression">

                            <!-- <span>70%</span> progres -->
                        </label>
                    </div>
                </div>
            </div>
            <!-- ------------- -->
            <!-- Create new Cards -->
            <?php
            $datas = getInfoById("classes", "study_field_id", 1);
            foreach ($datas as $data) {
            ?>
                <div class="card">
                    <img src="assets/imgs/abstract_2.jpg" alt="cours image" />

                    <div class="content">
                        <div>
                            <p>Approfondir</p>
                            <i class="fa-solid fa-ellipsis"></i>
                        </div>

                        <!-- {/* <a href="#">Développeur Web/ Web Mobile</a> */} -->
                        <!-- <a href="<? //= SITE_PATH 
                                        ?>page/cours-single.php?subject=html" class="red"> -->
                        <a href="<?= SITE_PATH ?>page/cours-single.php?subject=<?= $data['name'] ?>" class="red">
                            <?= $data['name'] ?>
                        </a>

                        <div class="progression">
                            <!-- <progress id="progression" value="100" max="100"></progress> -->
                            <label htmlFor="progression">
                                <span>Status progression</span>
                            </label>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>

    </div>
</div>
<?php
function getField($students_memeber_id)
{
    
    
    $db = new Database();
    $pdo = $db->connect();
    $sql = "SELECT name FROM studyfields WHERE id = :id";
    $request = $pdo->prepare($sql);
    $request->execute([
        ':id' => $_SESSION['user10MW']['study_field_id']
    ]);
    $res = $request->fetch();
    return $res;
}
$datas = getInfoById("classes", 'study_field_id' , $_SESSION['user10MW']['study_field_id']);
?>

<!-- ---------------------------------------------------------------------------- -->
<div class='hero_of_main'>
    <img src="<?= SITE_PATH ?>assets/imgs/placeholder-banner_course.jpeg" alt="Image of a course banner">

    <div class="wrap">
        <img class='profile' src="<?= (!empty($currUser['image_profile']))
                                        ? (SITE_PATH . "assets/uploads/user/" . $currUser['image_profile'])
                                        : SITE_PATH . "assets/imgs/placeholders/imgPlaceholder01.png";
                                    ?>" alt="" />

        <div>

            <?php
            $field = getField($_SESSION['user10MW']['the_student_id']);
                // dd($field);
            echo "<h1>" . $_SESSION['user10MW']['first_name'] . " " . $_SESSION['user10MW']['last_name'] . "</h1>";
            echo "<p>" . $field['name'] . "</p>";

            ?>
        </div>
    </div>

    <div class="wrap">
        <button>Réinitialiser la page</button>
    </div>


</div>


<div class="main_content">

    <!-- Event cards // Notifications  -->
    <div class="event-notif-container">

        <div class="content-row-container">
            <div class="wrap section-head">
                <h2>Les evenements plus recents</h2>
                <ul>
                    <li>
                        <a><i class="fa-solid fa-ellipsis-vertical"></i></a>
                        <ul>
                            <li><a><i class="fa-solid fa-eye-slash"></i> Cacher le block</a></li>
                            <li><a><i class="fa-solid fa-table-list"></i> Voir tous</a></li>
                        </ul>
                    </li>
                </ul>
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
            <span><?= count($datas)?> + (2 Gerenal)</span>
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
            <!-- ------------- -->

            <!-- General Courses across the fields -->
            <div class="row">

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

            </div>
            
            <!-- ------------- -->
            <!-- Create new Cards -->
            <?php
            // $datas = getInfoById("classes", 'study_field_id' , $_SESSION['user10MW']['study_field_id']);
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
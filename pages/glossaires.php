<?php
/*
    CREATE TABLE vocabularies (
        id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        author VARCHAR(255) NOT NULL,
        concept VARCHAR(100) NOT NULL,
        description TEXT NOT NULL,
        tags VARCHAR(50),
        created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP  
    );
*/

include "config/connection.php";
// include "config/functions.php";
$pageGlossaires = "pageGlossaires";

include "inc/header.php";
// include "config/session_security.php";
session_start();
include "inc/nav.php";

?>
<?php  ?>
<!-- ---------------- -->



<main class="glossaire page">
    <div class="left_menu home active">
        <div class="wrap_btn">
            <a href="/" class="red">
                <i class="fa-solid fa-briefcase fa_icone"></i>
                Outils, Ressources
            </a>
        </div>
    </div>

    <div class="main_wrapp">
        <section class="main_board">
            <div class="hero_of_main">
                <div class="wrap">
                    <h1>Développeur Web & Web Mobile</h1>
                </div>
                <div class="wrap">
                    <!-- {/* <img src="../../src/assets/icons/settings.png" alt="" /> */} -->
                    <i class="fa-solid fa-gear"></i>
                </div>
            </div>

            <div class="glossaires_wrapper">
                <div class="title">
                    <h1>
                        Glossaire technique - 23 - Terrage<span>1/1</span>
                    </h1>
                </div>

                <div class="tool_card">
                    <div class="wrapper">

                        <h2>Projet 1 - Glossaire technique, promo 23 - Terrage</h2>
                        <p>
                            Le glossaire technique est constiuté au fur et à mesure de
                            votre parcours de formation. Vous en êtes les contributeurs.
                        </p>
                        <ul>
                            <li>
                                Vous l'alimentez en binôme à tour de rôle, 2 fois par
                                semaine.
                            </li>
                            <li>
                                Chaque binôme décide des termes à ajouter au glossaire
                            </li>
                            <li>
                                Le binôme note les termes ou les concepts au fur et à
                                mesure de la <br /> journée de formation et crée les
                                articles dans les jours de formation
                            </li>
                            <li>Votre encadrant valide les termes</li>
                            <li>
                                Le lundi suivant la semaine de création des articles, les
                                termes sont <br /> revus et relus par l'encadrant et le
                                groupe
                            </li>
                        </ul>
                    </div>
                    <!-- {/* <input type="checkbox" name="" id="" /> */} -->
                </div>

                <div class="glossaires_archive">
                    <div class="wrap">
                        <input type="text" />
                        <button>Rcherche</button>
                        <input type="checkbox" name="" id="" />
                        <label htmlFor="">
                            Rechercher dans les définitions aussi
                        </label>
                    </div>
                    <button>
                        <a href="/edit">Ajouter un nouvell article</a>
                    </button>



                    <div class="tab_wrapper">
                        <div class="wrap_tab_heads">
                            <span class="tab_head active">
                                Consulter alphabétiquement
                            </span>
                            <span class="tab_head">
                                Consulter par catégorie
                            </span>
                            <span class="tab_head">
                                Consulter par date
                            </span>
                            <span class="tab_head">
                                Consulter par auteur
                            </span>
                        </div>

                        <!-- {/* Content Tab */} -->
                        <!-- {/* ______________ */} -->
                        <div class="wrap_content show_content">
                            <div class="archive_head">
                                <p>Consultez le glossaire à l'aide de cet index</p>
                                <div class="alphabets">
                                    <span>Spécial</span>
                                    <span>A</span>
                                    <span>B</span>
                                    <span>C</span>
                                    <span>C</span>
                                    <span>D</span>
                                    <span>E</span>
                                    <span>F</span>
                                    <span>G</span>
                                    <span>H</span>
                                    <span>I</span>
                                    <span>J</span>
                                    <span>K</span>
                                    <span>L</span>
                                    <span>M</span>
                                    <span>N</span>
                                    <span>O</span>
                                    <span>P</span>
                                    <span>Q</span>
                                    <span>R</span>
                                    <span>S</span>
                                    <span>T</span>
                                    <span>U</span>
                                    <span>V</span>
                                    <span>W</span>
                                    <span>X</span>
                                    <span>Y</span>
                                    <span>Z</span>
                                    <span>Tout</span>
                                </div>
                            </div>
                            <div class="pagination">
                                <p>Page 1 2 3 4 (suivant)</p>
                                <p>Tout</p>
                            </div>

                            <div class="archive_display">
                                <?php

                                $query = "SELECT vocabularies.*, users3.image_profile
                                    FROM vocabularies
                                    LEFT JOIN users3
                                    ON vocabularies.user_id = users3.id ORDER BY concept LIMIT 10";
                                $res = mysqli_query($con, $query);

                                if ($res && mysqli_num_rows($res) > 0) {
                                    $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
                                    foreach ($rows as $row) :
                                        $tags = explode(' ', $row['tags']);
                                        $tagList = '';
                                        foreach ($tags as $tag) {
                                            if (!empty($tag)) {
                                                $tagList .= '<span>' . trim($tag) . '</span>';
                                            } else {
                                                $tagList = "...";
                                            }
                                        }

                                ?>
                                        <div class="vocab_card">
                                            <div class="profile">
                                                <img src="<?= (isset($row['image_profile'])) ? ("data:image/jpeg;base64," . base64_encode($row['image_profile'])) : "../assets/imgs/profile-placeholder.jpg"
                                                            ?>" alt="" />

                                                <p>
                                                    <strong>Author:</strong> <?= ucfirst($row["author"])
                                                                                ?>
                                                </p>
                                            </div>
                                            <div class="content_container">
                                                <div class="content">
                                                    <p>
                                                        <b><?= $row["concept"] ?></b>
                                                    </p>
                                                    <p><?= $row["description"] ?></p>
                                                    <small>
                                                        <?= $tagList ?>
                                                    </small>
                                                </div>
                                                <div class="actions">
                                                    <?php
                                                    if (isset($_SESSION["user"]) && $_SESSION["user"] == $row["author"]) {
                                                        echo "<button>Remove</button><br>";
                                                    } else {
                                                        echo "";
                                                    }

                                                    ?>


                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach;
                                } ?>
                            </div>
                        </div>

                        <!-- Consulter par Catègorie -->
                        <!-- {/* ______________ */} -->
                        <div class="wrap_content">
                            <div class="message">
                                <h3>Consulter par Catègorie</h3>
                                <p>Pas de contenue encore!</p>
                                <p>Contacter Issa pour avoir plus de contenues</p>
                            </div>
                            
                        </div>

                        <!-- Consulter par Dates -->
                        <!-- {/* ______________ */} -->
                        <div class="wrap_content">
                            <div class="message">
                                <!-- <h3>Consulter par Dates</h3> -->
                            </div>
                            <div class="archive_display">
                                <?php

                                $query = "SELECT vocabularies.*, users3.image_profile FROM vocabularies LEFT JOIN users3 ON vocabularies.user_id = users3.id ORDER BY created_at DESC LIMIT 5";
                                $res = mysqli_query($con, $query);

                                if ($res && mysqli_num_rows($res) > 0) {
                                    $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
                                    foreach ($rows as $row) :
                                        $tags = explode(' ', $row['tags']);
                                        $tagList = '';
                                        foreach ($tags as $tag) {
                                            if (!empty($tag)) {
                                                $tagList .= '<span>' . trim($tag) . '</span>';
                                            } else {
                                                $tagList = "...";
                                            }
                                        }

                                ?>
                                        <div class="vocab_card">
                                            <div class="profile">
                                                <img src="<?= (isset($row['image_profile'])) ? ("data:image/jpeg;base64," . base64_encode($row['image_profile'])) : "../assets/imgs/profile-placeholder.jpg"
                                                            ?>" alt="" />

                                                <p>
                                                    <strong>Author:</strong> <?= ucfirst($row["author"])
                                                                                ?>
                                                </p>
                                            </div>
                                            <div class="content_container">
                                                <div class="content">
                                                    <p>
                                                        <b><?= $row["concept"] ?></b>
                                                    </p>
                                                    <p><?= $row["description"] ?></p>
                                                    <small>
                                                        <?= $tagList ?>
                                                    </small>
                                                </div>
                                                <div class="actions">
                                                    <?php
                                                    if (isset($_SESSION["user"]) && $_SESSION["user"] == $row["author"]) {
                                                        echo "<button>Remove</button><br>";
                                                    } else {
                                                        echo "";
                                                    }

                                                    ?>


                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach;
                                } ?>
                            </div>
                        </div>

                        <!-- {/* ______________ */} -->
                        <div class="wrap_content">
                            <div class="message">
                                <h3>Consulter par author</h3>
                                <p>Pas de contenue encore!</p>
                                <p>Contacter Issa pour avoir plus de contenues</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include "inc/footer_page.php"; ?>
    </div>
</main>

<!-- ---------------- -->
<?php include "inc/footer.php"
?>
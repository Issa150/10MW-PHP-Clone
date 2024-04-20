<?php
include_once "../config/variables.php";
include_once "../config/session_security.php";

//************  Login check  ************//
if (!isset($_SESSION['user10MW'])) {
    header("Location: " . SITE_PATH . "pages/login.php");
}

//////////////
include_once "../config/connectionDB.php";

include_once "../config/functions.php";
//messages varaiable initiatio
$messageSuccessInsertion;
$messageFailedInsertion;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $concept = filter_input(INPUT_POST, "concept", FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_SPECIAL_CHARS);
    $tags = filter_input(INPUT_POST, "tags", FILTER_SANITIZE_SPECIAL_CHARS);





    if (!empty(trim($concept)) && !empty(trim($description))) {
        if (isset($_SESSION['user10MW'])) {

            // access the id of the person to put on vocab, the id will be stored on "$userId"
            $author = $_SESSION['user10MW'];
            $idUserQuery = "SELECT id FROM users3 WHERE name = ?";
            $db = new Database();
            $pdo = $db->connect();
            $stmt = $pdo->prepare($idUserQuery);
            $stmt->execute([$author]);

            if ($stmt->rowCount() > 0) {
                $userId = $stmt->fetch()['id'];
            } else {
                $userId = null;
            }
        } else {
            $author = "";
        }

        $query = "INSERT INTO vocabularies (user_id, concept, description, tags) 
                                    VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$userId, $concept, $description, $tags]);

        if ($stmt->rowCount() > 0) {
            $messageSuccessInsertion = "The infos are successfully saved ✅";
            echo $messageSuccessInsertion;
            header("Location: " . SITE_PATH . "pages/glossaires.php");
        } else {
            $messageFailedInsertion = "An error occurred while saving the data ❌";
            echo $messageFailedInsertion;
        }
    } else {
        echo "The inputs could not be empty 🤖";
    }
}

$titleCss = "edit_term";
include "../inc/header.php";
include "../inc/nav.php";
?>

<!-- ---------------- -->

<main class="page glossaire">
    <div class="left_menu home active">
        <div class="wrap_content">
            <a href="'<?= SITE_PATH ?>#" class="red">
                <i class="fa-solid fa-briefcase fa_icone"></i>
                Outils, Ressources
            </a>
        </div>
    </div>

    <div class="main_wrapp">
        <section class="main_board">
            <div class="hero_of_main">
            <img src="<?= SITE_PATH ?>assets/imgs/placeholder-banner_course.jpeg" alt="Image of a course banner">
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
                    <!-- {/* <i class="fa-solid fa-file-pdf"></i> */} -->

                    <div class="wrapper">
                        <!-- {/* <a>Règlement intérieur</a> */} -->
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

                <div class="vocabulary_container">
                    <form id="all_tab_form" method="post">
                        <div class="accordion_container">

                            <div class="accord_head">
                                <i class="fa-solid fa-caret-right fa anim_accord"></i>
                                Généraux
                            </div>

                            <div class="accord_body open_accord">
                                <div class="child_wrap">
                                    <div>
                                        <label for="concept">Concept</label>
                                        <i class="fa-solid fa-circle-exclamation"></i>
                                    </div>
                                    <input name="concept" id="concept" type="text" placeholder="Concept..." />
                                </div>

                                <div class="child_wrap">
                                    <div>
                                        <label for="textarea">Définition</label>
                                        <i class="fa-solid fa-circle-exclamation"></i>
                                    </div>
                                    <textarea name="description" placeholder="Description..." id="mytextarea" cols="30" rows="10"></textarea>

                                </div>

                                <div class="child_wrap">
                                    <div>
                                        <label for="tags">Termes associés</label>
                                        <i class="fa-solid fa-circle-exclamation"></i>
                                    </div>
                                    <input name="tags" id="tags" type="text" placeholder="Key words..." />
                                </div>
                            </div>

                            <div class="accord_head">Liaison automatique</div>
                            <div></div>

                            <div class="accord_head">Tags</div>
                            <div></div>
                        </div>


                        <?php
                        if (isset($_SESSION['user10MW'])) {
                            echo "<button class='enregistrer'>Enregistrer</button>";
                        } else {
                            echo "<button onclick='preventSubmition(e)' class='enregistrer' title='To add a term you have to be loged in!'><a href='" . SITE_PATH . "pages/login.php'>Login <sup>❗</sup></a></button>";
                        }

                        ?>
                    </form>
                </div>

                <div class="arcive_data"></div>
            </div>
        </section>
        <?php include "../inc/footer_page.php"; ?>
    </div>
</main>


<!-- ---------------- -->
<?php include "../inc/footer.php" ?>
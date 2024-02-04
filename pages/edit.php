<?php
include "config/connection.php";
include "config/session_security.php";
//messages varaiable initiation
$messageSuccessInsertion;
$messageFailedInsertion;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $concept = filter_input(INPUT_POST, "concept", FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_SPECIAL_CHARS);
    $tags = filter_input(INPUT_POST, "tags", FILTER_SANITIZE_SPECIAL_CHARS);



    // empty check
    if (!empty(trim($concept)) && !empty(trim($description))) {
        if (isset($_SESSION['user'])) {
            $author = $_SESSION['user'];

            $idUserQuery = "SELECT id FROM users3 WHERE name = '$author'";
            $resIdUser = mysqli_query($con, $idUserQuery);

            if ($resIdUser && mysqli_num_rows($resIdUser) > 0) {
                $userId = mysqli_fetch_assoc($resIdUser)['id'];
                // echo $userId;
            } else {
                $userId = null;
            }
        } else echo "<script></script";/*$author = "";*/
        ///////////////
        $query = "INSERT INTO vocabularies (author,user_id, concept, description, tags) 
                                    VALUES (?,?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "sisss", $author, $userId, $concept, $description, $tags);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            $messageSuccessInsertion = "The infos are successfully is saved ✅";
            echo $messageSuccessInsertion;
            header("Location: /glossaires");
        } else {
            $messageFailedInsertion = "An error occurred while saving the data ❌";
            echo $messageFailedInsertion;
        }
    } else {
        echo "The inputs could not be empty 🤖";
    }
}


include "inc/header.php";
include "inc/nav.php";
?>
<?php  ?>
<!-- ---------------- -->



<main class="glossaire page">
    <div class="left_menu  active">
        <div class="wrap_content">
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
                            <div class="accord_head" onClick={accordionHandel}>
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
                                    <textarea name="description" placeholder="Description..." id="textarea" cols="30" rows="10"></textarea>
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
                             if(isset($_SESSION['user'])){
                                 echo "<button class='enregistrer'>Enregistrer</button>";
                            }else{
                                echo "<button onclick='preventSubmition(e)' class='enregistrer' title='To add a term you have to be loged in!'>Login</button>";
                            }
                             
                             ?>
                        
                        <button>
                            <a href="/glossaires">See All</a>
                        </button>
                        <button>Set data to server</button>
                    </form>
                </div>

                <div class="arcive_data"></div>
            </div>
        </section>
        <?php include "inc/footer_page.php"; ?>
    </div>
</main>


<!-- ---------------- -->
<?php include "inc/footer.php" ?>
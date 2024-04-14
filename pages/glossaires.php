<?php
include_once "../config/variables.php";
include_once "../config/session_security.php";

//************  Login check  ************//
if(!isset($_SESSION['user10MW'])){
    header("Location: ".SITE_PATH."pages/login.php");
}
/////////////
include_once "../config/connectionDB.php";
// include "../config/functions.php";

$titleCss = "glossaires";
include_once "../inc/header.php";
include_once "../inc/nav.php";

////////////////////////////////////

// Function for all type of categories 

function getVocabularies(PDO $pdo, string $order,int $limit ): string{
    $sql = "SELECT vocabularies.*, users3.image_profile, users3.name
            FROM vocabularies
            INNER JOIN users3
            ON vocabularies.user_id = users3.id ORDER BY $order LIMIT $limit";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll();

    $vocabList = '';
    foreach ($rows as $row) {
        $tags = explode(' ', $row['tags']);
        $tagList = '';
        foreach ($tags as $tag) {
            if (!empty($tag)) {
                $tagList .= '<span>' . trim($tag) . '</span>';
            } else {
                $tagList = "...";
            }
        }
        $datetime = DateTime::createFromFormat('Y-m-d H:i:s', $row['created_at']);
        $date = $datetime->format('d/m/Y');
        $time = $datetime->format('H:i');


        $vocabList .= "
        <div class='vocab_card'>
            <div class='vocab_head'>
                <h4>". $row['concept'] . "</h4>
            </div>
      
      
            <div class='vocab_body'>
      
                <div class='editable' id='mycontent' >" . htmlspecialchars_decode($row['description']) . "</div>
                
                <div class='tag_wrap'>
                <span>Termes associés</span><small>" . $tagList . "</small>
                </div>
                <div class='meta_data'>
                    <img class='profile' src=" . (isset($row['image_profile']) ? (SITE_PATH. 'assets/uploads/user/'.$row['image_profile']) : SITE_PATH. "assets/imgs/profile-placeholder.jpg") . " alt='' />
                    <div class='middle_wrapper'>
                        <p><span class='meta_title'>Author:</span>"  . ucfirst($row['name']) . "</p>
                        <p>
                            ". $date ."
                        </p>

                    </div>
                    <div class='actions'>
                        <div class='icons_wrapper'>
                        <a><i class='fa-solid fa-link'></i></a>
                        ";
                          if (isset($_SESSION["user10MW"]) && $_SESSION["user10MW"]['name'] == $row["name"]) {
                            $vocabList .= "
                            <a href='?termId=". $row['id']."'><i class='fa-solid fa-gear'></i></a>
                            <a href='?termId=" .$row['id'] ."'><i class='fa-solid fa-trash-can'></i></a>";
                        }
                        $vocabList.="</div>
                        <p>
                            ". $time ."
                        </p>
                    </div>
                </div>
            </div>
        </div>" ;
        
    }

    return $vocabList;
}



///////////////////////////////////////////
$db = new Database();
$pdo = $db->connect();

if (isset($_POST['remove'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM vocabularies WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    header('Location: glossaires.php');
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    header('Location: edit.php?id=' . $id);
}
?>

<!-- ---------------- -->



<main class="page glossaire">
    <div class="left_menu home active">
        <div class="wrap_btn">
            <a href="'<?=SITE_PATH?>#" class="red">
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
                        <a href="<?= SITE_PATH?>pages/edit_term.php">Ajouter un nouvell article</a>
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

                        <!-- {/* Contents Tab */} -->


                        <!-- Consulter par Alphqbetiaue -->
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
                                  
                                <?= getVocabularies($pdo, "concept", 4);?>

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
                                <?= getVocabularies($pdo, "created_at DESC", 4)?>
                            </div>
                        </div>

                        <!-- {/* ______________ */} -->
                        <div class="wrap_content">
                            <div class="message">
                                <h3>ddddConsulter par author</h3>
                                <p>Pas de contenue encore!</p>
                                <p>Contacter Issa pour avoir plus de contenues</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include "../inc/footer_page.php"; ?>
    </div>
</main>

<!-- ---------------- -->
<?php include_once "../inc/footer.php"; ?>
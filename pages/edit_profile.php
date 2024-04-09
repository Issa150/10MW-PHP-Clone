<?php
include_once "../config/variables.php";
include_once "../config/session_security.php";

//************  Login check  ************//
if (!isset($_SESSION['user10MW'])) {
    header("Location: " . SITE_PATH . "pages/login.php");
}
/////////////
include_once "../config/connectionDB.php";
include_once "../config/functions.php";

//************  All function are here  ************//
$userdInfo = getUserInfo($_SESSION['user10MW']['id']);

//************  Function for Updating Profile infos
function updateUserInfo($id, $firstName, $lastName, $email, $country, $city, $interests)
{
    $db = new Database();
    $pdo = $db->connect();
    $sql = "UPDATE users3 SET 
            name = :name, lastName = :lastName, email = :email, country = :country, city = :city, interests = :interests
            WHERE id = :id";
    $request =  $pdo->prepare($sql);
    $request->execute([
        ':name' => $firstName,
        ':lastName' => $lastName,
        ':email' => $email,
        ':country' => $country,
        ':city' => $city,
        ':interests' => $interests,
        'id' => $id
    ]);

    // Fetch the updated user data from the database
    $query = "SELECT id,name,lastName,email,country,city,image_profile,interests FROM users3 WHERE id = :id LIMIT 1";
    $stmt = $pdo->prepare($query);
    // $stmt->bindParam(':id', $userId);
    $stmt->execute([":id" => $id]);
    $updatedUserData = $stmt->fetch();

    // Update the $_SESSION variable with the new user data
    $_SESSION['user10MW'] = $updatedUserData;
}

if (!empty($_POST)) {
    $firstName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS);
    $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS);
    $interests = filter_input(INPUT_POST, 'interests', FILTER_SANITIZE_SPECIAL_CHARS);

    
    // image will be updated only if new image is inserted!!!
    if ($_FILES['new_profile_img']['size'] > 0) {
        $imageProfile = $_FILES['new_profile_img']['name'];
        $db = new Database();
        $pdo = $db->connect();
        $sql = "UPDATE users3 SET image_profile = :image_profile WHERE id = :id";
        $request = $pdo->prepare($sql);
        $request->execute([
            ':id' => $_SESSION['user10MW']['id'],
            'image_profile' => $imageProfile,
        ]);
        move_uploaded_file($_FILES['new_profile_img']['tmp_name'], '../assets/uploads/user/' . $imageProfile);
    }
    
    updateUserInfo($_SESSION['user10MW']['id'], $firstName, $lastName, $email, $country, $city, $interests);
    header('Location: profile.php');
}
// $direPos = "subPage";
$title = "edit_profile";
include_once "../inc/header.php";
include_once "../inc/nav.php";


?>
<main class="page edit_profile">
    <section class="main_board">

        <div class="main_wrapp">

            <div class="main_board vocabulary_container">

                <div class='hero_of_main'>


                    <div class="wrap">
                        <img class='profile' src="
                        <?= (isset($userdInfo['image_profile']))
                            ? (SITE_PATH . "assets/uploads/user/" . $userdInfo['image_profile'])
                            : SITE_PATH . "assets/imgs/imgPlaceholder01.png";
                        ?>" alt="" />

                        <h1>10MW: Tableau de bord</h1>
                    </div>

                    <div class="wrap">
                        <button>Réinitialiser la page</button>
                    </div>


                </div>

                <form id="all_tab_form" method="post" enctype="multipart/form-data">
                    <div class="accordion_container">


                        <div class="accord_head">
                            <i class="fa-solid fa-angle-down"></i>
                            Général
                        </div>

                        <div class="accord_body open_accord">
                            <div class="child_wrap">
                                <div>
                                    <label for="firstName">Prénom</label>
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <input name="name" id="firstName" type="text" placeholder="Prénom..." value="<?= isset($userdInfo['name']) ? $userdInfo['name'] : "" ?>" />
                            </div>

                            <div class="child_wrap">
                                <div>
                                    <label for="lastName">Nom de famille</label>
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <input name="lastName" id="lastName" type="text" placeholder="Nom de famille..." value="<?= isset($userdInfo['lastName']) ? $userdInfo['lastName'] : "" ?>" />
                            </div>

                            <div class="child_wrap">
                                <div>
                                    <label for="mail">Adresse de courriel</label>
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <input name="mail" id="mail" type="text" placeholder="exemple@mail.com" value="<?= isset($userdInfo['email']) ? $userdInfo['email'] : "" ?>" />
                            </div>

                            <div class="child_wrap">
                                <div>
                                    <label for="interests">Centres d’intérêt</label>
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <input name="interests" id="interests" type="text" placeholder="option one, option two" value="<?= isset($userdInfo['interests']) ? $userdInfo['interests'] : "" ?>" />
                            </div>

                            <div class="child_wrap">
                                <div>
                                    <label for="visiblite">Visibilité de l’adresse de courriel</label>
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <select name="visiblity_profile_mail" id="">
                                    <option value="hidden">Caché</option>
                                    <option value="visible">Visible pour tout le monde</option>
                                    <option value="just for memebers">Visible pour participant du cours</option>
                                </select>
                            </div>

                            <!-- <div class="child_wrap">
                                <div>
                                    <label for="mail">ID de profil MoodleNet</label>
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <input name="MoodleNetID" id="" type="text" placeholder="" />
                            </div> -->

                            <div class="child_wrap">
                                <div>
                                    <label for="city">Ville</label>
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <input name="city" id="city" type="text" placeholder="" value="<?= isset($userdInfo['city']) ? $userdInfo['city'] : "" ?>" />
                            </div>

                            <div class="child_wrap">
                                <div>
                                    <label for="country">Choisir un pays</label>
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <input name="country" id="country" type="text" placeholder="" value="<?= isset($userdInfo['country']) ? $userdInfo['country'] : "" ?>" />
                            </div>

                            <!-- <div class="child_wrap">
                                <div>
                                    <label for="textarea">Définition</label>
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <textarea name="description" placeholder="Description..." id="mytextarea" cols="30" rows="10"></textarea>

                            </div> -->

                        </div>
                        <!-- ------------------ -->
                        <div class="accord_head">
                            <i class="fa-solid fa-angle-down"></i>
                            Avatar utilisateur
                        </div>

                        <div class="accord_body open_accord">
                            <div class="child_wrap">
                                <div>
                                    <label for="profile_img">Image actuelle</label>
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <img class='profile' src="
                                <?= (isset($userdInfo))
                                    ? (SITE_PATH . "assets/uploads/user/" . $userdInfo['image_profile'])
                                    : SITE_PATH . "assets/imgs/imgPlaceholder01.png";
                                ?>" alt="" />
                            </div>

                            <div class="child_wrap">
                                <div>
                                    <label for="">Nouvelle image</label>
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <div>
                                    <div class="uploader_card">
                                        <label for="new_profile_img">
                                            <i class="fa-solid fa-cloud-arrow-up"></i>

                                        </label>
                                        <input name="new_profile_img" id="new_profile_img" type="file" />
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <button class="enregistrer">Enregistrer le profil</button>
                    <a class="btn_link" href="<?= SITE_PATH ?>pages/profile.php">Annuler</a>
                </form>
            </div>
        </div>
    </section>
    <?php include "../inc/footer_page.php"; ?>
</main>


<?php include "../inc/footer.php" ?>
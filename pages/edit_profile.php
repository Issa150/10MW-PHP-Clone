<?php
include_once "../config/variables.php";
include_once "../config/session_security.php";
include_once "../config/functions.php"; 




// $direPos = "subPage";
$title = "edit_profile";
include_once "../inc/header.php";
include_once "../inc/nav.php";

?>
<main class="page edit_profile">
    <!-- <section class="main_board"> -->

    <div class="main_wrapp">

        <div class="main_board vocabulary_container">

            <div class='hero_of_main'>


                <div class="wrap">
                    <img class='profile' src="
                        <?= (isset($imageProfile))
                            ? ("data:image/jpeg;base64," . base64_encode($imageProfile))
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
                            <input name="firstName" id="firstName" type="text" placeholder="Prénom..." />
                        </div>

                        <div class="child_wrap">
                            <div>
                                <label for="lastName">Nom de famille</label>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <input name="lastName" id="lastName" type="text" placeholder="Nom de famille..." />
                        </div>

                        <div class="child_wrap">
                            <div>
                                <label for="mail">Adresse de courriel</label>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <input name="mail" id="mail" type="text" placeholder="exemple@mail.com" />
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

                        <div class="child_wrap">
                            <div>
                                <label for="mail">ID de profil MoodleNet</label>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <input name="MoodleNetID" id="" type="text" placeholder="" />
                        </div>

                        <div class="child_wrap">
                            <div>
                                <label for="city">Ville</label>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <input name="city" id="city" type="text" placeholder="" />
                        </div>

                        <div class="child_wrap">
                            <div>
                                <label for="country">Choisir un pays</label>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <input name="country" id="country" type="text" placeholder="" />
                        </div>

                        <div class="child_wrap">
                            <div>
                                <label for="textarea">Définition</label>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <textarea name="description" placeholder="Description..." id="mytextarea" cols="30" rows="10"></textarea>

                        </div>

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
                                <?= (isset($imageProfile))
                                    ? ("data:image/jpeg;base64," . base64_encode($imageProfile))
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
            </form>
        </div>
    </div>
    <!-- </section> -->
</main>


<?php include "../inc/footer.php" ?>
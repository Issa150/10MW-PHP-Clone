<?php
////***********  Log out   ***********////
if (isset($_GET["logout"])) {
    unset($_SESSION['user10MW']);
    header("Location: " . SITE_PATH . "pages/login.php");
}
//////////////
// redirection vers la page d'acceuil d'après le role associé à l'utilisateur connecté //
if (isset($_GET['home'])) {
    // if ($_SESSION['user10MW']['role'] == "ROLE_ADMIN" || $_SESSION['user10MW']['role'] == "ROLE_TEACHER") {
    //     header('Location: ' . SITE_PATH . 'teachers/home_teacher.php');
    // } else
    if (isset($_SESSION['user10MW']['role']) == "student") {
        header('Location:'.SITE_PATH.'pages/home_student.php');
    }
}

?>


<nav>

    <!-- Start First column -->
    <ul class="left_nav">
        <!-- <button class="asiderBtn"><img class='menu m_Icon' src="assets/icons/bars-solid.svg" alt="" /></button> -->
        <button class="asiderBtn"><i class="fa-solid fa-bars"></i></button>
        
        <!-- <li><a href="<?//= SITE_PATH ?>index.php?home">Acceuil</a></li> -->

        <li><img class='dixMentionImg big_icon' src="<?= SITE_PATH ?>assets/icons/Logo_10MW_noir_fond_blanc.jpg" alt="" /></li>
        <?php
        if ($_SESSION['user10MW']['role'] === 'teacher' || $_SESSION['user10MW']['role'] === 'admin') { ?>
            <li><a href="<?= SITE_PATH ?>teachers/home_teacher.php">Administration du site</a></li>
        <?php } ?>

        <li class='menuItem1'>
            <label for="sub_nav_1">Groupe Colombbus <img class='s_Icon' src="<?= SITE_PATH ?>assets/icons/sort-down-solid.svg" alt="" /></label>
            <ul class="subMenu">
                <li>Colombbus</li>
                <li>10 Mention Web</li>
                <li>Declick</li>
            </ul>
        </li>
        <li class='menuItem1'>
            <label htmlFor="sub_nav_1">Moodle <img class='s_Icon' src="<?= SITE_PATH ?>assets/icons/sort-down-solid.svg" alt="" /></label>

            <ul class="subMenu">
                <li>Colombbus</li>
                <li>10 Mention Web</li>
                <li>Declick</li>
            </ul>
        </li>
        <!-- <li><img class='universal_access big_Icon' src="assets/icons/universal_access.png" alt="" /></li> -->
        <li><i class="fa-solid fa-universal-access big_icon"></i></li>
    </ul>
    <!-- End of first  column -->


    <!-- Start Midle Warning  Box -->

    <?php
    if (!isset($_SESSION["user10MW"])) {
        echo "<span class='loginWarning' style='background-color: hsl(0, 100%, 50%,.5); outline: 2px solid red; display:flex; align-items:center; padding-inline:1em; margin-block:10px; border-radius:5px;'>The user is not specified in session</span>";
    }
    ?>






    <!-- Start Right Column -->
    <ul class="right_nav">
        <li><img class='m_Icon' src="<?= SITE_PATH ?>assets/icons/search.svg" alt="" /></li>
        <li><img class='m_Icon' src="<?= SITE_PATH ?>assets/icons/bell-solid.svg" alt="" /></li>
        <li><img class='m_Icon' src="<?= SITE_PATH ?>assets/icons/conversation.svg" alt="" /></li>
        <li>
            <div class='menuItem1'>
                <p>
                    <?php
                    if (isset($_SESSION["user10MW"])) {
                        echo ucfirst($_SESSION["user10MW"]['first_name']);
                    } else {
                        echo "<a href='" . SITE_PATH . "pages/login.php'>Login</a>";
                    }
                    ?>
                </p>
                <img class='profile' src="
                <?= (isset($_SESSION['user10MW']))
                    ? SITE_PATH . "assets/uploads/user/" . $_SESSION['user10MW']['image_profile']
                    : SITE_PATH . "assets/imgs/imgPlaceholder01.png";
                ?>" alt="" />

                <img class='s_Icon' src="assets/icons/sort-down-solid.svg" alt="" />
                <ul class="subMenu">
                    <a href="<?= SITE_PATH ?>"><i class="fa-solid fa-house"></i>Tableau du bord</a>
                    <!-- <a href='<?= SITE_PATH ?>profile.php'><i class="fa-solid fa-user">Profile</i></a> -->
                    <?= isset($_SESSION['user10MW']) ? "<a href='" . SITE_PATH . "pages/profile.php'><i class='fa-solid fa-user'></i>Profile</a>" : "<a href='" . SITE_PATH . "login.php'><i class='fa-solid fa-user'></i>Login!</a>" ?>
                    <a href='<?= SITE_PATH ?>pages/profile2'><i class="fa-solid fa-envelope-open-text"></i>Messages Personnels</a>
                    <a><i class="fa-solid fa-screwdriver-wrench"></i>Préférences</a>
                    <?php if (isset($_SESSION['user10MW'])) { ?>
                        <a href="<?= SITE_PATH ?>?logout"><i class='fa-solid fa-right-from-bracket'></i> Logout
                        <?php } else { ?>
                            <a href="<?= SITE_PATH ?>pages/login.php"><i class='fa-solid fa-right-to-bracket'></i> Log in
                            <?php } ?>
                            </a>

                </ul>
            </div>
        </li>
    </ul>
</nav>
<?php
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';
?>
<?php
include "config/connection.php";
include "config/functions.php";
?>


<nav>
    <ul class="left_nav">
        <button class="asiderBtn"><img class='menu m_Icon' src="assets/icons/bars-solid.svg" alt="" /></button>
        <li><img class='dixMentionImg big_icon' src="assets/icons/Logo_10MW_noir_fond_blanc.jpg" alt="" /></li>
        <li class='menuItem1'>
            <label for="sub_nav_1">Groupe Colombbus <img class='s_Icon' src="assets/icons/sort-down-solid.svg" alt="" /></label>
            <ul class="subMenu">
                <li>Colombbus</li>
                <li>10 Mention Web</li>
                <li>Declick</li>
            </ul>
        </li>
        <li class='menuItem1'>
            <label htmlFor="sub_nav_1">Moodle <img class='s_Icon' src="assets/icons/sort-down-solid.svg" alt="" /></label>

            <ul class="subMenu">
                <li>Colombbus</li>
                <li>10 Mention Web</li>
                <li>Declick</li>
            </ul>
        </li>
        <!-- <li><img class='universal_access big_Icon' src="assets/icons/universal_access.png" alt="" /></li> -->
        <li><i class="fa-solid fa-universal-access big_icon"></i></li>
    </ul>








    <ul class="right_nav">
        <li><img class='m_Icon' src="assets/icons/search.svg" alt="" /></li>
        <li><img class='m_Icon' src="assets/icons/bell-solid.svg" alt="" /></li>
        <li><img class='m_Icon' src="assets/icons/conversation.svg" alt="" /></li>
        <li>
            <div class='menuItem1'>
                <p>
                    <?php if(isset($_SESSION["user"])){echo ucfirst($_SESSION["user"]);}
                    else{ echo "<a href='/login'>Login</a>"; } ?>
                </p>
                <!-- <img class='profile' src="assets/icons/f3.jpg" alt="" /> -->
                <!-- <img class='profile' src="data:image/jpeg;base67,<?php //$imageProfile ? base64_encode($imageProfile) : "assets/icons/f3.jpg"?>" alt="" /> -->
                <img class='profile' src="data:image/jpeg;base64,<?= $imageProfile ? base64_encode($imageProfile) : "../../assets/imgs/imgPlaceholder01.png"
                      ?>" alt="" />

                <img class='s_Icon' src="assets/icons/sort-down-solid.svg" alt="" />
                <ul class="subMenu">
                    <a href='/dashboard'><i class="fa-solid fa-house"></i>Tableau du bord</a>
                    <a href='/profile'><i class="fa-solid fa-user"></i>Profile</a>
                    <a href='/profile2'><i class="fa-solid fa-envelope-open-text"></i>Messages Personnels</a>
                    <button><i class="fa-solid fa-screwdriver-wrench"></i>Préférences</button>
                    <a href="/login" onClick={logout} name="logout"><i class="fa-solid fa-right-from-bracket"></i> login/out</a>
                </ul>
            </div>
        </li>
    </ul>
</nav>
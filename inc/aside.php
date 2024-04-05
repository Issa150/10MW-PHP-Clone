<?php


// mysqli_close($con);
// $options=[
//   'cost'=>12
// ];
// echo "> " .password_hash("mehdi24", PASSWORD_DEFAULT, $options) . " <";
?>
<div class="left_menu active">
  <div class="wrap_tabs">
    <span class="tab_head active">Cours</span>
    <span class="tab_head">Sites</span>
  </div>


  <!-- Content Tab  -->
  <div class="wrap_content show_content">
    <a href="#" onClick={outilsHandler}><i class="fa-solid fa-briefcase"></i> Outils & ressorces</a>

    <div class="profile_data">
      <div class='my_courses'>
        <h2>Mes cours</h2>
        <a class="aside-item-course-title" href="#">
          <i class="fa-solid fa-graduation-cap"></i>
          Développeur Web & Web Mobile
        </a>
      </div>

      <div class="prfile_info">
        <p class="status">Utilisateur connecté</p>

        <div class="wrap_card_info">
          <div class="left">
            <img class="profile" src="<?=
                                      (isset($imageProfile)) ? ("data:image/jpeg;base64," . base64_encode($imageProfile)) : SITE_PATH."assets/imgs/imgPlaceholder01.png"
                                      ?>" alt="Avatar" />
          </div>
          <div class="right">
            <h2>
              <?= $fullname; ?>
            </h2>
            <ul>
              <li>Pays: <span><?= $country; ?></span></li>
              <li>Ville: <span><?= $city; ?></span></li>
              <li>Adresse de courriel: <span><a class="mail" href="#"><?= $email; ?></a></span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="wrap_content">
    <a href="#">
      <!-- <img src="../assets/icons/academic-cap.png" alt="icon academy" /> -->
      <i class="fa-solid fa-graduation-cap"></i>
      Développeur Web & Web Mobile
    </a>
    <a href="#"><img src="<?= SITE_PATH?>assets/icons/badge-check.png" alt="icon academy" /> Badges</a>
    <a href="#"><img src="<?= SITE_PATH?>assets/icons/document-text.png" alt="icon academy" /> Notes</a>
    <a href='/dashboard'><img src="<?= SITE_PATH?>assets/icons/home.png" alt="icon academy" />Tableau de bord</a>
  </div>
</div>
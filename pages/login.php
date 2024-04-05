<?php
/*

*/
include_once "../config/variables.php";
include "../config/connection.php";
include "../config/session_security.php";



//////////////////////////////////////////////////////////:::

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strtolower( filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS));
    $password = $_POST["password"];

    $options = [
        'cost' => 12
    ];

    $query = "SELECT * FROM users3 WHERE name = :name LIMIT 1";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    $userData = $stmt->fetch();

    if ($userData){
        if(password_verify($password, $userData["password"])) {
            $_SESSION["user10MW"] = $name;
            header("Location: ". SITE_PATH);
        }else{
            echo "Password is incorrect!";
        }
    } else {
        echo "Name is not valid !";
    }
} else {
    if (isset($_SESSION["user10MW"])) {
        unset($_SESSION["user10MW"]);
        echo "Considered as deconection!";
    } else {

    }
}
$title = "Login";
include "../inc/header.php";
?>
<!-- ---------------- -->


<div class="container">
    <div class="demo_wrapper">
        <span>Demo</span>
        <div>
            <a href="<?= SITE_PATH?>">Accès sans connection</a>
        </div>
    </div>
    <div class="login_wrapper">
        <img src="assets/imgs/big-logo-removebg.png" alt="" />

        <form class="content" method="post">
            <div class="message_container">
                <p class="msg">
                    Bienvenue dans votre espace personnel !
                </p>
                <p class="msg">
                    Nom d'utilisateur ou mot de pass <br> ne sont pas correct!
                </p>
            </div>
            <input type="text" name="name" placeholder="Nom d'utilisateur/adresse de courriel" onChange={inputHandler} />
            <input type="password" onChange={inputHandler} placeholder="Mot de passe" name="password" />
            <div class="wrap">
                <input type="checkbox" name="" id="" />
                <label htmlFor="">Se souvenir du nom d'utilisateurs</label>
            </div>
            <button onClick={login} name="btn-submit" type="submit">Connextion</button>
            <div>
                <a>Nom d'utilisateur ou mot de passe oublié ?</a>
                <a>Besoin d'aide supplémentaire ?</a>
            </div>
            <p>
                Votre navigateur doit supporter les cookies
                <i class="fa-solid fa-circle-question"></i>
            </p>
        </form>
    </div>
</div>


<!-- ---------------- -->
<?php include "../inc/footer.php" ?>
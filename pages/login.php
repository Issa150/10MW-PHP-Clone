<?php
include_once "../config/variables.php";
include "../config/connectionDB.php";
include "../config/session_security.php";
// include_once "../config/functions.php";

////////   function is ready to be moved to another file    ////////////
function login($pdo, $username, $password)
{

    // $query = "SELECT id,first_name,last_name,role,password,email,country,city,image_profile FROM members WHERE first_name = :name LIMIT 1";
    $query = "SELECT members.*, 
                    students.member_id AS 'the_student_id', 
                    students.study_field_id, 
                    teachers.member_id AS 'the_teacher_id', 
                    studyfields.image_banner AS 'field_banner'
                FROM members
                LEFT JOIN students ON members.id = students.member_id
                LEFT JOIN teachers ON members.id = teachers.member_id
                LEFT JOIN studyfields ON studyfields.id = students.study_field_id
                WHERE first_name = :first_name
                LIMIT 1";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':first_name', $username);
    $stmt->execute();
    $userData = $stmt->fetch();
    if ($userData) {
        if (password_verify($password, $userData["password"])) {
            $_SESSION["user10MW"] = $userData;
            $_SESSION["user10MW_metaInfo"] = "";

            if($userData['role'] == 'student'){
                header("Location: ".SITE_PATH . "index.php"); 
            }elseif($userData['role'] === 'teacher'){
                header("Location: ".SITE_PATH."teachers/");
            }elseif($userData['role'] === 'admin' || $userData['role'] === 'admin'){
                header("Location: ".SITE_PATH."admins/");
            }

            header("Location: " . SITE_PATH);
        } else {
            echo "Password is incorrect!";
        }
    } else {
        echo "Name is not valid !";
    }
}

// login callback
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = strtolower(filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS));
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    // $password = $_POST["password"];

    $db = new Database();
    $pdo = $db->connect();
    login($pdo, $username, $password);
}

$titleCss = "login";
$titelMeta = "";
include "../inc/header.php";
?>

<!-- ---------------- -->

<div class="container">
    <div class="login_wrapper">
        <img src="<?= SITE_PATH ?>assets/imgs/big-logo-removebg.png" alt="" />

        <form class="content" method="post">
            <div class="message_container">
                <p class="msg">
                    Bienvenue dans votre espace personnel !
                </p>
                <p class="msg">
                    Nom d'utilisateur ou mot de pass <br> ne sont pas correct!
                </p>
            </div>
            <input type="text" name="username" value="Alice" placeholder="Nom d'utilisateur/adresse de courriel" onChange={inputHandler} />
            <input type="password" name="password" value="student" placeholder="Mot de passe"  />
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
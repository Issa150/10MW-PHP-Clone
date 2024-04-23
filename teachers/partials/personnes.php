<?php
// $my_sql = "SELECT members.id, members.first_name,members.last_name,  classes.name
//             FROM members
//             INNER JOIN students
//             INNER JOIN classes
//             ON students.member_id = members.id
//             WHERE classes.id = :id";
$my_sql =   "SELECT s.id,  s.class_id,m.first_name, m.last_name, sf.name
            FROM students s 
            INNER JOIN classes c
            INNER JOIN members m
            INNER JOIN studyfields sf
            ON s.class_id = c.id AND m.id = s.id AND sf.id = c.study_field_id
            WHERE c.id = :id";
$collegues = getInfoByJoins($my_sql, $_SESSION['currentClass'] );
// dd($collegues);
// dd(isset($_GET['class']));
// dd($_SESSION['user10MW']);
echo"session id_class:" . $_SESSION['currentClass'];
?>

<div class="section-meta-info">

    <p>Total classmates: <?= count($collegues)?></p> 

    <a><i class="fa-solid fa-user-plus"></i></a>

</div> 
<?php 
    
    // dd($collegues);
    if( count($collegues)  > 0 ) {
    foreach($collegues as $collegue){    
?>
    <div class="card">

        <div class="card-head">
            <img src="<?=  !empty($collegue['image_profile']) ?SITE_PATH .'assets/uploads/user/'.$collegue['image_profile'] : SITE_PATH .'assets/imgs/placeholders/profile-placeholder.jpg' ?>" alt="">
            <div class="meta-authorInfo">
                <p><?= ucfirst($collegue['first_name']) . ' ' .$collegue['last_name']?></p>
            </div>

            <div class="metaInfo">
                <ul>
                    <li>
                        <a><i class="fa-solid fa-ellipsis-vertical"></i></a>
                        <ul>
                            <li><a><i class="fa-regular fa-envelope"></i> Contact</a></li>
                            <li><a><i class="fa-solid fa-thumbtack"></i> Pin</a></li>
                        </ul>
                    </li>
                </ul>
                
            </div>
        </div>

    </div>
<?php 
} }else{
    echo '<div class="card"><p>Aucun apprenant  enregistré pour ce cours!</p></div>';
}

?>


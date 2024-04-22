<?php
$collegues = getInfoByJoin('students', 'classes', 'name', 'class_id' , "class_id", isset($_GET['class']));
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


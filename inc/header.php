<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <?= ($titleCss == "home_teacher") ? "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' />" : "" ?>
     <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Inserting css of each  page to make the css file as light as possible-->
    
    <link rel="stylesheet" href="<?=SITE_PATH?>assets/styles/css/<?= $titleCss ?>.css">
    <!-- <link rel="stylesheet" href="<?//=SITE_PATH?>assets/styles/css/style.css"> -->
    <!-- inserting tinyme library only in  the page where it's needed -->
    <?php echo ($titleCss == "edit_term") ? "<script src='".SITE_PATH."tinymce/tinymce.min.js' referrerpolicy='origin'></script>" : ""?>
    <?php echo ($titleCss == "edit_profile") ? "<script src='../tinymce/tinymce.min.js' referrerpolicy='origin'></script>" : ""?>
    <title><?= $titleCss ? $titleCss : ""?></title>
</head>
<body>  
    <div class="page_container">
  
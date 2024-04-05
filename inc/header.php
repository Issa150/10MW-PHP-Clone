<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?=SITE_PATH?>assets/styles/css/style.css">
    <?php echo ($title == "Edit") ? "<script src='tinymce/tinymce.min.js' referrerpolicy='origin'></script>" : ""?>
    <?php echo ($title == "edit_profile") ? "<script src='../tinymce/tinymce.min.js' referrerpolicy='origin'></script>" : ""?>
    <title><?= $title ? $title : ""?></title>
</head>
<body>
    <div class="page_container">
  
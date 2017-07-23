<?php
    if (isset($_SESSION)) {
            session_unset();
            session_destroy();
        }
    session_start();
    include realpath($_SERVER["DOCUMENT_ROOT"]).'/functions/config.php';
    include $root.'/functions/db.php';
    $target_dir = $root."/uploads/";
    $target_file = $target_dir .$_POST["name"].$_POST["quest"]. basename($_FILES["fileToUpload"]["name"]);
    // $target_file = $target_dir.$_POST["name"].$_POST["quest"].date("his");
    // $uploadOk = 1;
    // Check if image file is a actual image or fake image
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
?>

Uploaded!
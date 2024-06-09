<?php
session_start();
include "database/data-save.php";
$db=new Data_save;

if(isset($_POST['btn-save'])) {
    $db->saveData($_POST);
}

if(isset($_POST['login_button'])) {
    $db->login($_POST);		
}
if(isset($_POST['logout'])){
    $db->logout();
}

if(isset($_FILES['slider_image'])){
    $db->saveImage($_FILES);
}

if(isset($_FILES['videoFile'])){
    $db->saveVideo($_FILES);
}

if(isset($_FILES['Thumbnail_image']) or isset($_POST['des_name']) or isset($_POST['des_hour'])){
    $db->saveDestination($_FILES,$_POST);
}

if(isset($_FILES['des_back_image']) or isset($_POST['mainDestination'])){
    $db->saveCityInnerDetails($_FILES,$_POST);
}

if(isset($_FILES['tourPlaceImage']) or isset($_POST['mainDest'])){
    $db->saveTopPlace($_FILES,$_POST);
}

if(isset($_POST['selectId'])){
    $db->getPlace($_POST['selectId']);
}

if(isset($_FILES['blogImage']) or isset($_POST['tourPlace'])){
    $db->saveBlogDetails($_FILES,$_POST);
}
?>


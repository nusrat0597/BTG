<?php 
include "database/data-save.php";
$db = new Data_save;
if(isset($_GET['rel_id'])){
    $getBlog=$db->getBlog($_GET['rel_id']);
    $getDescription=$db->getDescription($_GET['rel_id']);
    if(!empty($getBlog) or !empty($getDescription)){
        $getBlog=$getBlog[0];
    }else{
        header("Location: index.php");
    }
    $image=$getBlog['image']; 
}
?>
<style>
    .head-img{
        /* in_lalbag.jpg */ 
   
        background-image: url("admin/spotlight_destination/blog-image/<?php print $image ?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
        position: absolute;
        transition: all 1.1s;

    }
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-Your">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="dklal.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpdYouryknf1YoNbCzqRKc4qyorYourgaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="head">
    <div class="head-img">
    </div>

	<div class="btn d-flex">
	<div class="back">
	<a id="goBack" >Go Back</a>
</div>

<div class="map">
	<a href="googlemap.php">Google Map</a>
</div>
</div>
 
</div>

<?php foreach($getDescription as $description){ ?>
<div class="naming">
	<h2><?php print $description['heading'] ?></h2>
</div>

<div class="p-5">
    <p ><?php print $description['description'] ?></p>
</div>

<?php } ?>

</body>
</html>

<script>
    document.getElementById('goBack').addEventListener('click', function() {
    window.history.back();
});
</script>

<?php 
include "database/data-save.php";
$db = new Data_save;
if(isset($_GET['rel_id'])){
    $getCityData=$db->getCityInnerDetails($_GET['rel_id']);
    $getTop=$db->getTopPlace($_GET['rel_id']);
    if(!empty($getCityData) or !empty($getTop)){
        $allData=$getCityData[0];
    }else{
        header("Location: index.php");
    }
}

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$location = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<style>
    .<?php echo strtolower($allData['name']); ?> {
        height: 600px;
        width: 100%;
        /*background-color: blueviolet;*/
        background-image: url("<?php echo "admin/spotlight_destination/touristPlace/".$allData['back_image']; ?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-Your">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="dhaka.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpdYouryknf1YoNbCzqRKc4qyorYourgaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<link rel="stylesheet" type="text/css" href="dhaka.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpdYouryknf1YoNbCzqRKc4qyorYourgaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="f1">
    <?php 
    
    ?> 
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="<?php print $location ?>">Tour</a></li>
        <li><a href="googlemap.php">Map</a></li>
        <li><a href="rating.php">Rate Us</a></li>
        <li><a href="contract.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
    </ul>
</div>

    <div class="<?php echo strtolower($allData['name']) ?>">
       <div class="name">
            <h1><?php echo $allData['name'] ?></h1>
            <h3><?php echo $allData['description'] ?></h3>
        </div>


         <div class="bar w-auto">

            
        	<div class="search-cty">
                <p>Search Places<p>
            </div>

        <div class="search w-auto">

            
        <input type="text" id="search-bar" placeholder="Search your destination....." name="search-bar" onkeyup="hi()">

        

                 <div class="autocom-box" id="autocom-box">
                 <?php if(isset($getTop)){ foreach($getTop as $val){ ?>
                        <li><a href="blog.php?rel_id=<?php print $val['id'] ?>"><?php print $val['name'] ?></a></li>
                <?php }} ?>
                 </div>
    
    <script >
        const hi = ()  => {
    
            let filter = document.getElementById('search-bar').value.toUpperCase();
    
            let div = document.getElementById('autocom-box');
    
            let li = div. getElementsByTagName ('li');
    
            for (var i=0; i<li.length;  i++){
    
                let a = li[i].getElementsByTagName('a')[0];
    
                let textValue = a.textContent  || a.innerHTML;
    
                if( textValue.toUpperCase().indexOf(filter) > -1){
    
                    li[i].style.display ='';
                }
                else{
                  
                    li[i].style.display ='none';
      
                }
    
            }
    
        }
    </script>
               
                <div class="icon"><i class="fa-solid fa-magnifying-glass-location"></i></div>
               
            </div>
        </div>




        </div>
     </div>
    </div>

     
    <div class="blank">
        <p>Top Tourist Places</p>
     </div>
     <div class="city">
<?php if(isset($getTop)){ foreach($getTop as $val){ ?>
<style>
    .top_<?php print $val['id'] ?>{
	background-image: url("admin/spotlight_destination/top-image/<?php print $val['image'] ?>");
	background-size: 100% 100%;
	background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    border-radius: 8px;
	
	}
</style>
    
        <div class="box1 box">
            <div class="top_<?php print $val['id'] ?> child" ></div>
            <div class="h2a">
                <h2><?php print $val['name'] ?></h2>
                <a href="blog.php?rel_id=<?php print $val['id'] ?>">Explore Your Tour</a>
            </div>
            
         </div>
    

<?php } } ?>
</div>
</body>
</html>
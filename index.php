
<?php
include "header/header.php";

include "database/data-save.php";
$db = new Data_save;
$images = $db->getSliderImage(); 
$getVideo = $db->getVideo();
$Destination = $db->getDestination();
// var_dump($Destination);
 
$imageStyle = '';

foreach ($images as $index => $imageName) {
    $image = 'admin/upload/img/' . $imageName;
    $imageStyle .= "\n\t" . ($index * 30) . "% { background-image: url(\"{$image}\"); }";
}

?>
<style>

    /* navbar */
    .navbar {
        height: 700px;
        width: 100%;
        background-image: url("<?php echo $images[0]; ?>");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        display: flex;
        flex-wrap: wrap;
        animation-name: bodyImage;
        animation: bodyImage 15s linear infinite;
    }

    @keyframes bodyImage {
        <?php echo $imageStyle; ?>
    }
    <?php
    foreach ($Destination as $key => $value) {
        echo ".box" . ($key + 1) . "{\n";
        echo "\tbackground-image: url(\"admin/spotlight_destination/thumbline/" . $value['image'] . "\");\n";
        echo "\tbackground-size: 100% 100%;\n";
        echo "\tbackground-repeat: no-repeat;\n";
        echo "\theight: 280px;\n";
        echo "\twidth: 400px;\n";
        echo "\tborder-radius: 8px;\n";
        echo "}\n\n";
    }
    ?>
</style>

<div class="division">
    <p> Spotlight Destinations</p>

    <?php
    if(!isset($_SESSION['user_session'])) {
        $page="login.php";
    }else{
        $page="city-inner.php";
    }
    foreach ($Destination as $key => $value) {
        echo "<div class=\"box" . ($key + 1) . " box\">\n";
        echo "\t<h2>" . $value['name'] . "</h2>\n";
        echo "\t<a href=\"$page?rel_id={$value['id']}\">Explore " . $value['hour'] . " Tour</a>\n";
        echo "</div>\n";
    }
    ?>
</div>

<div class="body2">

    <video autoplay loop muted plays-inline class="body-video">
        <source src="admin/upload/img/video<?php print $getVideo ?>" type="video/mp4">
    </video>

    
      

<div class="start">

    <h3> Leave The Planning To Us</h3>
    
<div class="adv1">

   <div class="fst">
     <i class="fa-solid fa-circle-check"></i>
     <p class="f-cmnt">Tell us your destination, date, and group size</p>
</div>

<div class="sec">
    <i class="fa-solid fa-circle-check"></i>
    <p class="s-cmnt">Our team of travel experts and guides will design a tailored itinerary just for you</p>
</div>

<div class="trd">
    <i class="fa-solid fa-circle-check"></i>
    <p class="t-cmnt">Enjoy your trip with peace of mind knowing everything is taken care of</p>
</div>

<div class="four">
    <a href="login.php">Plan My Holiday <i class="fa-solid fa-arrow-right"></i></a>
    
</div>

<div class="last">
<small>Say Goodbye to Travel Stress</small>
</div>

</div>



</div>

</div>


<div class="footer">


    <div class="f-half">

        <div class="about">
            About Us
        </div>
       
        <div class="f-step">
            At Bangladesh Tourist Guide, we firmly believe that if there's a purpose to life, it is to journey into the unknown, encounter the unfamiliar, and live the unimaginable! Our mission is to empower you, the traveller, to realise this purpose and make the most of your travel by assisting you in the best way possible.
        </div>
       
        <div class="s-step">
            With Bangladesh Tourist Guide local guides, you can effortlessly navigate through local languages, customs, and traditions that often make travelling to a foreign place overwhelming. We offer best selling readily booked travel itineraries, once-in-a-lifetime experiences, valuable travel advice, and the freedom to customise itineraries to ensure everything is as per your wishlist!
        </div>

        <div class="t-step">
            Since its inception in 2012, Bangladesh Tourist Guide has built a travel community of 30,000+ guides from over 195 countries globally, and we continue to grow with each passing day. With tourHQ by your side, there's no limit to the different ways you can discover the world!
        </div>

        <div class="l-step">
            We welcome you to the Bangladesh Tourist Guide family - where every journey becomes a story worth sharing!
        </div>

    </div>

    <div class="s-half">

        <div class="f-box ">
            <div class="f-logo">
                <i class="fa-solid fa-user-check"></i>
            </div>

            <div class="f-num">
                187+
            </div>

            <div class="guide">
                Guides

            </div>
        </div>

        <div class="s-box ">
            <div class="s-logo">
                <i class="fa-solid fa-earth-asia"></i>
            </div>

            <div class="s-num">
                100+
            </div>

            <div class="tour">
                Tours

            </div>
        </div>


        <div class="t-box ">
            <div class="t-logo">
                <i class="fa-solid fa-map-location-dot"></i>
            </div>

            <div class="t-num">
                73+
            </div>

            <div class="destination">
                Destinations

            </div>
        </div>


    </div>
</div>

</html>
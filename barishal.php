<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-Your">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

		<link rel="stylesheet" type="text/css" href="barishal.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpdYouryknf1YoNbCzqRKc4qyorYourgaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
<div class="f1">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="barishal.php">Tour</a></li>
        <li><a href="googlemap.php">Map</a></li>
        <li><a href="guide.php">Tour Guide</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
    </ul>
</div>

    <div class="dhaka">

        <div class="name">
            <h1>Barishal</h1>
            <h3>Barisal Division is one of the eight administrative divisions of Bangladesh. Located in the south-central part of the country, it has an area of 13,644.85 km2 (5,268.31 sq mi), and a population of 9,100,102 at the 2011 Census. It is the least populous Division within the entirety of Bangladesh. It is bounded by Dhaka Division on the north, the Bay of Bengal on the south, Chittagong Division on the east and Khulna Division on the west. </h3>
        </div>


         <div class="bar">

            
        	<div class="search-cty">
                <p>Search Places<p>
            </div>

        <div class="search">

        <div class="search-bar">   
        <input type="text" id="search-bar" placeholder="Search your destination....." name="search-bar" onkeyup="hi()">

                 <div class="autocom-box" id="autocom-box">
                        
                    <li><a href="bkuakata.php">Kuakata Beach and Tourist Center</a></li>
                    <li><a href="bsonar.php">Sonarchar Beach (Patuakhali)</a></li>
                    <li><a href="bguava.php">Floating guava market</a></li>
                    <li><a href="bdurga.php">Durgasagar Dighi (Barisal)</a></li>
                    <li><a href="blebu.php">Lebur chor (Kuakata)</a></li>
                    <li><a href="bjacob.php">Jacob Watch Tower (Bhola)</a></li>
                    <li><a href="bnil.php">Nilsagor</a></li>
                    <li><a href="bbibi.php">Bibi Pukur (Barishal) </a></li>
                        
                       
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
               
                </div>
            </div>
        </div>




        </div>
     </div>
    <header>


    <div class="body_n">
    <div class="blank">
        <p>Top Tourist Places</p>
     </div>

     <div class="city_back"> 
     <div class="city">


        <div class="box1 box">
            <div class="lalbag child" ></div>
            <div class="h2a">
            <a href="x"></a>
            <h2>Kuakata Beach and Tourist Center</h2>
            <a href="bkuakata.php">Explore Your Tour</a>
        </div>
            
         </div>


        <div class="box2 box">
            <div class="ahsan child">
           </div>
           <div class="h2a">
            <h2>Sonarchar Beach (Patuakhali)</h2>
            <a href="bsonar.php">Explore Your Tour</a>
        </div>
        </div>
    
    
        <div class="box3 box">
            <div class="sohid child"></div>
            <div class="h2a">
            <h2>Floating guava market </h2>
           <a href="bguava.php">Explore Your Tour</a>
        </div>
        </div>

        <div class="box4 box">
            <div class="hatirjheel child">
           </div>
           <div class="h2a">
            <h2>Durgasagar Dighi (Barisal)</h2>
            <a href="bdurga.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box5 box">
            <div class="panam child"></div>
            <div class="h2a">
            <h2>Lebur chor (Kuakata)</h2>
            <a href="blebu.php">Explore Your Tour</a>
            </div>
        </div>


        <div class="box6 box">
            <div class="botanical child"></div>
            <div class="h2a">
            <h2>Jacob Watch Tower (Bhola)</h2>
            <a href="bjacob.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box7 box">
            <div class="zoo child"></div>
            <div class="h2a">
            <h2>Nilsagor</h2>
            <a href="bnil.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box8 box">
            <div class="safari child"></div>
            <div class="h2a">
            <h2>Bibi Pukur (Barishal)</h2>
            <a href="bbibi.php">Explore Your Tour</a>
        </div>
        </div>

        </div>
        </div>
     </div>


</body>
</html>